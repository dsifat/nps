@extends('layouts.appMaster')

@section('title', 'Competitive Survey')

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
              <li><a class="btn btn-primary">Upload Survey</a></li>
            </ul>
            {{--            </div>--}}
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

