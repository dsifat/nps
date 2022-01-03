@extends('layouts.contentLayoutMaster')

@section('title', 'All Phones')

@section('content')
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">{{ $phoneGroup->name }}</h4>
                </div>
                <div class="card-datatable">

                    @include('backend.phones.table')

                    <div class="text-center">

                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection

