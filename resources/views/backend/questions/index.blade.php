@extends('layouts.appMaster')

@section('title', 'Competitive Survey')

@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}">
@endsection

@section('content')
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Competitive Survey List</h4>
                        {{--            <div class="heading-elements">--}}
                        <ul class="list-inline m-0">
                            <li><a class="btn btn-outline-dark"><i data-feather="search"></i></a></li>
                            <li><a class="btn btn-outline-dark">Export</a></li>
                            <li><a class="btn btn-primary" data-toggle="modal" data-target="#yourModal">Upload
                                    Survey</a></li>
                        </ul>
                        {{--            </div>--}}
                        <div class="modal fade" id="yourModal" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="flex-direction: column;">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Upload Survey Files</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" class="dropzone dropzone-area" id="my-awesome-dropzone">
                                            <div class="dz-message d-flex flex-column">
                                                <p class="p-1">
                                                    Drop files here or click to upload.
                                                </p>
                                                <div class="d-flex justify-content-center">
                                                    <p class="p-1 col-4"
                                                       style="background-color: #04AA6D!important; border-radius: 5px;">
                                                        Upload Files</p>
                                                </div>

                                                <p class="p-1">File can't be more than 300kb size</p>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer d-flex align-items-center" style="justify-content: center">
                                        <button type="button" class="btn btn-primary">Done</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">General Survey</a>
                                <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Telephonic Survey</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="col-sm-4">
                                            
                                        </div>
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">asdsd</div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                        </div>

{{--                        <div class="table-responsive">--}}
{{--                            <table class="table row-grouping">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>Survey Name</th>--}}
{{--                                    <th>Date</th>--}}
{{--                                    <th>Download</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td>Customer intention – purchase analysis surveys 2020</td>--}}
{{--                                    <td>17 Sep,2021</td>--}}
{{--                                    <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Customer intention – purchase analysis surveys 2020</td>--}}
{{--                                    <td>17 Sep,2021</td>--}}
{{--                                    <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Customer intention – purchase analysis surveys 2020</td>--}}
{{--                                    <td>17 Sep,2021</td>--}}
{{--                                    <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Customer intention – purchase analysis surveys 2020</td>--}}
{{--                                    <td>17 Sep,2021</td>--}}
{{--                                    <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Customer intention – purchase analysis surveys 2020</td>--}}
{{--                                    <td>17 Sep,2021</td>--}}
{{--                                    <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Customer intention – purchase analysis surveys 2020</td>--}}
{{--                                    <td>17 Sep,2021</td>--}}
{{--                                    <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Customer intention – purchase analysis surveys 2020</td>--}}
{{--                                    <td>17 Sep,2021</td>--}}
{{--                                    <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Customer intention – purchase analysis surveys 2020</td>--}}
{{--                                    <td>17 Sep,2021</td>--}}
{{--                                    <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Customer intention – purchase analysis surveys 2020</td>--}}
{{--                                    <td>17 Sep,2021</td>--}}
{{--                                    <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Customer intention – purchase analysis surveys 2020</td>--}}
{{--                                    <td>17 Sep,2021</td>--}}
{{--                                    <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Customer intention – purchase analysis surveys 2020</td>--}}
{{--                                    <td>17 Sep,2021</td>--}}
{{--                                    <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                                <tfoot>--}}
{{--                                <tr>--}}
{{--                                    <th>Survey Name</th>--}}
{{--                                    <th>Date</th>--}}
{{--                                    <th>Download</th>--}}
{{--                                </tr>--}}
{{--                                </tfoot>--}}
{{--                            </table>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page-script')
    <script src="{{ asset('vendors/js/extensions/dropzone.min.js') }}"></script>
@endsection
