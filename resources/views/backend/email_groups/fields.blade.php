<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Upload Excel -->
<div class="form-group col-sm-6">
    {!! Form::label('excel_file', 'Excel File:') !!}
    {!! Form::file('excel_file', ['class' => 'form-control']) !!}
{{--    Form::file('file_name');--}}
</div>

