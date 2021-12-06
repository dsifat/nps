@extends('layouts.contentLayoutMaster')

@section('title', 'Edit Schedule Task')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row">
            <div class="col-12">
                <div class="card" id="schedule-task-app" v-cloak>
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Edit Schedule Task</h4>
                    </div>

                    {!! Form::model($scheduleTask, ['route' => ['backend.scheduleTasks.update', $scheduleTask->id], 'method' => 'patch']) !!}

                    <div class="card-body">
                        @include('adminlte-templates::common.errors')
                        <div class="row">
                            @include('backend.schedule_tasks.fields')
                        </div>
                    </div>

                    {{-- <div class="card-footer">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('backend.scheduleTasks.index') }}" class="btn btn-outline-secondary waves-effect">Cancel</a>
                    </div> --}}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection
