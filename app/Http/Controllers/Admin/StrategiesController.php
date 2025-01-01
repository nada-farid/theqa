<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyStrategyRequest;
use App\Http\Requests\StoreStrategyRequest;
use App\Http\Requests\UpdateStrategyRequest;
use App\Models\Strategy;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StrategiesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('strategy_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $strategies = Strategy::all();

        return view('admin.strategies.index', compact('strategies'));
    }

    public function create()
    {
        abort_if(Gate::denies('strategy_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.strategies.create');
    }

    public function store(StoreStrategyRequest $request)
    {
        $strategy = Strategy::create($request->all());

        return redirect()->route('admin.strategies.index');
    }

    public function edit(Strategy $strategy)
    {
        abort_if(Gate::denies('strategy_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.strategies.edit', compact('strategy'));
    }

    public function update(UpdateStrategyRequest $request, Strategy $strategy)
    {
        $strategy->update($request->all());

        return redirect()->route('admin.strategies.index');
    }

    public function show(Strategy $strategy)
    {
        abort_if(Gate::denies('strategy_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.strategies.show', compact('strategy'));
    }

    public function destroy(Strategy $strategy)
    {
        abort_if(Gate::denies('strategy_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $strategy->delete();

        return back();
    }

    public function massDestroy(MassDestroyStrategyRequest $request)
    {
        $strategies = Strategy::find(request('ids'));

        foreach ($strategies as $strategy) {
            $strategy->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
