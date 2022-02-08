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
                            <h4 class="card-title">Assigned Survey</h4>
                        </div>

                        <div class="heading-elements">
                            <ul class="list-inline m-0">
                                <li><a class="btn btn-primary"> Assign To </a></li>
                            </ul>
                        </div>
                    </div>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Survey Name</a>
                            <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Assignee Name</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th scope="col">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </th>
                                    <th scope="col">Survey Name</th>
                                    <th scope="col">Assignee Name</th>
                                    <th scope="col">Total MSISDN</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td>New Product Development & Launch Survey 2022</td>
                                    <td>Md Abir Alam</td>
                                    <td>349</td>
                                    <td>15 Jan, 2022</td>
                                    <td>Not Completed</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td>New Product Development & Launch Survey 2022</td>
                                    <td>Md Abir Alam</td>
                                    <td>349</td>
                                    <td>15 Jan, 2022</td>
                                    <td>Not Completed</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </td>
                                    <td>New Product Development & Launch Survey 2022</td>
                                    <td>Md Abir Alam</td>
                                    <td>349</td>
                                    <td>15 Jan, 2022</td>
                                    <td>Not Completed</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                           <ul>
                               <li>
                                   <div class="card">
                                       <h6>New product survey</h6>
                                   </div>
                               </li>
                           </ul>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

