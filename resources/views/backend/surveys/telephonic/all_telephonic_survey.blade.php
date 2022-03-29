@extends('layouts.appMaster')

@section('title', 'All Telephonic Survey')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/pages/page-all-telephonic-survey.css') }}">
@endsection

@section('content')
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">All Survey Details</h4>
                        <ul class="list-inline m-0 d-none d-sm-none d-md-none d-lg-block">
                            <li>
                                <a class="btn btn-outline-dark mx-1" href="{{ url('/survey/telephonic/agents') }}">Agent
                                    List</a>
                            </li>
                            <li>
                                <a class="btn btn-primary" href="{{ url('/survey/telephonic/assign') }}">Assign To</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="row d-lg-none d-xl-none mr-0 ml-0">
                            <a class="col-md-12 btn btn-block btn-outline-dark my-1"
                               href="{{ url('/survey/telephonic/agents') }}">Agent List</a>
                            <a class="col-md-12 btn btn-block btn-primary mb-1"
                               href="{{ url('/survey/telephonic/assign') }}">Assign To</a>
                        </div>
                        <div class="row p-1 bg-light mx-0 my-1">
                            <div class="col-lg-4">
                                <fieldset class="form-group">
                                    <select class="form-control" id="survey">
                                        <option>All Surveys</option>
                                        <option>Survey Name</option>
                                        <option>Assignee Name</option>
                                        <option>Unassigned</option>
                                    </select>
                                </fieldset>
                            </div>
                        </div>
                        {{--                        <div class="d-flex ">--}}
                        {{--                            <div class="col-md-4 p-2">--}}
                        {{--                                <fieldset class="form-group">--}}
                        {{--                                    --}}{{--                              <label for="survey">Select Survey</label>--}}
                        {{--                                    <select class="form-control" id="survey">--}}
                        {{--                                        <option>All Surveys</option>--}}
                        {{--                                        <option>Survey Name</option>--}}
                        {{--                                        <option>Assignee Name</option>--}}
                        {{--                                        <option>Unassigned</option>--}}
                        {{--                                    </select>--}}
                        {{--                                </fieldset>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <div class="card-datatable">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Survey Name</th>
                                        <th>Assignee Name</th>
                                        <th>Date</th>
                                        <th>Main Topic</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="{{ url('/survey/telephonic/details') }}">
                                                New Product Development & Launch Survey 2022
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ url('/survey/telephonic/assignee/tasks') }}">
                                                Md Sarkar Ali
                                            </a>
                                        </td>
                                        <td>15 Jan, 2022</td>
                                        <td>Business</td>
                                        <td>
                                            <button class="button active-button">
                                                Active
                                            </button>
                                        </td>
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
                                                New Business Survey 2022
                                            </a>
                                        </td>
                                        <td>
                                            <p style="color:#ec1940;">Not Assigned</p>
                                        </td>
                                        <td>15 Jan, 2022</td>
                                        <td>Marketing</td>
                                        <td>
                                            <button class="button draft-button">Draft</button>
                                        </td>
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
                                                Marketing Survey 2022
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ url('/survey/telephonic/assignee/tasks') }}">
                                                Md Arif Ali
                                            </a>
                                        </td>
                                        <td>15 Jan, 2022</td>
                                        <td>Marketing</td>
                                        <td>
                                            <button class="button active-button">Active</button>
                                        </td>
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
                                                New Business Survey 2022
                                            </a>
                                        </td>
                                        <td>
                                            <p style="color:#ec1940;">Not Assigned</p>
                                        </td>
                                        <td>15 Jan, 2022</td>
                                        <td>Marketing</td>
                                        <td>
                                            <button class="button draft-button">Draft</button>
                                        </td>
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
                                                Marketing Survey 2022
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ url('/survey/telephonic/assignee/tasks') }}">
                                                Md Arif Ali
                                            </a>
                                        </td>
                                        <td>15 Jan, 2022</td>
                                        <td>Marketing</td>
                                        <td>
                                            <button class="button active-button">Active</button>
                                        </td>
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
                                                New Business Survey 2022
                                            </a>
                                        </td>
                                        <td>
                                            <p style="color:#ec1940;">Not Assigned</p>
                                        </td>
                                        <td>15 Jan, 2022</td>
                                        <td>Marketing</td>
                                        <td>
                                            <button class="button draft-button">Draft</button>
                                        </td>
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
                                                Marketing Survey 2022
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ url('/survey/telephonic/assignee/tasks') }}">
                                                Md Arif Ali
                                            </a>
                                        </td>
                                        <td>15 Jan, 2022</td>
                                        <td>Marketing</td>
                                        <td>
                                            <button class="button active-button">Active</button>
                                        </td>
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
                                                New Business Survey 2022
                                            </a>
                                        </td>
                                        <td>
                                            <p style="color:#ec1940;">Not Assigned</p>
                                        </td>
                                        <td>15 Jan, 2022</td>
                                        <td>Marketing</td>
                                        <td>
                                            <button class="button draft-button">Draft</button>
                                        </td>
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
                                                Marketing Survey 2022
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ url('/survey/telephonic/assignee/tasks') }}">
                                                Md Arif Ali
                                            </a>
                                        </td>
                                        <td>15 Jan, 2022</td>
                                        <td>Marketing</td>
                                        <td>
                                            <button class="button active-button">Active</button>
                                        </td>
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
                                                New Business Survey 2022
                                            </a>
                                        </td>
                                        <td>
                                            <p style="color:#ec1940;">Not Assigned</p>
                                        </td>
                                        <td>15 Jan, 2022</td>
                                        <td>Marketing</td>
                                        <td>
                                            <button class="button draft-button">Draft</button>
                                        </td>
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
                                                New Business Survey 2022
                                            </a>
                                        </td>
                                        <td>
                                            <p style="color:#ec1940;">Not Assigned</p>
                                        </td>
                                        <td>15 Jan, 2022</td>
                                        <td>Marketing</td>
                                        <td>
                                            <button class="button draft-button">Draft</button>
                                        </td>
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
                                                New Business Survey 2022
                                            </a>
                                        </td>
                                        <td>
                                            <p style="color:#ec1940;">Not Assigned</p>
                                        </td>
                                        <td>15 Jan, 2022</td>
                                        <td>Marketing</td>
                                        <td>
                                            <button class="button draft-button">Draft</button>
                                        </td>
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
                                                New Business Survey 2022
                                            </a>
                                        </td>
                                        <td>
                                            <p style="color:#ec1940;">Not Assigned</p>
                                        </td>
                                        <td>15 Jan, 2022</td>
                                        <td>Marketing</td>
                                        <td>
                                            <button class="button draft-button">Draft</button>
                                        </td>
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
                                                New Business Survey 2022
                                            </a>
                                        </td>
                                        <td>
                                            <p style="color:#ec1940;">Not Assigned</p>
                                        </td>
                                        <td>15 Jan, 2022</td>
                                        <td>Marketing</td>
                                        <td>
                                            <button class="button draft-button">Draft</button>
                                        </td>
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
                    {{--                    <table class="table table-borderless">--}}
                    {{--                    <thead>--}}
                    {{--                    <tr>--}}
                    {{--                        <th scope="col">--}}
                    {{--                            <div class="custom-control custom-checkbox">--}}
                    {{--                                <input type="checkbox" class="custom-control-input" id="customCheck1"--}}
                    {{--                                       checked>--}}
                    {{--                                <label class="custom-control-label" for="customCheck1"></label>--}}
                    {{--                            </div>--}}
                    {{--                        </th>--}}
                    {{--                        <th scope="col">Survey Name</th>--}}
                    {{--                        <th scope="col">Assignee Name</th>--}}
                    {{--                        <th scope="col">Total Assigned Survey</th>--}}
                    {{--                        <th scope="col">Total MSISDN</th>--}}
                    {{--                        <th scope="col">Date</th>--}}
                    {{--                        <th scope="col">Status</th>--}}
                    {{--                        <th scope="col">Action</th>--}}
                    {{--                    </tr>--}}
                    {{--                    </thead>--}}
                    {{--                        <tbody>--}}
                    {{--                        <tr>--}}
                    {{--                            <td>--}}
                    {{--                                <div class="custom-control custom-checkbox">--}}
                    {{--                                    <input type="checkbox" class="custom-control-input" id="customCheck1"--}}
                    {{--                                           checked>--}}
                    {{--                                    <label class="custom-control-label" for="customCheck1"></label>--}}
                    {{--                                </div>--}}
                    {{--                            </td>--}}
                    {{--                            <td>--}}
                    {{--                                <a href="{{ url('/survey/telephonic/details') }}">--}}
                    {{--                                    New Product Development & Launch Survey 2022--}}
                    {{--                                </a>--}}
                    {{--                            </td>--}}
                    {{--                            <td>--}}
                    {{--                                <a href="{{ url('/survey/telephonic/assignee/tasks') }}">--}}
                    {{--                                    Md Sarkar Ali--}}
                    {{--                                </a>--}}
                    {{--                            </td>--}}
                    {{--                            <td>5</td>--}}
                    {{--                            <td>349</td>--}}
                    {{--                            <td>15 Jan, 2022</td>--}}
                    {{--                            <td>Not Completed</td>--}}
                    {{--                            <td>--}}
                    {{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"--}}
                    {{--                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"--}}
                    {{--                                     stroke-linejoin="round" class="feather feather-edit">--}}
                    {{--                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>--}}
                    {{--                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>--}}
                    {{--                                </svg>--}}
                    {{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"--}}
                    {{--                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"--}}
                    {{--                                     stroke-linejoin="round" class="feather feather-more-horizontal">--}}
                    {{--                                    <circle cx="12" cy="12" r="1"></circle>--}}
                    {{--                                    <circle cx="19" cy="12" r="1"></circle>--}}
                    {{--                                    <circle cx="5" cy="12" r="1"></circle>--}}
                    {{--                                </svg>--}}
                    {{--                            </td>--}}
                    {{--                        </tr>--}}
                    {{--                        <tr>--}}
                    {{--                            <td>--}}
                    {{--                                <div class="custom-control custom-checkbox">--}}
                    {{--                                    <input type="checkbox" class="custom-control-input" id="customCheck1"--}}
                    {{--                                           checked>--}}
                    {{--                                    <label class="custom-control-label" for="customCheck1"></label>--}}
                    {{--                                </div>--}}
                    {{--                            </td>--}}
                    {{--                            <td>New Product Development & Launch Survey 2022</td>--}}
                    {{--                            <td>Md Abir Alam</td>--}}
                    {{--                            <td>5</td>--}}
                    {{--                            <td>349</td>--}}
                    {{--                            <td>15 Jan, 2022</td>--}}
                    {{--                            <td>Not Completed</td>--}}
                    {{--                        </tr>--}}
                    {{--                        <tr>--}}
                    {{--                            <td>--}}
                    {{--                                <div class="custom-control custom-checkbox">--}}
                    {{--                                    <input type="checkbox" class="custom-control-input" id="customCheck1"--}}
                    {{--                                           checked>--}}
                    {{--                                    <label class="custom-control-label" for="customCheck1"></label>--}}
                    {{--                                </div>--}}
                    {{--                            </td>--}}
                    {{--                            <td>New Product Development & Launch Survey 2022</td>--}}
                    {{--                            <td>Md Abir Alam</td>--}}
                    {{--                            <td>5</td>--}}
                    {{--                            <td>349</td>--}}
                    {{--                            <td>15 Jan, 2022</td>--}}
                    {{--                            <td>Not Completed</td>--}}
                    {{--                        </tr>--}}
                    {{--                        </tbody>--}}
                    {{--                    </table>--}}
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
@endsection
