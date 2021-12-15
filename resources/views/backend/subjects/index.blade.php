@extends('layouts.contentLayoutMaster')

@section('title', 'All Subjects')

@section('content')
    <section id="column-search-datatable">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">Subjects</h4>
                </div>
                <div class="card-datatable">

                    @include('backend.subjects.table')

                    <div class="text-center">
                    
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection

