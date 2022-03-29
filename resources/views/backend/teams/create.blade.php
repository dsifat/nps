@extends('layouts.contentLayoutMaster')

@section('title', 'Create Team')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Add New Team</h4>
                    </div>

                    {!! Form::open(['route' => 'backend.teams.store']) !!}

                    <div class="card-body">
                        @include('adminlte-templates::common.errors')
                        <div class="row">
                            @include('backend.teams.fields')
                        </div>
                    </div>

                    <div class="card-footer">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('backend.teams.index') }}" class="btn btn-outline-secondary waves-effect">Cancel</a>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection
