@can('DeleteTeam')
    {!! Form::open(['route' => ['backend.teams.destroy', $id], 'method' => 'delete']) !!}
@endcan
<div class='btn-group'>
    @can('CreateTeam')
        <a href="{{ route('backend.teams.show', $id) }}" class='btn btn-secondary btn-sm waves-effect waves-light'>
            <i class="mr-50" data-feather="eye"></i>
        </a>
    @endcan
    @can('EditTeam')
        <a href="{{ route('backend.teams.edit', $id) }}" class='btn btn-secondary btn-sm waves-effect waves-light'>
            <i class="mr-50" data-feather="edit-2"></i>
        </a>
    @endcan
    @can('DeleteTeam')
        {!! Form::button('<i class="mr-50" data-feather="trash"></i>', [
            'type' => 'submit',
            'class' => 'btn btn-danger btn-sm waves-effect waves-light',
            'onclick' => "return confirm('Are you sure?')"
        ]) !!}
    @endcan
</div>
@can('DeleteTeam')
    {!! Form::close() !!}
@endcan
