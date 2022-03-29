@section('third_party_stylesheets_before')
    @include('layouts.datatables_css')
@endsection

@section('third_party_stylesheets_after')
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap4.min.css')) }}">
@endsection

@include('flash::message')

{!! $dataTable->table(['width' => '100%', 'class' => 'table table-bordered table-hover datatables-ajax dt-column-search']) !!}

@section('third_party_scripts')
    @include('layouts.datatables_js')

    {!! $dataTable->scripts() !!}

    <script>
        $('#dataTableBuilder').on('draw.dt', function () {
            feather.replace();
        });
    </script>

    @include('layouts.datatables_session_expired')
@endsection
