<?php

namespace App\Providers;


use App\Models\Setting;
use App\Models\Service;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {  
        $setting = Setting::first();
        $services = Service::all();
        
        View::share('setting', $setting);
        View::share('services', $services);
    }

    public function register()
    {
        //
    }
}
