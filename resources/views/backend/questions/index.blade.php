@extends('layouts.appMaster')

@section('title', 'Question Bank')

@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/pages/app-question-bank.css') }}">
@endsection

@section('content')
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Question Bank</h4>
                        <ul class="list-inline m-0 d-none d-sm-none d-md-none d-lg-block">
                            <li><a class="btn btn-outline-dark"><i data-feather="search"></i></a></li>
                            <li><a class="btn btn-outline-dark">Export</a></li>
                            <li><a class="btn btn-primary" data-toggle="modal" data-target="#yourModal">Create Question</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="row d-lg-none d-xl-none">
                                <input type="text" class="my-1 col-md-12 form-control" placeholder="Search">
                                <a class="col-md-12 btn btn-block btn-outline-dark">Export</a>
                                <a class="col-md-12 btn btn-block btn-primary" data-toggle="modal" data-target="#yourModal">Create Question</a>
                            </div>
                        </div>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                   role="tab" aria-controls="nav-home" aria-selected="true">General Survey</a>
                                <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                   role="tab" aria-controls="nav-profile" aria-selected="false">Telephonic Survey</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                 aria-labelledby="nav-home-tab">
                                <div class="row p-1 bg-light mx-0">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <select class="select2 form-control">
                                                <option value="square">Square</option>
                                                <option value="rectangle">Rectangle</option>
                                                <option value="rombo">Rombo</option>
                                                <option value="romboid">Romboid</option>
                                                <option value="trapeze">Trapeze</option>
                                                <option value="traible">Triangle</option>
                                                <option value="polygon">Polygon</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <select class="select2 form-control">
                                                <option value="square">Square</option>
                                                <option value="rectangle">Rectangle</option>
                                                <option value="rombo">Rombo</option>
                                                <option value="romboid">Romboid</option>
                                                <option value="trapeze">Trapeze</option>
                                                <option value="traible">Triangle</option>
                                                <option value="polygon">Polygon</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <select class="select2 form-control">
                                                <option value="square">Square</option>
                                                <option value="rectangle">Rectangle</option>
                                                <option value="rombo">Rombo</option>
                                                <option value="romboid">Romboid</option>
                                                <option value="trapeze">Trapeze</option>
                                                <option value="traible">Triangle</option>
                                                <option value="polygon">Polygon</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-datatable">
                                    <div class="table-responsive">
                                        <table class="table row-grouping">
                                            <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>How high or low quality are our products or services?</td>
                                                <td><i class="feather" data-feather="chevron-down"></i></td>
                                            </tr>

                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Title</th>
                                                <th>Action</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

                                {{--                                <div class="row d-flex flex-column align-items-center justify-content-center" style="min-height: 70vh;">--}}
                                {{--                                    <button class="btn btn-outline-dark"><i data-feather="x" class="feather-32"></i></button>--}}
                                {{--                                    <p class="m-1">Please select a Category first then select Topic you can see all questions here</p>--}}
                                {{--                                    <button class="btn btn-primary"><i data-feather="plus"></i> Create Question</button>--}}
                                {{--                                </div>--}}
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                 aria-labelledby="nav-profile-tab">asdsd
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                 aria-labelledby="nav-contact-tab">...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="yourModal" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="flex-direction: column;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Question</h4>
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
@endsection

@section('page-script')
    <script src="{{ asset('vendors/js/extensions/dropzone.min.js') }}"></script>
@endsection
