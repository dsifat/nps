@extends('layouts.appMaster')

@section('title', 'Telephonic Survey')

@section('page-style')
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/base/pages/page-telephonic.css') }}">--}}
@endsection

@section('content')
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="d-flex ">
                            <h4 class="card-title">All Surveys</h4>
                            <span class="ml-1">(Total 25 surveys created)</span>
                        </div>

                        <div class="heading-elements">
                            <ul class="list-inline m-0">
                                <li><a class="btn btn-primary">View Agent List</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card-body d-flex flex-column align-items-center justify-content-center"
                         style="min-height: 70vh;">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex flex-row justify-content-start">
                                        {{--                                <span class="pr-1">3.</span>--}}
                                        <input type="checkbox"/>
                                        <div class="d-flex flex-column pl-2 pb-2">
                                            <h6>New product development survey</h6>
                                            <small class="text-muted">With faded secondary text</small>
                                        </div>
                                        {{--                            <input type="checkbox" /> New product development survey <br />--}}
                                    </div>
                                </div>
                                <div class="col-6 d-flex flex-column">

                                <div class="col-6">
                                    {!! Form::open(['route' => 'backend.users.store']) !!}
                                    <div class="form-group">
                                        {!! Form::label('assign_to', 'Assign to') !!}
                                        {!! Form::text('assign_to', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                    <div class="col-6">
                                        {!! Form::open(['route' => 'backend.users.store']) !!}
                                        <div class="form-group">
                                            {!! Form::label('assign_to', 'Assign to') !!}
                                            {!! Form::text('assign_to', null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


