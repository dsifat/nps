@extends('layouts.contentLayoutMaster')

@section('title', 'Show User')

@section('content')
    <section class="content-header">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">User Details</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                @include('backend.users.show_fields')
                            </div>
                            <a href="{!! route('backend.users.index') !!}" class="btn btn-outline-secondary waves-effect waves-light">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
