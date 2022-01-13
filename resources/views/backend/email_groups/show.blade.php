@extends('layouts.contentLayoutMaster')

@section('title', 'Show Email Group')

@section('content')
    <section class="content-header">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">Email Group Details</h4>

                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
{{--                                @include('backend.email_groups.show_fields')--}}
                            </div>
                            <a href="{{ route('backend.emailGroups.index') }}" class="btn btn-outline-secondary waves-effect waves-light">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Email Lists</h4>
                    </div>
                    <div class="card-datatable">

                        @include('backend.email_groups.table')

                        <div class="text-center">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
