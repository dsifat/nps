@extends('layouts.contentLayoutMaster')

@section('title', 'All Teams')

@section('content')
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Team Management</h4>
                        <ul class="list-inline m-0 d-none d-sm-none d-md-none d-lg-block">
                            <li><a href="{{ url('backend/teams/create/bulk') }}" class="btn btn-primary">Add Bulk
                                    Team</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="row d-lg-none d-xl-none mr-0 ml-0 mt-1">
                            <a href="{{ url('backend/teams/create/bulk') }}" class="btn btn-primary">Add Bulk
                                Team</a>
                        </div>
                        <div class="card-datatable">
                            @include('backend.teams.table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

