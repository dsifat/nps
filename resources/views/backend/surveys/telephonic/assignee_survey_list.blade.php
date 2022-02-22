@extends('layouts.appMaster')

@section('title', 'Telephonic Survey')

@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/base/pages/page-assignee-survey-list.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/datatables.min.css') }}">
@endsection

@section('content')
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="d-flex card-header-text">
                            <div class="card-header-icon-reload">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-refresh-cw">
                                    <polyline points="23 4 23 10 17 10"></polyline>
                                    <polyline points="1 20 1 14 7 14"></polyline>
                                    <path
                                        d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                                </svg>
                            </div>
                            <h4 class="card-title">Md Sarkar Ali</h4>
                            <span class="card-title-count-text">(Total 25 assignment)</span>
                        </div>
                        <ul class="list-inline m-0 d-none d-sm-none d-md-none d-lg-block">
                            <li><a class="btn btn-primary" href="{{ url('/survey/telephonic/assign') }}">Assign to</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="row d-lg-none d-xl-none mr-0 ml-0">
                            <a class="col-md-12 btn btn-block btn-primary my-1"
                               href="{{ url('/survey/telephonic/assign') }}">Assign To</a>
                        </div>
                        <div class="card-datatable">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Survey Name</th>
                                        <th>Total Questions</th>
                                        <th>Date</th>
                                        <th>Main Topic</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>New Product Development & Launch Survey 2022</td>
                                        <td>30</td>
                                        <td>05 jan, 2022</td>
                                        <td>Business</td>
                                        <td>
                                            <button class="button not-completed-button">Not Completed</button>
                                        </td>
                                        <td>
                                            <a href="{{ URL('/survey/telephonic/details') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24"
                                                     fill="none" stroke="currentColor" stroke-width="2"
                                                     stroke-linecap="round"
                                                     stroke-linejoin="round" class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Marketing Survey 2021 Mid Level</td>
                                        <td>30</td>
                                        <td>05 jan, 2022</td>
                                        <td>Business</td>
                                        <td>
                                            <button class="button completed-button">Completed</button>
                                        </td>
                                        <td>
                                            <a href="{{ URL('/survey/telephonic/details') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24"
                                                     fill="none" stroke="currentColor" stroke-width="2"
                                                     stroke-linecap="round"
                                                     stroke-linejoin="round" class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>New Product Development & Launch Survey 2022</td>
                                        <td>30</td>
                                        <td>05 jan, 2022</td>
                                        <td>Business</td>
                                        <td>
                                            <button class="button not-completed-button">Not Completed</button>
                                        </td>
                                        <td>
                                            <a href="{{ URL('/survey/telephonic/details') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24"
                                                     fill="none" stroke="currentColor" stroke-width="2"
                                                     stroke-linecap="round"
                                                     stroke-linejoin="round" class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Marketing Survey 2021 Mid Level</td>
                                        <td>30</td>
                                        <td>05 jan, 2022</td>
                                        <td>Business</td>
                                        <td>
                                            <button class="button completed-button">Completed</button>
                                        </td>
                                        <td>
                                            <a href="{{ URL('/survey/telephonic/details') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24"
                                                     fill="none" stroke="currentColor" stroke-width="2"
                                                     stroke-linecap="round"
                                                     stroke-linejoin="round" class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Marketing Survey 2021 Mid Level</td>
                                        <td>30</td>
                                        <td>05 jan, 2022</td>
                                        <td>Business</td>
                                        <td>
                                            <button class="button completed-button">Completed</button>
                                        </td>
                                        <td>
                                            <a href="{{ URL('/survey/telephonic/details') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24"
                                                     fill="none" stroke="currentColor" stroke-width="2"
                                                     stroke-linecap="round"
                                                     stroke-linejoin="round" class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Marketing Survey 2021 Mid Level</td>
                                        <td>30</td>
                                        <td>05 jan, 2022</td>
                                        <td>Business</td>
                                        <td>
                                            <button class="button not-completed-button">Not Completed</button>
                                        </td>
                                        <td>
                                            <a href="{{ URL('/survey/telephonic/details') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24"
                                                     fill="none" stroke="currentColor" stroke-width="2"
                                                     stroke-linecap="round"
                                                     stroke-linejoin="round" class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Marketing Survey 2021 Mid Level</td>
                                        <td>30</td>
                                        <td>05 jan, 2022</td>
                                        <td>Business</td>
                                        <td>
                                            <button class="button not-completed-button">Not Completed</button>
                                        </td>
                                        <td>
                                            <a href="{{ URL('/survey/telephonic/details') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24"
                                                     fill="none" stroke="currentColor" stroke-width="2"
                                                     stroke-linecap="round"
                                                     stroke-linejoin="round" class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Marketing Survey 2021 Mid Level</td>
                                        <td>30</td>
                                        <td>05 jan, 2022</td>
                                        <td>Business</td>
                                        <td>
                                            <button class="button completed-button">Completed</button>
                                        </td>
                                        <td>
                                            <a href="{{ URL('/survey/telephonic/details') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24"
                                                     fill="none" stroke="currentColor" stroke-width="2"
                                                     stroke-linecap="round"
                                                     stroke-linejoin="round" class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Marketing Survey 2021 Mid Level</td>
                                        <td>30</td>
                                        <td>05 jan, 2022</td>
                                        <td>Business</td>
                                        <td>
                                            <button class="button not-completed-button">Not Completed</button>
                                        </td>
                                        <td>
                                            <a href="{{ URL('/survey/telephonic/details') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24"
                                                     fill="none" stroke="currentColor" stroke-width="2"
                                                     stroke-linecap="round"
                                                     stroke-linejoin="round" class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Marketing Survey 2021 Mid Level</td>
                                        <td>30</td>
                                        <td>05 jan, 2022</td>
                                        <td>Business</td>
                                        <td>
                                            <button class="button not-completed-button">Not Completed</button>
                                        </td>
                                        <td>
                                            <a href="{{ URL('/survey/telephonic/details') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24"
                                                     fill="none" stroke="currentColor" stroke-width="2"
                                                     stroke-linecap="round"
                                                     stroke-linejoin="round" class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Marketing Survey 2021 Mid Level</td>
                                        <td>30</td>
                                        <td>05 jan, 2022</td>
                                        <td>Business</td>
                                        <td>
                                            <button class="button completed-button">Completed</button>
                                        </td>
                                        <td>
                                            <a href="{{ URL('/survey/telephonic/details') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24"
                                                     fill="none" stroke="currentColor" stroke-width="2"
                                                     stroke-linecap="round"
                                                     stroke-linejoin="round" class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Marketing Survey 2021 Mid Level</td>
                                        <td>30</td>
                                        <td>05 jan, 2022</td>
                                        <td>Business</td>
                                        <td>
                                            <button class="button not-completed-button">Not Completed</button>
                                        </td>
                                        <td>
                                            <a href="{{ URL('/survey/telephonic/details') }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24"
                                                     fill="none" stroke="currentColor" stroke-width="2"
                                                     stroke-linecap="round"
                                                     stroke-linejoin="round" class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </a>
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
