@extends('layouts.appMaster')

@section('title', 'Assign Survey')

@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/pages/page-assign-survey.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.min.css') }}">
@endsection

@section('content')
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="d-flex">
                            <h4 class="card-title">Assign Survey</h4>
                            <span class="card-title-count-text">(Total 25 surveys created)</span>
                        </div>
                        <ul class="list-inline m-0 d-none d-sm-none d-md-none d-lg-block">
                            <li><a href="{{ url('/survey/telephonic/agents') }}" class="btn btn-primary">View Agent
                                    List </a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="row d-lg-none d-xl-none mr-0 ml-0">
                            <a class="col-md-12 btn btn-block btn-primary"
                               href="{{ url('/survey/telephonic/agents') }}">View Agent List</a>
                        </div>
                        <div class="row form-input-items">
                            <div class="col-md-3 col-12">
                                <fieldset class="form-group">
                                    <label for="category">Select Category</label>
                                    <select class="form-control" id="category">
                                        <option>Business</option>
                                        <option>Marketing</option>
                                        <option>IT</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-3 col-12">
                                <fieldset class="form-group">
                                    <label for="sub-category">Sub Category</label>
                                    <select class="form-control" id="sub-category">
                                        <option>Business A</option>
                                        <option>Business B</option>
                                        <option>Business C</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-12">
                                <fieldset class="form-group">
                                    <label for="survey">Select Survey</label>
                                    <select class="form-control" id="survey">
                                        <option>New Product Development survey 2022</option>
                                        <option>Marketing Survey TTC</option>
                                        <option>Product specification survey</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-12">
                                <fieldset class="form-group">
                                    <label for="assignee_name">Select Assignee Name</label>
                                    <select class="form-control" id="survey">
                                        <option>Team A</option>
                                        <option>Team B</option>
                                        <option>Team C</option>
                                    </select>
                                </fieldset>
                                {{--                                <div class="form-group">--}}
                                {{--                                    <label for="assignee_name">Select Assignee Name</label>--}}
                                {{--                                    <select class="select2 form-control" multiple="multiple">--}}
                                {{--                                        <option value="square">Square</option>--}}
                                {{--                                        <option value="rectangle" selected>Rectangle</option>--}}
                                {{--                                        <option value="rombo">Rombo</option>--}}
                                {{--                                        <option value="romboid">Romboid</option>--}}
                                {{--                                        <option value="trapeze">Trapeze</option>--}}
                                {{--                                        <option value="traible" selected>Triangle</option>--}}
                                {{--                                        <option value="polygon">Polygon</option>--}}
                                {{--                                    </select>--}}
                                {{--                                </div>--}}
                            </div>
                            <div class="col-md-6 col-12">
                                <fieldset class="form-group">
                                    <label for="assignee_name">Customer Group</label>
                                    <select class="form-control" id="survey">
                                        <option>Banani</option>
                                        <option>Gulshan</option>
                                        <option>Malibagh</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-12">
                                <fieldset class="form-group">
                                    <label>Deadline</label>
                                    <input type='text' class="form-control pickadate"/>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-12">
                                <fieldset class="form-group">
                                    <label>Special Instructions</label>
                                    <textarea class="form-control" id="basicTextarea" rows="3"></textarea>
                                </fieldset>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <div class="">
                                <a href="{{ url('/survey/telephonic/summary') }}" class="btn btn-primary button">Next
                                </a>
                            </div>
                        </div>
                    </div>
                    {{--                    <div class="card-body d-flex flex-column align-items-center justify-content-center"--}}
                    {{--                         style="min-height: 70vh;">--}}
                    {{--                        <button class="btn btn-outline-dark"><i data-feather="x" class="feather-32"></i></button>--}}
                    {{--                        <p class="m-1">Sorry you have not assigned a survey yet</p>--}}
                    {{--                        <button class="btn btn-primary"><i data-feather="plus"></i> Add Assign To</button>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page-script')
    <!-- Page js files -->
    {{--    <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>--}}
    {{--    <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>--}}
    {{--    <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.time.js')) }}"></script>--}}
    {{--    <script src="{{ asset(mix('vendors/js/pickers/pickadate/legacy.js')) }}"></script>--}}
    <script src="{{ asset('js/scripts/pickers/dateTime/pick-a-datetime.js') }}"></script>
    <script src="{{ asset('vendors/js/extensions/dropzone.min.js') }}"></script>
    {{--    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>--}}
    <script src="{{ asset('vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/scripts/forms/select/form-select2.js') }}"></script>
    <script>
        // Select2 Multiple
        $('.select2-multiple').select2({
            placeholder: "",
            allowClear: true,
            tags: true
        });
    </script>
@endsection
