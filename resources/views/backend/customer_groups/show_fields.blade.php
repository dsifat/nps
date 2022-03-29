<!-- Id Field -->
<div class="col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $customerGroup->id }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $customerGroup->name }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $customerGroup->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $customerGroup->updated_at }}</p>
</div>


