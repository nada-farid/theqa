<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Alert;

class SettingsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('setting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $settings = Setting::with(['media'])->get();

        return view('admin.settings.index', compact('settings'));
    }

    public function edit()
    {
        $setting = Setting::first();

        abort_if(Gate::denies('setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.settings.edit', compact('setting'));
    }

    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $setting->update($request->all());

        if ($request->input('about_photo', false)) {
            if (! $setting->about_photo || $request->input('about_photo') !== $setting->about_photo->file_name) {
                if ($setting->about_photo) {
                    $setting->about_photo->delete();
                }
                $setting->addMedia(storage_path('tmp/uploads/' . basename($request->input('about_photo'))))->toMediaCollection('about_photo');
            }
        } elseif ($setting->about_photo) {
            $setting->about_photo->delete();
        }

        if ($request->input('logo', false)) {
            if (!$setting->logo || $request->input('logo') !== $setting->logo->file_name) {
                if ($setting->logo) {
                    $setting->logo->delete();
                }
                $setting->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
            }
        } elseif ($setting->logo) {
            $setting->logo->delete();
        }

        if ($request->input('white_logo', false)) {
            if (!$setting->white_logo || $request->input('white_logo') !== $setting->white_logo->file_name) {
                if ($setting->white_logo) {
                    $setting->white_logo->delete();
                }
                $setting->addMedia(storage_path('tmp/uploads/' . basename($request->input('white_logo'))))->toMediaCollection('white_logo');
            }
        } elseif ($setting->white_logo) {
            $setting->white_logo->delete();
        }


        if ($request->input('chairman_image', false)) {
            if (! $setting->chairman_image || $request->input('chairman_image') !== $setting->chairman_image->file_name) {
                if ($setting->chairman_image) {
                    $setting->chairman_image->delete();
                }
                $setting->addMedia(storage_path('tmp/uploads/' . basename($request->input('chairman_image'))))->toMediaCollection('chairman_image');
            }
        } elseif ($setting->chairman_image) {
            $setting->chairman_image->delete();
        }

        if ($request->input('about_image', false)) {
            if (! $setting->about_image || $request->input('about_image') !== $setting->about_image->file_name) {
                if ($setting->about_image) {
                    $setting->about_image->delete();
                }
                $setting->addMedia(storage_path('tmp/uploads/' . basename($request->input('about_image'))))->toMediaCollection('about_image');
            }
        } elseif ($setting->about_image) {
            $setting->about_image->delete();
        }

        if ($request->input('vision_image', false)) {
            if (! $setting->vision_image || $request->input('vision_image') !== $setting->vision_image->file_name) {
                if ($setting->vision_image) {
                    $setting->vision_image->delete();
                }
                $setting->addMedia(storage_path('tmp/uploads/' . basename($request->input('vision_image'))))->toMediaCollection('vision_image');
            }
        } elseif ($setting->vision_image) {
            $setting->vision_image->delete();
        }

        if ($request->input('mission_image', false)) {
            if (! $setting->mission_image || $request->input('mission_image') !== $setting->mission_image->file_name) {
                if ($setting->mission_image) {
                    $setting->mission_image->delete();
                }
                $setting->addMedia(storage_path('tmp/uploads/' . basename($request->input('mission_image'))))->toMediaCollection('mission_image');
            }
        } elseif ($setting->mission_image) {
            $setting->mission_image->delete();
        }

        if ($request->input('inner_image', false)) {
            if (! $setting->inner_image || $request->input('inner_image') !== $setting->inner_image->file_name) {
                if ($setting->inner_image) {
                    $setting->inner_image->delete();
                }
                $setting->addMedia(storage_path('tmp/uploads/' . basename($request->input('inner_image'))))->toMediaCollection('inner_image');
            }
        } elseif ($setting->inner_image) {
            $setting->inner_image->delete();
        }

        
        if ($request->input('signature_image', false)) {
            if (! $setting->signature_image || $request->input('signature_image') !== $setting->signature_image->file_name) {
                if ($setting->signature_image) {
                    $setting->signature_image->delete();
                }
                $setting->addMedia(storage_path('tmp/uploads/' . basename($request->input('signature_image'))))->toMediaCollection('signature_image');
            }
        } elseif ($setting->signature_image) {
            $setting->signature_image->delete();
        }

        Alert::success('Success', 'updated Successfully ');

        return redirect()->route('admin.settings.edit');
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('setting_create') && Gate::denies('setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Setting();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
