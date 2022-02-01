@extends('layouts.contentLayoutMaster')

@section('title', 'All Phones')

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
              <li><a class="btn btn-primary">Add Contact</a></li>
            </ul>
            {{--            </div>--}}
          </div>
          <div class="card-datatable">
            <row>
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
            </row>
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
@endsection

