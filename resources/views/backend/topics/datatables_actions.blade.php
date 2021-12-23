@can('DeleteTopic')
    {!! Form::open(['route' => ['backend.topics.destroy', $id], 'method' => 'delete']) !!}
@endcan
<div class='btn-group'>
    @can('CreateTopic')
        <a href="{{ route('backend.topics.show', $id) }}" class='btn btn-secondary btn-sm waves-effect waves-light'>
            <i class="mr-50" data-feather="eye"></i>
        </a>
    @endcan
    @can('EditTopic')
        <a href="{{ route('backend.topics.edit', $id) }}" class='btn btn-secondary btn-sm waves-effect waves-light'>
            <i class="mr-50" data-feather="edit-2"></i>
        </a>
    @endcan
    @can('DeleteTopic')
        {!! Form::button('<i class="mr-50" data-feather="trash"></i>', [
            'type' => 'submit',
            'class' => 'btn btn-danger btn-sm waves-effect waves-light',
            'onclick' => "return confirm('Are you sure?')"
        ]) !!}
    @endcan
</div>
@can('DeleteTopic')
    {!! Form::close() !!}
@endcan
