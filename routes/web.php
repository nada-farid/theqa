<?php
Route::group(['as' => 'frontend.'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/projects', 'ProjectController@projects')->name('projects');
    Route::get('/project/{project}', 'ProjectController@project')->name('project');
    Route::get('/news', 'NewController@news')->name('news');
    Route::get('/new/{new}', 'NewController@new')->name('new');
    Route::get('/service/{service}', 'ServiceController@service')->name('service');
    Route::get('/career', 'CareerController@career')->name('career');
    Route::post('/career/store', 'CareerController@store')->name('career.store');
    Route::get('/contact', 'ContactUsController@contact')->name('contact');
    Route::post('/contact/store', 'ContactUsController@store')->name('contact.store');
    Route::get('/clear-cache', 'HomeController@cache');


    
});

Route::get('/change-language/{language}', function ($language) {
    if (in_array($language, ['ar', 'en'])) { 
        session()->put('language', $language);
    }
    return redirect()->back();
})->name('change.language');

