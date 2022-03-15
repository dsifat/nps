@extends('layouts.appMaster')

@section('title', 'Competitive Survey')

@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}">
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
                            <li><a class="btn btn-primary" data-toggle="modal" data-target="#yourModal">Upload Survey</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="row d-lg-none d-xl-none">
                            <input type="text" class="my-1 col-md-12 form-control" placeholder="Search">
                            <a class="col-md-12 btn btn-block btn-outline-dark">Export</a>
                            <a class="col-md-12 btn btn-block btn-primary" data-toggle="modal" data-target="#yourModal">Upload Survey</a>
                        </div>
                        <div class="card-datatable">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Survey Name</th>
                                        <th>Date</th>
                                        <th>Download</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Customer intention – purchase analysis surveys 2020</td>
                                        <td>17 Sep,2021</td>
                                        <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Customer intention – purchase analysis surveys 2020</td>
                                        <td>17 Sep,2021</td>
                                        <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Customer intention – purchase analysis surveys 2020</td>
                                        <td>17 Sep,2021</td>
                                        <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Customer intention – purchase analysis surveys 2020</td>
                                        <td>17 Sep,2021</td>
                                        <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Customer intention – purchase analysis surveys 2020</td>
                                        <td>17 Sep,2021</td>
                                        <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Customer intention – purchase analysis surveys 2020</td>
                                        <td>17 Sep,2021</td>
                                        <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Customer intention – purchase analysis surveys 2020</td>
                                        <td>17 Sep,2021</td>
                                        <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Customer intention – purchase analysis surveys 2020</td>
                                        <td>17 Sep,2021</td>
                                        <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Customer intention – purchase analysis surveys 2020</td>
                                        <td>17 Sep,2021</td>
                                        <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Customer intention – purchase analysis surveys 2020</td>
                                        <td>17 Sep,2021</td>
                                        <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Customer intention – purchase analysis surveys 2020</td>
                                        <td>17 Sep,2021</td>
                                        <td><a class="mx-lg-75"><i data-feather="download"></i></a></td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Survey Name</th>
                                        <th>Date</th>
                                        <th>Download</th>
                                    </tr>
                                    </tfoot>
                                </table>
{{--                                <table class="table zero-configuration">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th>Name</th>--}}
{{--                                        <th>Position</th>--}}
{{--                                        <th>Office</th>--}}
{{--                                        <th>Age</th>--}}
{{--                                        <th>Start date</th>--}}
{{--                                        <th>Salary</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td>Tiger Nixon</td>--}}
{{--                                        <td>System Architect</td>--}}
{{--                                        <td>Edinburgh</td>--}}
{{--                                        <td>61</td>--}}
{{--                                        <td>2011/04/25</td>--}}
{{--                                        <td>$320,800</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Garrett Winters</td>--}}
{{--                                        <td>Accountant</td>--}}
{{--                                        <td>Tokyo</td>--}}
{{--                                        <td>63</td>--}}
{{--                                        <td>2011/07/25</td>--}}
{{--                                        <td>$170,750</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Ashton Cox</td>--}}
{{--                                        <td>Junior Technical Author</td>--}}
{{--                                        <td>San Francisco</td>--}}
{{--                                        <td>66</td>--}}
{{--                                        <td>2009/01/12</td>--}}
{{--                                        <td>$86,000</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Cedric Kelly</td>--}}
{{--                                        <td>Senior Javascript Developer</td>--}}
{{--                                        <td>Edinburgh</td>--}}
{{--                                        <td>22</td>--}}
{{--                                        <td>2012/03/29</td>--}}
{{--                                        <td>$433,060</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Airi Satou</td>--}}
{{--                                        <td>Accountant</td>--}}
{{--                                        <td>Tokyo</td>--}}
{{--                                        <td>33</td>--}}
{{--                                        <td>2008/11/28</td>--}}
{{--                                        <td>$162,700</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Brielle Williamson</td>--}}
{{--                                        <td>Integration Specialist</td>--}}
{{--                                        <td>New York</td>--}}
{{--                                        <td>61</td>--}}
{{--                                        <td>2012/12/02</td>--}}
{{--                                        <td>$372,000</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Herrod Chandler</td>--}}
{{--                                        <td>Sales Assistant</td>--}}
{{--                                        <td>San Francisco</td>--}}
{{--                                        <td>59</td>--}}
{{--                                        <td>2012/08/06</td>--}}
{{--                                        <td>$137,500</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Rhona Davidson</td>--}}
{{--                                        <td>Integration Specialist</td>--}}
{{--                                        <td>Tokyo</td>--}}
{{--                                        <td>55</td>--}}
{{--                                        <td>2010/10/14</td>--}}
{{--                                        <td>$327,900</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Colleen Hurst</td>--}}
{{--                                        <td>Javascript Developer</td>--}}
{{--                                        <td>San Francisco</td>--}}
{{--                                        <td>39</td>--}}
{{--                                        <td>2009/09/15</td>--}}
{{--                                        <td>$205,500</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Sonya Frost</td>--}}
{{--                                        <td>Software Engineer</td>--}}
{{--                                        <td>Edinburgh</td>--}}
{{--                                        <td>23</td>--}}
{{--                                        <td>2008/12/13</td>--}}
{{--                                        <td>$103,600</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Jena Gaines</td>--}}
{{--                                        <td>Office Manager</td>--}}
{{--                                        <td>London</td>--}}
{{--                                        <td>30</td>--}}
{{--                                        <td>2008/12/19</td>--}}
{{--                                        <td>$90,560</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Quinn Flynn</td>--}}
{{--                                        <td>Support Lead</td>--}}
{{--                                        <td>Edinburgh</td>--}}
{{--                                        <td>22</td>--}}
{{--                                        <td>2013/03/03</td>--}}
{{--                                        <td>$342,000</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Charde Marshall</td>--}}
{{--                                        <td>Regional Director</td>--}}
{{--                                        <td>San Francisco</td>--}}
{{--                                        <td>36</td>--}}
{{--                                        <td>2008/10/16</td>--}}
{{--                                        <td>$470,600</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Haley Kennedy</td>--}}
{{--                                        <td>Senior Marketing Designer</td>--}}
{{--                                        <td>London</td>--}}
{{--                                        <td>43</td>--}}
{{--                                        <td>2012/12/18</td>--}}
{{--                                        <td>$313,500</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Tatyana Fitzpatrick</td>--}}
{{--                                        <td>Regional Director</td>--}}
{{--                                        <td>London</td>--}}
{{--                                        <td>19</td>--}}
{{--                                        <td>2010/03/17</td>--}}
{{--                                        <td>$385,750</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Michael Silva</td>--}}
{{--                                        <td>Marketing Designer</td>--}}
{{--                                        <td>London</td>--}}
{{--                                        <td>66</td>--}}
{{--                                        <td>2012/11/27</td>--}}
{{--                                        <td>$198,500</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Paul Byrd</td>--}}
{{--                                        <td>Chief Financial Officer (CFO)</td>--}}
{{--                                        <td>New York</td>--}}
{{--                                        <td>64</td>--}}
{{--                                        <td>2010/06/09</td>--}}
{{--                                        <td>$725,000</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Gloria Little</td>--}}
{{--                                        <td>Systems Administrator</td>--}}
{{--                                        <td>New York</td>--}}
{{--                                        <td>59</td>--}}
{{--                                        <td>2009/04/10</td>--}}
{{--                                        <td>$237,500</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Bradley Greer</td>--}}
{{--                                        <td>Software Engineer</td>--}}
{{--                                        <td>London</td>--}}
{{--                                        <td>41</td>--}}
{{--                                        <td>2012/10/13</td>--}}
{{--                                        <td>$132,000</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Dai Rios</td>--}}
{{--                                        <td>Personnel Lead</td>--}}
{{--                                        <td>Edinburgh</td>--}}
{{--                                        <td>35</td>--}}
{{--                                        <td>2012/09/26</td>--}}
{{--                                        <td>$217,500</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Jenette Caldwell</td>--}}
{{--                                        <td>Development Lead</td>--}}
{{--                                        <td>New York</td>--}}
{{--                                        <td>30</td>--}}
{{--                                        <td>2011/09/03</td>--}}
{{--                                        <td>$345,000</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Yuri Berry</td>--}}
{{--                                        <td>Chief Marketing Officer (CMO)</td>--}}
{{--                                        <td>New York</td>--}}
{{--                                        <td>40</td>--}}
{{--                                        <td>2009/06/25</td>--}}
{{--                                        <td>$675,000</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Cara Stevens</td>--}}
{{--                                        <td>Sales Assistant</td>--}}
{{--                                        <td>New York</td>--}}
{{--                                        <td>46</td>--}}
{{--                                        <td>2011/12/06</td>--}}
{{--                                        <td>$145,600</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Hermione Butler</td>--}}
{{--                                        <td>Regional Director</td>--}}
{{--                                        <td>London</td>--}}
{{--                                        <td>47</td>--}}
{{--                                        <td>2011/03/21</td>--}}
{{--                                        <td>$356,250</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Lael Greer</td>--}}
{{--                                        <td>Systems Administrator</td>--}}
{{--                                        <td>London</td>--}}
{{--                                        <td>21</td>--}}
{{--                                        <td>2009/02/27</td>--}}
{{--                                        <td>$103,500</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Jonas Alexander</td>--}}
{{--                                        <td>Developer</td>--}}
{{--                                        <td>San Francisco</td>--}}
{{--                                        <td>30</td>--}}
{{--                                        <td>2010/07/14</td>--}}
{{--                                        <td>$86,500</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Shad Decker</td>--}}
{{--                                        <td>Regional Director</td>--}}
{{--                                        <td>Edinburgh</td>--}}
{{--                                        <td>51</td>--}}
{{--                                        <td>2008/11/13</td>--}}
{{--                                        <td>$183,000</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Michael Bruce</td>--}}
{{--                                        <td>Javascript Developer</td>--}}
{{--                                        <td>Singapore</td>--}}
{{--                                        <td>29</td>--}}
{{--                                        <td>2011/06/27</td>--}}
{{--                                        <td>$183,000</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>Donna Snider</td>--}}
{{--                                        <td>Customer Support</td>--}}
{{--                                        <td>New York</td>--}}
{{--                                        <td>27</td>--}}
{{--                                        <td>2011/01/25</td>--}}
{{--                                        <td>$112,000</td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                    <tfoot>--}}
{{--                                    <tr>--}}
{{--                                        <th>Name</th>--}}
{{--                                        <th>Position</th>--}}
{{--                                        <th>Office</th>--}}
{{--                                        <th>Age</th>--}}
{{--                                        <th>Start date</th>--}}
{{--                                        <th>Salary</th>--}}
{{--                                    </tr>--}}
{{--                                    </tfoot>--}}
{{--                                </table>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="yourModal" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="flex-direction: column;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Upload Survey Files</h4>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer d-flex align-items-center" style="justify-content: center">
                    <button type="button" class="btn btn-primary">Done</button>
                </div>
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
@endsection
