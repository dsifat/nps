<!-- Id Field -->
<div class="col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $phone->id }}</p>
</div>


<!-- Number Field -->
<div class="col-sm-6">
    {!! Form::label('number', 'Number:') !!}
    <p>{{ $phone->number }}</p>
</div>


<!-- Created At Field -->
<div class="col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $phone->created_at }}</p>
</div>


<!-- Updated At Field -->
<div class="col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $phone->updated_at }}</p>
</div>


