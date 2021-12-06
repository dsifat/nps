@can('DeletePermission')
    {!! Form::open(['route' => ['backend.permissions.destroy', $id], 'method' => 'delete']) !!}
@endcan
<div class='btn-group'>
    @can('CreatePermission')
        <a href="{{ route('backend.permissions.show', $id) }}" class='btn btn-secondary btn-sm waves-effect waves-light'>
            <i class="mr-50" data-feather="eye"></i>
        </a>
    @endcan
    @can('EditPermission')
        <a href="{{ route('backend.permissions.edit', $id) }}" class='btn btn-secondary btn-sm waves-effect waves-light'>
            <i class="mr-50" data-feather="edit-2"></i>
        </a>
    @endcan
    @can('DeletePermission')
        {!! Form::button('<i class="mr-50" data-feather="trash"></i>', [
            'type' => 'submit',
            'class' => 'btn btn-danger btn-sm waves-effect waves-light',
            'onclick' => "return confirm('Are you sure?')"
        ]) !!}
    @endcan
</div>
@can('DeletePermission')
    {!! Form::close() !!}
@endcan
