@extends('layouts.appMaster')

@section('title', 'All Telephonic Survey')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/pages/page-customer-group.css') }}">
@endsection

@section('content')
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Customer Groups</h4>
                        <ul class="list-inline m-0 d-none d-sm-none d-md-none d-lg-block">
                            <li>
                                <a class="btn btn-outline-dark mx-1" href="{{ url('/survey/telephonic/agents') }}">Export</a>
                            </li>
                            <li>
                                <a class="btn btn-primary"
                                   onClick="add()" href="javascript:void(0)">Create
                                    Group</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="row d-lg-none d-xl-none mr-0 ml-0">
                            <a class="col-md-12 btn btn-block btn-outline-dark my-1"
                               href="{{ url('/survey/telephonic/agents') }}">Export</a>
                            <a class="col-md-12 btn btn-block btn-primary mb-1"
                               onClick="add()" href="javascript:void(0)">Create Group</a>
                        </div>
                        <div class="row p-1 bg-light mx-0 my-1">
                            <div class="col-lg-4">
                                <fieldset class="form-group">
                                    <select class="form-control" id="survey">
                                        <option>Binge</option>
                                        <option>NPS</option>
                                        <option>HRIS</option>
                                        <option>NEW</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                        <div class="card-datatable">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Group Name</th>
                                        <th>Quantity</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="{{ url('/survey/telephonic/details') }}">
                                                Binge
                                            </a>
                                        </td>
                                        <td>
                                            <a href="">
                                                200
                                            </a>
                                        </td>
                                        <td>15 Jan, 2022</td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24"
                                                 fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round"
                                                 stroke-linejoin="round" class="feather feather-edit">
                                                <path
                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path
                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
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
                                        <td>
                                            <a href="{{ url('/survey/telephonic/details') }}">
                                                NPS
                                            </a>
                                        </td>
                                        <td>
                                            <a href="">
                                                200
                                            </a>
                                        </td>
                                        <td>15 Jan, 2022</td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24"
                                                 fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round"
                                                 stroke-linejoin="round" class="feather feather-edit">
                                                <path
                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path
                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
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
                                        <td>
                                            <a href="{{ url('/survey/telephonic/details') }}">
                                                HRIS
                                            </a>
                                        </td>
                                        <td>
                                            <a href="">
                                                200
                                            </a>
                                        </td>
                                        <td>15 Jan, 2022</td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24"
                                                 fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round"
                                                 stroke-linejoin="round" class="feather feather-edit">
                                                <path
                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path
                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
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
                                        <td>
                                            <a href="{{ url('/survey/telephonic/details') }}">
                                                Binge
                                            </a>
                                        </td>
                                        <td>
                                            <a href="">
                                                200
                                            </a>
                                        </td>
                                        <td>15 Jan, 2022</td>
                                        <td>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24"
                                                 fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round"
                                                 stroke-linejoin="round" class="feather feather-edit">
                                                <path
                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path
                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
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
        </div>
        <div class="modal fade modal-agent" id="company-modal" aria-hidden="true" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Create New Group</h4>
                        <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex flex-column">
                            <div class="input-section" id="simple-contact-section">
                            </div>
                            <div class="file-input-section" id="file-input-section">
                                <div class="col-md-5 col-sm-6 d-flex flex-column file-download-section">
                                    <a class="btn  download-button"
                                       href="{{ url('/download/sample_agent.xlsx') }}">
                                        Download Sample File
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-download">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="7 10 12 15 17 10"></polyline>
                                            <line x1="12" y1="15" x2="12" y2="3"></line>
                                        </svg>
                                    </a>
                                    <span class="mt-2 sample-file-text">
                                        Before uploading file please maintain the right format. Here you can find a sample file for your guideline.
                                    </span>
                                </div>
                                <div class="col-md-5 col-sm-6 file-upload-section">
                                    <div class="alert alert-danger" id="file-error" style="display:none"></div>
                                    <form action="javascript:void(0)" id="customer-form"
                                          name="customer-form" class="form-horizontal"
                                          method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <fieldset class="form-group group-name-input">
                                                    <label for="group_name">Group Name</label>
                                                    <input type="text" class="form-control" id="group_name"
                                                           name="group_name"
                                                           placeholder="Enter Group Name">
                                                </fieldset>
                                                <span class="text-danger">{{ $errors->first('group_name') }}</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="file-input-item form-group">
                                                    <input type="file" name="agent_list" placeholder="Choose File"
                                                           id="agent_list">
                                                    <span class="text-danger">{{ $errors->first('agent_list') }}</span>
                                                </div>
                                            </div>
                                            {{--                                        <div class="d-flex justify-content-center my-1 col-md-12">--}}
                                            {{--                                            <button type="submit" class="btn btn-primary submit-button">Submit</button>--}}
                                            {{--                                        </div>--}}
                                        </div>
                                        <div class="modal-footer d-flex align-items-center"
                                             style="justify-content: center">
                                            <button type="submit" class="btn btn-primary button" id="btn-save">Save
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('page-script')
    {{--     vendor files --}}
    <script src="{{ asset('vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>

    {{-- Page js files --}}
    <script src="{{ asset('js/scripts/tables/datatable.js') }}"></script>
    <script>
        function add() {
            $('#customer-form').trigger("reset");
            // $('#CompanyModal').html("Add Company");
            $('#company-modal').modal('show');
            $('#id').val('');
        }
    </script>
@endsection
