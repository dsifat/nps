@extends('layouts.contentLayoutMaster')

@section('title', 'Create User')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Create User</h4>
                    </div>

                    {!! Form::open(['route' => 'backend.users.store']) !!}

                    <div class="card-body">
                        @include('adminlte-templates::common.errors')
                        <div class="row">
                            @include('backend.users.fields')
                        </div>
                    </div>

                    <div class="card-footer">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('backend.users.index') }}" class="btn btn-outline-secondary waves-effect">Cancel</a>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection
