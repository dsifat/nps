@section('vendor-style')
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Team Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<!-- Members Field -->
@php
    $team_members = isset($team) ? $team->users->pluck('id') : null;
@endphp

<div class="form-group col-sm-6">
    {!! Form::label('user_ids', 'Team Members') !!}
    {!! Form::select('user_ids[]', $allUsers, $team_members, ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
</div>

@section('vendor-script')
    <script src="{{ asset('vendors/js/forms/select/select2.full.min.js') }}"></script>
@endsection

@section('page-script')
    <script>
        (function (window, document, $) {
            'use strict';
            // Basic Select2 select
            $(".select2").select2({
                // the following code is used to disable x-scrollbar when click in select input and
                // take 100% width in responsive also
                dropdownAutoWidth: true,
                width: '100%'
            });
        })(window, document, jQuery);
    </script>
@endsection
