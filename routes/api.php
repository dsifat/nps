<?php

use App\Http\Controllers\AuthAPI\AuthController;

Route::group([
    'prefix' => 'auth',
], function () {
    Route::post('login', [AuthController::class, 'login']);

    Route::group([
        'middleware' => 'auth:api',
    ], function () {
        Route::get('logout', [AuthController::class, 'logout']);
        Route::get('user', [AuthController::class, 'user']);
    });
});

Route::group([
    'middleware' => 'auth:api',
    'prefix' => 'v1',
], function () {
    // Route::apiResource('packages', 'Backend\PackageAPIController');
    // Route::post('subscriptions/stop', 'Backend\SubscriptionAPIController@stopSubscription')->named('api.subscriptions.stop');
});

Route::group([
    'middleware' => 'client',
    'prefix' => 'v1',
], function () {
    // Route::post('subscriptions/stopFromBingeCore', 'Backend\SubscriptionAPIController@stopFromBingeCore')->named('api.subscriptions.stopFromBingeCore');
});


Route::group(['prefix' => 'backend'], function () {
    Route::resource('subjects', 'Backend\SubjectAPIController');
});

//
//Route::group(['prefix' => 'backend'], function () {
//    Route::resource('questions', App\Http\Controllers\API\Backend\QuestionAPIController::class);
//});
//
//
//Route::group(['prefix' => 'backend'], function () {
//    Route::resource('topics', App\Http\Controllers\API\Backend\TopicAPIController::class);
//});
//
//
//Route::group(['prefix' => 'backend'], function () {
//    Route::resource('email_groups', App\Http\Controllers\API\Backend\EmailGroupAPIController::class);
//});
//
//
//Route::group(['prefix' => 'backend'], function () {
//    Route::resource('phone_groups', App\Http\Controllers\API\Backend\PhoneGroupAPIController::class);
//});
//
//
//Route::group(['prefix' => 'backend'], function () {
//    Route::resource('phones', App\Http\Controllers\API\Backend\PhoneAPIController::class);
//});
//
//
//
//
//
//
//Route::group(['prefix' => 'backend'], function () {
//    Route::resource('surveys', App\Http\Controllers\API\Backend\SurveyAPIController::class);
//});


Route::group(['prefix' => 'backend'], function () {
    Route::resource('competitive_surveys', App\Http\Controllers\API\Backend\Backend\CompetitiveSurveyAPIController::class);
});


Route::group(['prefix' => 'backend'], function () {
    Route::resource('settings', App\Http\Controllers\API\Backend\Backend\SettingsAPIController::class);
});
