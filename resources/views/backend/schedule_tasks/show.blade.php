@extends('layouts.contentLayoutMaster')

@section('title', 'Show Schedule Task')

@section('content')
    <section class="content-header">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4 class="card-title">Schedule Task Details</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                @include('backend.schedule_tasks.show_fields')
                            </div>
                            <a href="{{ route('backend.scheduleTasks.index') }}" class="btn btn-outline-secondary waves-effect waves-light">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
