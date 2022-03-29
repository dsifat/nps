@extends('layouts.contentLayoutMaster')

@section('title', 'All Customer Groups')

@section('content')
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Customer Groups</h4>
                    </div>
                    <div class="card-datatable">
                        @include('backend.customer_groups.table')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

