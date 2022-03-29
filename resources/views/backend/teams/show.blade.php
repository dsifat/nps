@extends('layouts.contentLayoutMaster')

@section('title', 'Show Team')

@section('content')
    <section class="content-header">
        {{--        <div class="row">--}}
        {{--            <div class="col-md-12">--}}
        {{--                <div class="card">--}}
        {{--                    <div class="card-header">--}}
        {{--                    <h4 class="card-title">{{$team->name}} Team</h4>--}}
        {{--                    </div>--}}
        {{--                    <div class="card-content">--}}
        {{--                        <div class="card-body">--}}
        {{--                            <div class="row">--}}
        {{--                                @include('backend.teams.show_fields')--}}
        {{--                            </div>--}}
        {{--                            <a href="{{ route('backend.teams.index') }}" class="btn btn-outline-secondary waves-effect waves-light">Back</a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </section>--}}
        <section id="column-search-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title"> {{$team->name}} Team </h4>
                        </div>
                        <div class="card-datatable">
                            @include('backend.teams.table')
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
