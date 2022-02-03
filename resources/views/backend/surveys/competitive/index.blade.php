@extends('layouts.appMaster')

@section('title', 'Competitive Survey')

@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}">
@endsection

@section('content')
  <section id="column-search-datatable">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header border-bottom">
            <h4 class="card-title">Competitive Survey List</h4>
            {{--            <div class="heading-elements">--}}
            <ul class="list-inline m-0">
              <li><a class="btn btn-outline-dark"><i data-feather="search"></i></a></li>
              <li><a class="btn btn-outline-dark">Export</a></li>
                <li><a class="btn btn-primary" data-toggle="modal" data-target="#yourModal">Upload Survey</a></li>
            </ul>
            {{--            </div>--}}
              <div class="modal fade" id="yourModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header" style="flex-direction: column;">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Upload Survey Files</h4>
                          </div>
                          <div class="modal-body">
{{--                              <form>--}}
{{--                                  <div class="form-group">--}}
{{--                                      <label for="recipient-name" class="col-form-label">Recipient:</label>--}}
{{--                                      <input type="text" class="form-control" id="recipient-name">--}}
{{--                                  </div>--}}
{{--                              </form>--}}
                              <form action="#" class="dropzone dropzone-area" id="my-awesome-dropzone">
                                      <div class="dz-message d-flex flex-column">Drop files here or click to upload.
                                      <p class="p-2" style="background-color: #04AA6D!important; border-radius: 5px;">
                                          Upload Files</p>
                                      <p class="p-2">File can't be more than 300kb size</p>
                                      </div>
                              </form>
                          </div>
                          <div class="modal-footer d-flex align-items-center">
                              <button type="button" class="btn btn-primary">Done</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card-datatable">
            <div class="table-responsive">
              <table class="table row-grouping">
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
            </div>
          </div>
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
