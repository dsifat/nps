@extends('layouts.appMaster')

@section('title', 'Assign Survey')

@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/pages/page-assign-survey.css') }}">
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
                                    <label>Deadline</label>
                                    <input type='text' class="form-control pickadate"/>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-12">
                                <fieldset class="form-group">
                                    <label class="form-label" for="customFile">Upload MSISDN</label>
                                    <input type="file" class="form-control" id="customFile"/>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-12">
                                <fieldset class="form-group">
                                    <label>Special Instructions</label>
                                    <input type='text' placeholder="Write any instructions" class="form-control"/>
                                </fieldset>
                                <fieldset class="form-group">
                                    <textarea class="form-control" id="basicTextarea" rows="3"
                                              placeholder="Special Instructions"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-12">
                                <form action="#" class="dropzone dropzone-area form-file-upload"
                                      id="my-awesome-dropzone">
                                    <div class="dz-message d-flex flex-column">
                                        <p class="p-1">
                                            Drop files here or click to upload.
                                        </p>
                                        <div class="d-flex justify-content-center">
                                            <p class="p-1 upload-file-text" style="color: white;">
                                                Upload Files</p>
                                        </div>
                                        <p class="p-1">File can't be more than 300kb size</p>
                                    </div>
                                </form>
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
    <script>
        // $('#my-awesome-dropzone').dropzone({
        //
        // });
    </script>
@endsection
