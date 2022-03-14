@extends('layouts.appMaster')

@section('title', 'Competitive Survey')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('css/base/pages/page-competitive-survey-list.css') }}">
@endsection

@section('vendor-style')
    {{-- vendor css files --}}
    <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/datatables.min.css') }}">
@endsection
@section('content')
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Competitive Survey List</h4>
                        <ul class="list-inline m-0 d-none d-sm-none d-md-none d-lg-block">
                            <li><a class="btn btn-outline-dark"><i data-feather="search"></i></a></li>
                            <li><a class="btn btn-outline-dark">Export</a></li>
                            <li><a class="btn btn-primary" data-toggle="modal" data-target="#uploadModal">Upload
                                    Survey</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="row d-lg-none d-xl-none">
                            <input type="text" class="my-1 col-md-12 form-control" placeholder="Search">
                            <a class="col-md-12 btn btn-block btn-outline-dark">Export</a>
                            <a class="col-md-12 btn btn-block btn-primary" data-toggle="modal" data-target="#yourModal">Upload
                                Survey</a>
                        </div>
                        <div class="card-datatable">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="ajax-crud-datatable">
                                    <thead>
                                    <tr>
                                        <th>Customer MSISDN</th>
                                        <th>Customer Email</th>
                                        <th>Survey Topic</th>
                                        <th>Survey Name</th>
                                        <th>Question</th>
                                        <th>User Response</th>
                                        <th>Survey Date</th>
                                        <th>NPS Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="flex-direction: column;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Upload Survey Files</h4>
                </div>
                <div class="modal-body">
                    <div class="file-input-section" id="file-input-section">
                        <div class="col-md-6 col-sm-6 d-flex flex-column file-download-section">
                            <a class="btn  download-button"
                               href="{{ url('/download/competitive_survey.xlsx') }}">
                                Download Sample File
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
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
                        <div class="col-md-6 col-sm-6 file-upload-section">
                            <div class="alert alert-danger" id="file-error" style="display:none"></div>
                            <form method="POST" enctype="multipart/form-data"
                                  id="file-upload-form"
                                  name="file-upload-form"
                                  action="javascript:void(0)">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="file-input-item form-group">
                                            <input type="file" name="survey_list" placeholder="Choose File"
                                                   id="survey_list">
                                            <span class="text-danger">{{ $errors->first('survey_list') }}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center my-1 col-md-12">
                                        <button type="submit" class="btn btn-primary submit-button">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{--                <div class="modal-footer d-flex align-items-center" style="justify-content: center">--}}
                {{--                    <button type="button" class="btn btn-primary">Done</button>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
@endsection

@section('page-script')
    <script src="{{ asset('vendors/js/extensions/dropzone.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/scripts/tables/datatable.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#ajax-crud-datatable').DataTable({
                processing: false,
                serverSide: true,
                ajax: "{{ url('survey/competitive') }}",
                type: 'GET',
                columns: [
                    {data: 'customer_msisdn', name: 'customer_msisdn'},
                    {data: 'customer_email', name: 'customer_email'},
                    {data: 'survey_topic', name: 'survey_topic'},
                    {data: 'survey_name', name: 'survey_name'},
                    {data: 'question', name: 'question'},
                    {data: 'user_response', name: 'user_response'},
                    {data: 'survey_date', name: 'survey_date'},
                    {data: 'nps_status', name: 'nps_status'},
                    {data: 'action', name: 'action', orderable: false},
                ],
                order: [[0, 'desc']]
            });

            $('#file-upload-form').submit(function (e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: "{{ url('survey/competitive/store')}}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (result) {
                        if (result.errors) {
                            jQuery('#file-error').html('');
                            jQuery.each(result.errors, function (key, value) {
                                jQuery('#file-error').show();
                                jQuery('#file-error').append('<li>' + value + '</li>');
                            });
                        } else {
                            jQuery('#file-error').hide();
                            $('#company-modal').modal('hide');

                            $("#btn-save").html('Submit');
                            $("#btn-save").attr("disabled", false);
                        }
                    }
                });
            });
        });
    </script>
@endsection
