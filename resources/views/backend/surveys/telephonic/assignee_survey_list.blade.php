@extends('layouts.appMaster')

@section('title', 'Telephonic Survey')

@section('page-style')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/base/pages/page-assignee-survey-list.css') }}">
@endsection

@section('content')
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="d-flex">
                            <div class="pr-2">
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
                            <span class="ml-1">(Total 25 assignment)</span>
{{--                            <div class="d-flex ">--}}
{{--                                <h4 class="card-title">Summary</h4>--}}
{{--                                <span class="ml-1">(Total 25 surveys created)</span>--}}
{{--                            </div>--}}
                        </div>
                        <ul class="list-inline m-0">
                            <li><a class="btn btn-outline-dark"><i data-feather="search"></i></a></li>
                            <li><a class="btn btn-primary" data-toggle="modal" data-target="#yourModal">Assign to</a>
                            </li>
                        </ul>
                    </div>

                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th scope="col">Survey Name</th>
                            <th scope="col">Total Question</th>
                            <th scope="col">Total Assigned Survey</th>
                            <th scope="col">Main Topic</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>New Product Development & Launch Survey 2022</td>
                            <td>344</td>
                            <td>5</td>
                            <td>Business</td>
                            <td>15 Jan, 2022</td>
                            <td>
                                <div  class="item-status-completed" >
                                    <p>
                                        Completed
                                    </p>
                                </div>
                            </td>
                            <td>
                                <a href="{{ URL('/survey/telephonic/details') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <td>New Product Development & Launch Survey 2022</td>
                            <td>344</td>
                            <td>5</td>
                            <td>Business</td>
                            <td>15 Jan, 2022</td>
                            <td>
                                <div  class="item-status-not-completed" >
                                    <p>
                                       Not Completed
                                    </p>
                                </div>
                            </td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-eye">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

