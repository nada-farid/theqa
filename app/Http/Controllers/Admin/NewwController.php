<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyNewwRequest;
use App\Http\Requests\StoreNewwRequest;
use App\Http\Requests\UpdateNewwRequest;
use App\Models\Neww;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class NewwController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('neww_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Neww::query()->select(sprintf('%s.*', (new Neww)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'neww_show';
                $editGate      = 'neww_edit';
                $deleteGate    = 'neww_delete';
                $crudRoutePart = 'newws';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('image', function ($row) {
                if ($photo = $row->image) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });

            $table->editColumn('published', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->published ? 'checked' : null) . '>';
            });
            $table->editColumn('short_description', function ($row) {
                return $row->short_description ? $row->short_description : '';
            });
            $table->editColumn('inner_image', function ($row) {
                return $row->inner_image ? $row->inner_image : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'image', 'published']);

            return $table->make(true);
        }

        return view('admin.newws.index');
    }

    public function create()
    {
        abort_if(Gate::denies('neww_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.newws.create');
    }

    public function store(StoreNewwRequest $request)
    {
        $neww = Neww::create($request->all());

        if ($request->input('image', false)) {
            $neww->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $neww->id]);
        }

        if ($request->input('inside_image', false)) {
            $neww->addMedia(storage_path('tmp/uploads/' . basename($request->input('inside_image'))))->toMediaCollection('inside_image');
        }

        return redirect()->route('admin.newws.index');
    }

    public function edit(Neww $neww)
    {
        abort_if(Gate::denies('neww_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.newws.edit', compact('neww'));
    }

    public function update(UpdateNewwRequest $request, Neww $neww)
    {
        $neww->update($request->all());

        if ($request->input('image', false)) {
            if (! $neww->image || $request->input('image') !== $neww->image->file_name) {
                if ($neww->image) {
                    $neww->image->delete();
                }
                $neww->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($neww->image) {
            $neww->image->delete();
        }

        if ($request->input('inside_image', false)) {
            if (! $neww->inside_image || $request->input('inside_image') !== $neww->inside_image->file_name) {
                if ($neww->inside_image) {
                    $neww->inside_image->delete();
                }
                $neww->addMedia(storage_path('tmp/uploads/' . basename($request->input('inside_image'))))->toMediaCollection('inside_image');
            }
        } elseif ($neww->inside_image) {
            $neww->inside_image->delete();
        }

        return redirect()->route('admin.newws.index');
    }

    public function show(Neww $neww)
    {
        abort_if(Gate::denies('neww_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.newws.show', compact('neww'));
    }

    public function destroy(Neww $neww)
    {
        abort_if(Gate::denies('neww_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $neww->delete();

        return back();
    }

    public function massDestroy(MassDestroyNewwRequest $request)
    {
        $newws = Neww::find(request('ids'));

        foreach ($newws as $neww) {
            $neww->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('neww_create') && Gate::denies('neww_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Neww();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
