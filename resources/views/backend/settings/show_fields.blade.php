<!-- Id Field -->
<div class="col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $settings->id }}</p>
</div>


<!-- Data Field -->
<div class="col-sm-6">
    {!! Form::label('data', 'Data:') !!}
    <p>{{ $settings->data }}</p>
</div>


<!-- Created At Field -->
<div class="col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $settings->created_at }}</p>
</div>


<!-- Updated At Field -->
<div class="col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $settings->updated_at }}</p>
</div>


