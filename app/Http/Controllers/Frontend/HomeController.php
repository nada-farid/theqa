<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Director;
use App\Models\Gallery;
use App\Models\HawkamCategory;
use App\Models\Hawkma;
use App\Models\News;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Report;
use App\Models\ReportCategory;
use App\Models\SaidAboutUs;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Strategy;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //
    public function index()
    {
        $sliders = Slider::all();
        $services = Service::get();
        $projects = Project::all();
        $Strategies = Strategy::all();
        return view('frontend.index', compact('sliders', 'services', 'projects','Strategies'));
    }

    public function about(){
        $team = Team::all();
        return view('frontend.about',compact('team'));
    }

    public function cache()
    {
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
      
            Artisan::call('storage:link');
    }
}
