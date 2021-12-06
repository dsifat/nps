@can('DeleteUser')
    {!! Form::open(['route' => ['backend.users.destroy', $id], 'method' => 'delete']) !!}
@endcan
<div class='btn-group'>
    @can('CreateUser')
        <a href="{{ route('backend.users.show', $id) }}" class='btn btn-secondary btn-sm waves-effect waves-light'>
            <i class="mr-50" data-feather="eye"></i>
        </a>
    @endcan
    @can('EditUser')
        <a href="{{ route('backend.users.edit', $id) }}" class='btn btn-secondary btn-sm waves-effect waves-light'>
            <i class="mr-50" data-feather="edit-2"></i>
        </a>
    @endcan
    @can('DeleteUser')
        {!! Form::button('<i class="mr-50" data-feather="trash"></i>', [
            'type' => 'submit',
            'class' => 'btn btn-danger btn-sm waves-effect waves-light',
            'onclick' => "return confirm('Are you sure?')"
            ]) !!}
    @endcan
</div>
@can('DeleteUser')
    {!! Form::close() !!}
@endcan
