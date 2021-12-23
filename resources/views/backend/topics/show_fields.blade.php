<!-- Id Field -->
<div class="col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $topic->id }}</p>
</div>


<!-- Parent Id Field -->
<div class="col-sm-6">
    {!! Form::label('parent_id', 'Parent Id:') !!}
    <p>{{ $topic->parent_id }}</p>
</div>


<!-- Name Field -->
<div class="col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $topic->name }}</p>
</div>


<!-- Created At Field -->
<div class="col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $topic->created_at }}</p>
</div>


<!-- Updated At Field -->
<div class="col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $topic->updated_at }}</p>
</div>


