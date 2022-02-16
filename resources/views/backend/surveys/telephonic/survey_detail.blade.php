@extends('layouts.appMaster')

@section('title', 'Telephonic Survey')

@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/base/pages/page-assignee-survey-list.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/datatables.min.css') }}">
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
                        <div class="d-flex">
                            <h4 class="card-title">New Product Development & Launch Survey 2022</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-datatable">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>MSISDN</th>
                                        <th>Duration</th>
                                        <th>Status</th>
                                        <th>Start</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>MD Raminur Rahman</td>
                                        <td>01833184334</td>
                                        <td>5:30 Min</td>
                                        <td>Not Completed</td>
                                        <td>
                                            <button type="button" class="btn mr-1 mb-1 waves-effect waves-light"
                                                    style="background: #EEF2FF;">Start Survey
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>MD Raminur Rahman</td>
                                        <td>01833184334</td>
                                        <td>0:00 Min</td>
                                        <td>
                                            <div class="item-status-completed">
                                                <p>
                                                    Completed
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn mr-1 mb-1 waves-effect waves-light"
                                                    style="background: #EEF2FF;">Start Survey
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>MD Abdul Khaleq</td>
                                        <td>01833184335</td>
                                        <td>--:-- Min</td>
                                        <td>
                                            <div class="item-status-not-completed">
                                                <p>
                                                    Completed
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn mr-1 mb-1 waves-effect waves-light"
                                                    style="background: #EEF2FF;">Start Survey
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>MD Sohrab Ali</td>
                                        <td>01833184339</td>
                                        <td>8:30 Min</td>
                                        <td>
                                            <div class="item-status-completed">
                                                <p>
                                                    Completed
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn mr-1 mb-1 waves-effect waves-light"
                                                    style="background: #EEF2FF;">Start Survey
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>MSISDN</th>
                                        <th>Duration</th>
                                        <th>Status</th>
                                        <th>Start</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{--                    <table class="table table-borderless">--}}
                    {{--                        <thead>--}}
                    {{--                        <tr>--}}
                    {{--                            <th scope="col">Survey Name</th>--}}
                    {{--                            <th scope="col">Total Question</th>--}}
                    {{--                            <th scope="col">Total Assigned Survey</th>--}}
                    {{--                            <th scope="col">Main Topic</th>--}}
                    {{--                            <th scope="col">Date</th>--}}
                    {{--                            <th scope="col">Status</th>--}}
                    {{--                            <th scope="col">Action</th>--}}
                    {{--                        </tr>--}}
                    {{--                        </thead>--}}
                    {{--                        <tbody>--}}
                    {{--                        <tr>--}}
                    {{--                            <td>New Product Development & Launch Survey 2022</td>--}}
                    {{--                            <td>344</td>--}}
                    {{--                            <td>5</td>--}}
                    {{--                            <td>Business</td>--}}
                    {{--                            <td>15 Jan, 2022</td>--}}
                    {{--                            <td>--}}
                    {{--                                                    <div  class="item-status-completed" >--}}
                    {{--                                                        <p>--}}
                    {{--                                                            Completed--}}
                    {{--                                                        </p>--}}
                    {{--                                                    </div>--}}
                    {{--                            </td>--}}
                    {{--                            <td>--}}
                    {{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"--}}
                    {{--                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"--}}
                    {{--                                     stroke-linejoin="round" class="feather feather-eye">--}}
                    {{--                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>--}}
                    {{--                                    <circle cx="12" cy="12" r="3"></circle>--}}
                    {{--                                </svg>--}}
                    {{--                            </td>--}}
                    {{--                        </tr>--}}
                    {{--                        <tr>--}}
                    {{--                            <td>New Product Development & Launch Survey 2022</td>--}}
                    {{--                            <td>344</td>--}}
                    {{--                            <td>5</td>--}}
                    {{--                            <td>Business</td>--}}
                    {{--                            <td>15 Jan, 2022</td>--}}
                    {{--                            <td>--}}
                    {{--                                <div  class="item-status-not-completed" >--}}
                    {{--                                    <p>--}}
                    {{--                                        Not Completed--}}
                    {{--                                    </p>--}}
                    {{--                                </div>--}}
                    {{--                            </td>--}}
                    {{--                            <td>--}}
                    {{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"--}}
                    {{--                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"--}}
                    {{--                                     stroke-linejoin="round" class="feather feather-eye">--}}
                    {{--                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>--}}
                    {{--                                    <circle cx="12" cy="12" r="3"></circle>--}}
                    {{--                                </svg>--}}
                    {{--                            </td>--}}
                    {{--                        </tr>--}}
                    {{--                        </tbody>--}}
                    {{--                    </table>--}}
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page-script')
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
@endsection
