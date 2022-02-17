@extends('layouts.appMaster')

@section('title', 'Survey Summary')

@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/base/pages/page-survey-summary.css') }}">
@endsection

@section('content')
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="d-flex ">
                            <h4 class="card-title">Summary</h4>
                            <span class="card-title-count-text">(Total 25 surveys created)</span>
                        </div>
                        <ul class="list-inline m-0 d-none d-sm-none d-md-none d-lg-block">
                            <li><a href="#" class="btn btn-primary">Export</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="row d-lg-none d-xl-none mt-2 mr-0 ml-0">
                            <a class="col-md-12 btn btn-block btn-primary"
                               href="#">Export</a>
                        </div>
                        <table class="table table-responsive mt-2">
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
                        <div class="py-1">
                            <a href="{{ url('/survey/telephonic/assign') }}" class="btn btn-outline-danger button">Back
                            </a>
                        </div>
                        <div class="py-1">
                            <a class="btn btn-primary button" data-toggle="modal" data-target="#exampleModalCenter">Submit</a>
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
                                        <div class="my-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="84" height="84"
                                                 viewBox="0 0 24 24" fill="none" stroke="#00AC4D" stroke-width="1"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-check-circle"
                                                 style="height: 5rem; width: 5rem;">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                            </svg>
                                        </div>
                                        <div class="my-2">
                                            <p>You have successfully assigned 3 surveys</p>
                                        </div>
                                        <div class="d-inline my-2">
                                            <a href="{{ url('/survey/telephonic/assign') }}">
                                                <svg width="19" height="8" viewBox="0 0 19 8" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0.646446 3.64645C0.451185 3.84171 0.451185 4.15829 0.646446 4.35355L3.82843 7.53553C4.02369 7.7308 4.34027 7.7308 4.53553 7.53553C4.7308 7.34027 4.7308 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17157C4.7308 0.976311 4.7308 0.659728 4.53553 0.464466C4.34027 0.269204 4.02369 0.269204 3.82843 0.464466L0.646446 3.64645ZM19 3.5L1 3.5V4.5L19 4.5V3.5Z"
                                                        fill="#622691"/>
                                                </svg>
                                                <span style="color:#622691;">Assign another survey</span>
                                            </a>
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
