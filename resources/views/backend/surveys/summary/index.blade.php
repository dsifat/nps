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
                            <h4 class="card-title">Summary</h4>
                            <span class="ml-1">(Total 25 surveys created)</span>
                        </div>

                        <div class="heading-elements">
                            <ul class="list-inline m-0">
                                <li><a class="btn btn-primary"> Export </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column align-items-center justify-content-center"
                         style="min-height: 70vh;">
                        <table class="table table-borderless">
                            <thead>
                            <tr>
                                <th scope="col">Assignee Name</th>
                                <th scope="col">Assigned Survey List</th>
                                <th scope="col">Deadline</th>
                                <th scope="col">Special Instructions</th>
                                <th scope="col">MSISDN</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Md Mokhter Hossain</td>
                                <td>
                                    <div class="d-flex flex-row justify-content-around">
                                        <span class="pr-1">1.</span>
                                        <div class="d-flex flex-column pb-2">
                                            <h6>New product development survey</h6>
                                            <small class="text-muted">With faded secondary text</small>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-around">
                                        <span class="pr-1">2.</span>
                                        <div class="d-flex flex-column pb-2">
                                            <h6>New product development survey</h6>
                                            <small class="text-muted">With faded secondary text</small>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-around">
                                        <span class="pr-1">3.</span>
                                        <div class="d-flex flex-column pb-2">
                                            <h6>New product development survey</h6>
                                            <small class="text-muted">With faded secondary text</small>
                                        </div>
                                    </div>
                                </td>
                                <td>15 Jan, 2022</td>
                                <td>Lorem ipsum asdf asdf asdf asdf adsf asdf</td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="p-2">
                            <button type="button" class="btn btn-outline-danger">
                                Back
                            </button>
                        </div>
                        <div class="p-2">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModalCenter">
                                Submit
                            </button>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="84" height="84"
                                                 viewBox="0 0 24 24" fill="none" stroke="#00AC4D" stroke-width="1"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-check-circle"
                                                 style="height: 5rem; width: 5rem;">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <div>
                                            <p>You have successfully assigned 3 surveys</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

