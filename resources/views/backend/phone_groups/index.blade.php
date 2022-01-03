@extends('layouts.contentLayoutMaster')

@section('title', 'All Phone Groups')

@section('content')
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Phone Groups</h4>
                </div>
                <div class="card-datatable">
                    @include('backend.phone_groups.table')
                    <div class="text-center">
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection

