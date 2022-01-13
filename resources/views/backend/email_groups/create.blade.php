@extends('layouts.contentLayoutMaster')

@section('title', 'Create Email Group')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Create Email Group</h4>
                    </div>

                    {!! Form::open(['route' => 'backend.emailGroups.store', 'files' => true]) !!}

                    <div class="card-body">
                        @include('adminlte-templates::common.errors')
                        <div class="row">
                            @include('backend.email_groups.fields')
                        </div>
                    </div>

                    <div class="card-footer">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('backend.emailGroups.index') }}" class="btn btn-outline-secondary waves-effect">Cancel</a>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection
