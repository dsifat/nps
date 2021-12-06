<div class='btn-group'>
        {!! Form::open(['route' => ['backend.scheduleTasks.runTaskNow', $id], 'method' => 'post']) !!}
        {!! Form::button('<i class="mr-50" data-feather="play"></i>', [
            'type' => 'submit',
            'class' => 'btn btn-secondary btn-sm waves-effect waves-light',
            'onclick' => "return confirm('Are you sure?')"
            ]) !!}
        {!! Form::close() !!}
        <a href="{{ route('backend.scheduleTasks.edit', $id) }}" class='btn btn-secondary btn-sm waves-effect waves-light'>
            <i class="mr-50" data-feather="edit-2"></i>
        </a>
        {!! Form::open(['route' => ['backend.scheduleTasks.destroy', $id], 'method' => 'delete']) !!}
        {!! Form::button('<i class="mr-50" data-feather="trash"></i>', [
            'type' => 'submit',
            'class' => 'btn btn-danger btn-sm waves-effect waves-light',
            'onclick' => "return confirm('Are you sure?')"
        ]) !!}
        {!! Form::close() !!}
</div>
