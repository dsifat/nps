@extends('layouts.appMaster')

@section('title', 'Telephonic Survey')

@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">--}}
@endsection

@section('content')
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="d-flex ">
                            <h4 class="card-title">Agent List</h4>
                        </div>
                        <ul class="list-inline m-0">
                            <li>
                                <a class="btn btn-outline-dark" href="{{ url('/survey/telephonic/assign') }}">Assign
                                    Survey</a>
                            </li>
                            <li>
                                <a class="btn btn-primary" data-toggle="modal" data-target="#yourModal">Add Agent</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex ">
                        <div class="col-md-4 p-2">
                            <fieldset class="form-group">
                                <label for="survey">Select Survey</label>
                                <select class="form-control" id="survey">
                                    <option>All</option>
                                    <option>Survey Status</option>
                                    <option>Phone Number</option>
                                    <option>Department</option>
                                </select>
                            </fieldset>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-datatable">
                            <table class="table" id="myTable">
                                <thead>
                                <tr>
                                    <th>Assignee Name</th>
                                    <th>Department</th>
                                    <th>ID No.</th>
                                    <th>Phone</th>
                                    <th>Report To</th>
                                    <th>Survey Completed</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Md Mokhter Ali</td>
                                    <td>Business</td>
                                    <td>1234rsdaf4</td>
                                    <td>01833232423</td>
                                    <td>Abdullah</td>
                                    <td>32</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-more-horizontal">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Md Mohammad Ali</td>
                                    <td>IT</td>
                                    <td>1234rsdaf4</td>
                                    <td>01833232423</td>
                                    <td>Abdullah</td>
                                    <td>32</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-more-horizontal">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Md Mokhter Ali</td>
                                    <td>Business</td>
                                    <td>1234rsdaf4</td>
                                    <td>01833232423</td>
                                    <td>Abdullah</td>
                                    <td>32</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-more-horizontal">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Md Mokhter Ali</td>
                                    <td>Business</td>
                                    <td>1234rsdaf4</td>
                                    <td>01833232423</td>
                                    <td>Abdullah</td>
                                    <td>32</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-more-horizontal">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Md Mokhter Ali</td>
                                    <td>Business</td>
                                    <td>1234rsdaf4</td>
                                    <td>01833232423</td>
                                    <td>Abdullah</td>
                                    <td>32</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-more-horizontal">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Md Mokhter Ali</td>
                                    <td>Business</td>
                                    <td>1234rsdaf4</td>
                                    <td>01833232423</td>
                                    <td>Abdullah</td>
                                    <td>32</td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-more-horizontal">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
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
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Agent</h4>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-center">
                            <div class="card m-1"
                                 style=" width: 21rem; height: 11rem;
                                                  background: #EEF2FF; border-radius: 10px;">
                                <div class="d-flex flex-column">
                                                       <span class="p-1">
                                                           <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-book"><path
                                                                   d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path
                                                                   d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                                       </span>
                                    <h5 class="card-title p-1">Simple</h5>
                                    <h6 class="card-subtitle p-1 text-muted">Add Simple Contact</h6>
                                </div>
                            </div>
                            <div class="card m-1"
                                 style="width: 21rem; height: 11rem; background: #EEF2FF; border-radius: 10px;">
                                <div class="d-flex flex-column">
                                                       <span class="p-1">
                                                           <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-upload-cloud"><polyline
                                                                   points="16 16 12 12 8 16"></polyline><line x1="12"
                                                                                                              y1="12"
                                                                                                              x2="12"
                                                                                                              y2="21"></line><path
                                                                   d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path><polyline
                                                                   points="16 16 12 12 8 16"></polyline></svg>
                                                       </span>
                                    <h5 class="card-title p-1">Import File</h5>
                                    <h6 class="card-subtitle p-1 text-muted">Import file with
                                        contacts
                                        (csv,xlsx)</h6>
                                </div>
                            </div>
                        </div>
                        <div class="input-section">
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <fieldset class="form-group">
                                        <label for="row_per_page">Name</label>
                                        <input type="text" class="form-control">
                                    </fieldset>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <fieldset class="form-group">
                                        <label for="row_per_page">Department</label>
                                        <input type="text" class="form-control">
                                    </fieldset>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <fieldset class="form-group">
                                        <label for="row_per_page">Email</label>
                                        <input type="text" class="form-control">
                                    </fieldset>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <fieldset class="form-group">
                                        <label for="row_per_page">ID</label>
                                        <input type="text" class="form-control">
                                    </fieldset>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <fieldset class="form-group">
                                        <label for="row_per_page">Phone Number</label>
                                        <input type="text" class="form-control">
                                    </fieldset>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <fieldset class="form-group">
                                        <label for="row_per_page">Brand</label>
                                        <input type="text" class="form-control">
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="file-input-section">
                            <form action="#" class="dropzone dropzone-area"
                                  id="my-awesome-dropzone">
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
                    </div>
                </div>
                <div class="modal-footer d-flex align-items-center" style="justify-content: center">
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-script')
    <script src="{{ asset('vendors/js/extensions/dropzone.min.js') }}"></script>
{{--    <script src="{{ asset('vendors/js/tables/datatable/datatables.min.js') }}"></script>--}}
{{--    <script>--}}
{{--        $('#myTable').DataTable();--}}
    </script>
@endsection
