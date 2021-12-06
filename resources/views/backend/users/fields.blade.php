@section('vendor-style')
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Confirmation Password Field -->
<div class="form-group col-sm-6">
      {!! Form::label('password', 'Password Confirmation') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>

<!-- Role Field -->
@php
    $s_roles = isset($user) ? $user->roles->pluck('id') : null;
@endphp
<div class="form-group col-sm-6">
    {!! Form::label('role_ids', 'Role:') !!}
    {!! Form::select('role_ids[]', $roleItems, $s_roles, ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
</div>

@section('vendor-script')
        <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
@endsection

@section('page-script')
    <script>
      (function(window, document, $) {
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
