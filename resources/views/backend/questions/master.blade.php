@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

        <!DOCTYPE html>
{{-- {!! Helper::applClasses() !!} --}}
@php
  $configData = Helper::applClasses();
@endphp

<html lang="@if(session()->has('locale')){{session()->get('locale')}}@else{{$configData['defaultLanguage']}}@endif" data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}" class="{{ ($configData['theme'] === 'light') ? '' : $configData['layoutTheme'] }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title') - {{ config('app.full_name') }}</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

  @yield('third_party_stylesheets_before')

  @include('panels/styles')

  @yield('third_party_stylesheets_after')

</head>



@isset($configData["mainLayoutType"])
  @extends('backend.questions.layout')
@endisset