@extends('layouts.appMaster')

@section('title', 'Telephonic Survey')

@section('page-style')
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/base/pages/page-telephonic.css') }}">--}}
@endsection

@section('content')
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="d-flex ">
                            <h4 class="card-title">All Survey Details</h4>
                        </div>
                        <ul class="list-inline m-0">
                            <li><a class="btn btn-outline-dark"><i data-feather="search"></i></a></li>
                            <li><a class="btn btn-outline-dark">Agent List</a></li>
                            <li><a class="btn btn-primary" data-toggle="modal" data-target="#yourModal">Assign to</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex ">
                        <div class="col-md-4 p-2">
                            <fieldset class="form-group">
                                {{--                              <label for="survey">Select Survey</label>--}}
                                <select class="form-control" id="survey">
                                    <option>All Surveys</option>
                                    <option>Survey Name</option>
                                    <option>Assignee Name</option>
                                    <option>Unassigned</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class=" d-flex justify-content-end col-md-8">
                            <div class="col-md-3">
                                <fieldset class="form-group">
                                    <label for="row_per_page">Row per page</label>
                                    <select class="form-control" id="row_per_page">
                                        <option>10</option>
                                        <option>20</option>
                                        <option>50</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-3">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center mt-2">
                                        <li class="page-item prev-item"><a class="page-link" href="#"></a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page"><a class="page-link"
                                                                                            href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item next-item"><a class="page-link" href="#"></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th scope="col">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1"
                                           checked>
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </th>
                            <th scope="col">Survey Name</th>
                            <th scope="col">Assignee Name</th>
                            <th scope="col">Total Assigned Survey</th>
                            <th scope="col">Total MSISDN</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1"
                                           checked>
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
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
                            <td>5</td>
                            <td>349</td>
                            <td>15 Jan, 2022</td>
                            <td>Not Completed</td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-edit">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-more-horizontal">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1"
                                           checked>
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>New Product Development & Launch Survey 2022</td>
                            <td>Md Abir Alam</td>
                            <td>5</td>
                            <td>349</td>
                            <td>15 Jan, 2022</td>
                            <td>Not Completed</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1"
                                           checked>
                                    <label class="custom-control-label" for="customCheck1"></label>
                                </div>
                            </td>
                            <td>New Product Development & Launch Survey 2022</td>
                            <td>Md Abir Alam</td>
                            <td>5</td>
                            <td>349</td>
                            <td>15 Jan, 2022</td>
                            <td>Not Completed</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
