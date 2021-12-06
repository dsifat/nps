@extends('layouts.contentLayoutMaster')

@section('title', 'Show Role')

@section('content')
    <section class="content-header">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">Role Details</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            @include('backend.roles.show_fields')
                            <a href="{{ route('backend.roles.index') }}" class="btn btn-outline-secondary waves-effect waves-light">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
