@extends('layouts.appMaster')

@section('title', 'Telephonic Survey')

@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}">
@endsection

@section('content')
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <div class="d-flex ">
                            <h4 class="card-title">Agent List</h4>
                        </div>
                        <ul class="list-inline m-0">
                            {{--                            <li><a class="btn btn-outline-dark"><i data-feather="search"></i></a></li>--}}
                            <li>
                                <a class="btn btn-outline-dark">Assign Survey</a>
                            </li>
                            <li>
                                <a class="btn btn-primary" data-toggle="modal" data-target="#yourModal">Add Agent</a>
                            </li>
                        </ul>
                    </div>

                    <div class="modal fade" id="yourModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="flex-direction: column;">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Add Agent</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex justify-content-center">
                                            <div class="card m-1"
                                                 style=" width: 21rem; height: 11rem;
                                                  background: #EEF2FF; border-radius: 10px;">
                                                <div class="d-flex flex-column">
                                                       <span class="p-1">
                                                           <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-book"><path
                                                                   d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path
                                                                   d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                                       </span>
                                                    <h5 class="card-title p-1">Simple</h5>
                                                    <h6 class="card-subtitle p-1 text-muted">Add Simple Contact</h6>
                                                </div>
                                            </div>
                                            <div class="card m-1"
                                                 style="width: 21rem; height: 11rem; background: #EEF2FF; border-radius: 10px;">
                                                <div class="d-flex flex-column">
                                                       <span class="p-1">
                                                           <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-upload-cloud"><polyline
                                                                   points="16 16 12 12 8 16"></polyline><line x1="12"
                                                                                                              y1="12"
                                                                                                              x2="12"
                                                                                                              y2="21"></line><path
                                                                   d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path><polyline
                                                                   points="16 16 12 12 8 16"></polyline></svg>
                                                       </span>
                                                    <h5 class="card-title p-1">Import File</h5>
                                                    <h6 class="card-subtitle p-1 text-muted">Import file with contacts
                                                        (csv,xlsx)</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-section">
                                            <div class="row">
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <label for="row_per_page">Name</label>
                                                        <input type="text" class="form-control">
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <label for="row_per_page">Department</label>
                                                        <input type="text" class="form-control">
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <label for="row_per_page">Email</label>
                                                        <input type="text" class="form-control">
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <label for="row_per_page">ID</label>
                                                        <input type="text" class="form-control">
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <label for="row_per_page">Phone Number</label>
                                                        <input type="text" class="form-control">
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <label for="row_per_page">Brand</label>
                                                        <input type="text" class="form-control">
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="file-input-section">
                                            <form action="#" class="dropzone dropzone-area" id="my-awesome-dropzone">
                                                <div class="dz-message d-flex flex-column">
                                                    <p class="p-1">
                                                        Drop files here or click to upload.
                                                    </p>
                                                    <div class="d-flex justify-content-center">
                                                        <p class="p-1 col-4"
                                                           style="background-color: #04AA6D!important; border-radius: 5px;">
                                                            Upload Files</p>
                                                    </div>
                                                    <p class="p-1">File can't be more than 300kb size</p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex align-items-center" style="justify-content: center">
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <section id="basic-datatable">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    {{--                                    <div class="card-header">--}}
                                    {{--                                        <h4 class="card-title">Agent</h4>--}}
                                    {{--                                    </div>--}}
                                    <div class="card-content">
                                        <div class="card-body card-dashboard">
                                            <div class="d-flex ">
                                                <div class="col-md-4 p-2">
                                                    <fieldset class="form-group">
                                                        {{--                              <label for="survey">Select Survey</label>--}}
                                                        <select class="form-control" id="survey">
                                                            <option>All</option>
                                                            <option>Phone Number</option>
                                                            <option>Survey Status</option>
                                                            <option>Department</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table zero-configuration">
                                                    <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cedric Kelly</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2012/03/29</td>
                                                        <td>$433,060</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Herrod Chandler</td>
                                                        <td>Sales Assistant</td>
                                                        <td>San Francisco</td>
                                                        <td>59</td>
                                                        <td>2012/08/06</td>
                                                        <td>$137,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Rhona Davidson</td>
                                                        <td>Integration Specialist</td>
                                                        <td>Tokyo</td>
                                                        <td>55</td>
                                                        <td>2010/10/14</td>
                                                        <td>$327,900</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Colleen Hurst</td>
                                                        <td>Javascript Developer</td>
                                                        <td>San Francisco</td>
                                                        <td>39</td>
                                                        <td>2009/09/15</td>
                                                        <td>$205,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sonya Frost</td>
                                                        <td>Software Engineer</td>
                                                        <td>Edinburgh</td>
                                                        <td>23</td>
                                                        <td>2008/12/13</td>
                                                        <td>$103,600</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jena Gaines</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>30</td>
                                                        <td>2008/12/19</td>
                                                        <td>$90,560</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Quinn Flynn</td>
                                                        <td>Support Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>22</td>
                                                        <td>2013/03/03</td>
                                                        <td>$342,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Paul Byrd</td>
                                                        <td>Chief Financial Officer (CFO)</td>
                                                        <td>New York</td>
                                                        <td>64</td>
                                                        <td>2010/06/09</td>
                                                        <td>$725,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gloria Little</td>
                                                        <td>Systems Administrator</td>
                                                        <td>New York</td>
                                                        <td>59</td>
                                                        <td>2009/04/10</td>
                                                        <td>$237,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dai Rios</td>
                                                        <td>Personnel Lead</td>
                                                        <td>Edinburgh</td>
                                                        <td>35</td>
                                                        <td>2012/09/26</td>
                                                        <td>$217,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenette Caldwell</td>
                                                        <td>Development Lead</td>
                                                        <td>New York</td>
                                                        <td>30</td>
                                                        <td>2011/09/03</td>
                                                        <td>$345,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Yuri Berry</td>
                                                        <td>Chief Marketing Officer (CMO)</td>
                                                        <td>New York</td>
                                                        <td>40</td>
                                                        <td>2009/06/25</td>
                                                        <td>$675,000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cara Stevens</td>
                                                        <td>Sales Assistant</td>
                                                        <td>New York</td>
                                                        <td>46</td>
                                                        <td>2011/12/06</td>
                                                        <td>$145,600</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hermione Butler</td>
                                                        <td>Regional Director</td>
                                                        <td>London</td>
                                                        <td>47</td>
                                                        <td>2011/03/21</td>
                                                        <td>$356,250</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lael Greer</td>
                                                        <td>Systems Administrator</td>
                                                        <td>London</td>
                                                        <td>21</td>
                                                        <td>2009/02/27</td>
                                                        <td>$103,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Donna Snider</td>
                                                        <td>Customer Support</td>
                                                        <td>New York</td>
                                                        <td>27</td>
                                                        <td>2011/01/25</td>
                                                        <td>$112,000</td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                     id="DataTables_Table_0_paginate">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('page-script')
    <script src="{{ asset('vendors/js/extensions/dropzone.min.js') }}"></script>
    <script>
        // $('#my-awesome-dropzone').dropzone({
        //
        // });
    </script>
@endsection
