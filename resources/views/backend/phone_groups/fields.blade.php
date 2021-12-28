<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('phone_number', 'Phone Number List:') !!}
    {!! Form::file('phone_number', ['class' => 'form-control']) !!}
</div>
