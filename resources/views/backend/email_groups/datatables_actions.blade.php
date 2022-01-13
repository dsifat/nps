@can('DeleteEmailGroup')
    {!! Form::open(['route' => ['backend.emailGroups.destroy', $id], 'method' => 'delete']) !!}
@endcan
<div class='btn-group'>
    @can('CreateEmailGroup')
        <a href="{{ route('backend.emailGroups.show', $id) }}" class='btn btn-secondary btn-sm waves-effect waves-light'>
            <i class="mr-50" data-feather="eye"></i>
        </a>
    @endcan
    @can('EditEmailGroup')
        <a href="{{ route('backend.emailGroups.edit', $id) }}" class='btn btn-secondary btn-sm waves-effect waves-light'>
            <i class="mr-50" data-feather="edit-2"></i>
        </a>
    @endcan
    @can('DeleteEmailGroup')
        {!! Form::button('<i class="mr-50" data-feather="trash"></i>', [
            'type' => 'submit',
            'class' => 'btn btn-danger btn-sm waves-effect waves-light',
            'onclick' => "return confirm('Are you sure?')"
        ]) !!}
    @endcan
</div>
@can('DeleteEmailGroup')
    {!! Form::close() !!}
@endcan
