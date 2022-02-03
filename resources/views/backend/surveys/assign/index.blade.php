@extends('layouts.appMaster')

@section('title', 'Assign Survey')

@section('page-style')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/base/pages/page-telephonic.css') }}">
@endsection

@section('content')
  <section id="column-search-datatable">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header border-bottom">
            <h4 class="card-title">All Survey Details</h4>
            {{--            <div class="heading-elements">--}}
            <ul class="list-inline m-0">
              <li><a class="btn btn-outline-dark"><i data-feather="search"></i></a></li>
              <li><a class="btn btn-primary">Create Survey</a></li>
            </ul>
            {{--            </div>--}}
          </div>
          <div class="card-body d-flex flex-column align-items-center justify-content-center" style="min-height: 70vh;">
            <button class="btn btn-outline-dark"><i data-feather="x" class="feather-32"></i></button>
            <p class="m-1">Sorry you have not assigned a survey yet</p>
            <button class="btn btn-primary"><i data-feather="plus"></i> Add Assign To</button>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

