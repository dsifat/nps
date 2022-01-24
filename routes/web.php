<?php


use App\Http\Controllers\Auth\OTPController;
use App\Http\Controllers\Auth\UpdatePassController;

use App\Http\Controllers\Backend\CompetitiveSurveyController;
use App\Http\Controllers\LanguageController;

Auth::routes([
    'reset' => true,
    'verify' => true,
    'register' => false,
]);

// locale Route
// Route::get('lang/{locale}', [LanguageController::class, 'swap']);
Route::middleware(['auth', 'can:SUPER-ADMIN'])->group(function () {
    Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

    Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

    Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

    Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

    Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

    Route::post(
        'generator_builder/generate-from-file',
        '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
    )->name('io_generator_builder_generate_from_file');
});

Route::get('/password/otp/validate',[OTPController::class, 'index']);

Route::get('/password/change',[UpdatePassController::class, 'index']);

Route::get('/survey/competitive',[CompetitiveSurveyController::class, 'index']);


// Route::middleware(['auth', 'verified'])->group(function () {
Route::middleware(['auth'])->group(function () {
    // Main Page Route
    // Route::get('/', 'DashboardController@dashboardEcommerce')->name('dashboard-ecommerce');
    Route::get('/', 'DashboardController@index')->name('dashboard-ecommerce');

    /* Route Dashboards */
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('analytics', 'DashboardController@dashboardAnalytics')->name('dashboard-analytics');
        // Route::get('ecommerce', 'DashboardController@dashboardEcommerce')->name('dashboard-ecommerce');
    });

    Route::resource('/roles', 'Backend\RoleController', ["as" => 'backend']);
    Route::resource('/permissions', 'Backend\PermissionController', ["as" => 'backend']);
    Route::resource('/users', 'Backend\UserController', ["as" => 'backend']);
    Route::resource('/emailGroups', 'Backend\EmailGroupController', ["as" => 'backend']);
    Route::post('/scheduleTasks/runTaskNow/{id}', 'Backend\ScheduleTaskController@runTaskNow')->name('backend.scheduleTasks.runTaskNow');
    Route::resource('/scheduleTasks', 'Backend\ScheduleTaskController', ["as" => 'backend']);
});

Route::get('/privacy-policy', function () {
    return view('content.privacy-policy.privacyPolicy');
});


Route::group(['prefix' => 'backend'], function () {
    Route::resource('subjects', 'Backend\SubjectController', ["as" => 'backend']);
});


Route::group(['prefix' => 'backend'], function () {
    Route::resource('questions', 'Backend\QuestionController', ["as" => 'backend']);
});


Route::group(['prefix' => 'backend'], function () {
    Route::resource('topics', 'Backend\TopicController', ["as" => 'backend']);
});


Route::group(['prefix' => 'backend'], function () {
    Route::resource('phoneGroups', 'Backend\PhoneGroupController', ["as" => 'backend']);
});


Route::group(['prefix' => 'backend'], function () {
    Route::resource('phones', 'Backend\PhoneController', ["as" => 'backend']);
});
