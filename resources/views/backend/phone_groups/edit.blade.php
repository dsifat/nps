@extends('layouts.contentLayoutMaster')

@section('title', 'Edit Phone Group')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Edit Phone Group</h4>
                    </div>

                    {!! Form::model($phoneGroup, ['route' => ['backend.phoneGroups.update', $phoneGroup->id], 'method' => 'patch','files' => true]) !!}

                    <div class="card-body">
                        @include('adminlte-templates::common.errors')
                        <div class="row">
                            @include('backend.phone_groups.fields')
                        </div>
                    </div>

                    <div class="card-footer">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        <a href="{{ route('backend.phoneGroups.index') }}" class="btn btn-outline-secondary waves-effect">Cancel</a>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection
