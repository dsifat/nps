<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $permission->id }}</p>
</div>

<!-- Label Field -->
<div class="col-sm-12">
    {!! Form::label('label', 'Label:') !!}
    <p>{{ $permission->label }}</p>
</div>

<!-- Permission Field -->
<div class="col-sm-12">
    {!! Form::label('permission', 'Permission:') !!}
    <p>{{ $permission->permission }}</p>
</div>

<!-- Group Field -->
<div class="col-sm-12">
    {!! Form::label('group', 'Group:') !!}
    <p>{{ $permission->group }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $permission->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $permission->updated_at }}</p>
</div>

