@extends('layouts.contentLayoutMaster')

@section('title', 'All Phones')

@section('page-style')
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}">
@endsection

@section('content')
  {{--    <section id="column-search-datatable">--}}
  {{--        <div class="row">--}}
  {{--            <div class="col-12">--}}
  {{--            <div class="card">--}}
  {{--                <div class="card-header border-bottom">--}}
  {{--                    <h4 class="card-title">{{ $phoneGroup->name }}</h4>--}}
  {{--                </div>--}}
  {{--                <div class="card-datatable">--}}

  {{--                    @include('backend.phones.table')--}}

  {{--                    <div class="text-center">--}}

  {{--                    </div>--}}
  {{--                </div>--}}
  {{--            </div>--}}
  {{--            </div>--}}
  {{--        </div>--}}
  {{--    </section>--}}
  <section id="column-search-datatable">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header border-bottom">
            <h4 class="card-title">All Contacts</h4>
            {{--            <div class="heading-elements">--}}
            <ul class="list-inline m-0">
              <li><a class="btn btn-outline-"><i data-feather="settings"></i></a></li>
              <li><a class="btn btn-outline-dark"><i data-feather="search"></i></a></li>
              <li><a class="btn btn-outline-dark">Report</a></li>
              <li><button class="btn btn-outline-dark" data-toggle="modal" data-target="#uploadContactList">Import</button></li>
              <li>
                <button class="btn btn-primary" data-toggle="modal" data-target="#newContact">Add Contact</button>
              </li>
            </ul>
            {{--            </div>--}}
          </div>
          <div class="card-datatable">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-start pb-0">
                      <div>
                        <h2 class="text-bold-700 mb-0">255</h2>
                        <p>Total Contacts</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-start pb-0">
                      <div>
                        <h2 class="text-bold-700 mb-0">157</h2>
                        <p>Main</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-start pb-0">
                      <div>
                        <h2 class="text-bold-700 mb-0">(56) 2%</h2>
                        <p>Hard Bounce</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-start pb-0">
                      <div>
                        <h2 class="text-bold-700 mb-0">56 (6%)</h2>
                        <p>Opt-out</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="table-responsive">
              <table class="table row-grouping">
                <thead>
                <tr>
                  <th>Email</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Contact</th>
                  <th>Type</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                <tr>
                  <td>something@example.com</td>
                  <td>Don</td>
                  <td>Joe</td>
                  <td>Dhaka</td>
                  <td>Business</td>
                  <td><a class="mx-lg-75"><i data-feather="settings"></i></a></td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="modal fade text-left" id="newContact" tabindex="-1" role="dialog" aria-labelledby="newContact" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title text-text-bold-600" id="emailCompose">New Contact</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pt-1">
          <form>
            <div class="form-group">
              <label for="inputAddress">Email</label>
              <input type="email" class="form-control" id="inputAddress" placeholder="Email">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputfname">First Name</label>
                <input type="text" class="form-control" id="inputfname" placeholder="First Name">
              </div>
              <div class="form-group col-md-6">
                <label for="inputlname">Last Name</label>
                <input type="text" class="form-control" id="inputlname" placeholder="Last Name">
              </div>
            </div>
            <div class="form-group">
              <label for="inputphone">Phone Number</label>
              <input type="text" class="form-control" id="inputphone" placeholder="Phone">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <input type="submit" value="Send" class="btn btn-primary">
          <input type="Reset" value="Cancel" class="btn btn-white" data-dismiss="modal">
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade text-left" id="uploadContactList" tabindex="-1" role="dialog" aria-labelledby="uploadContactList" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title text-text-bold-600" id="uploadContactList">Upload Contact List</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pt-1">
            <form action="#" class="dropzone dropzone-area" id="my-awesome-dropzone">
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
              </div>
              <div class="dropzone dropzone-area" id="my-awesome-dropzone">
                <div class="dz-message">Drop files here or click to upload.</div>
              </div>
            </form>
        </div>
        <div class="modal-footer">
          <input type="submit" value="Import Contact" class="btn btn-primary">
          <input type="Reset" value="Cancel" class="btn btn-white" data-dismiss="modal">
        </div>
      </div>
    </div>
  </div>
@endsection

@section('page-script')
  <script src="{{ asset('vendors/js/extensions/dropzone.min.js') }}"></script>
  <script>
      // $('#my-awesome-dropzone').dropzone({
      //
      // });
  </script>
@endsection