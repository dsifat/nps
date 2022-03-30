<!-- Id Field -->
<div class="col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $subject->id }}</p>
</div>


<!-- Name Field -->
<div class="col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $subject->name }}</p>
</div>


<!-- Logo Field -->
<div class="col-sm-6">
    {!! Form::label('logo', 'Logo:') !!}
    <p>{{ $subject->logo }}</p>
</div>


<!-- Created At Field -->
<div class="col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $subject->created_at }}</p>
</div>


<!-- Updated At Field -->
<div class="col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $subject->updated_at }}</p>
</div>


