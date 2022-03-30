<div class="table-responsive">
    <table class="table" id="settings-table">
        <thead>
            <tr>
                <th>Data</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($settings as $settings)
            <tr>
                <td>{{ $settings->data }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['backend.settings.destroy', $settings->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('backend.settings.show', [$settings->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('backend.settings.edit', [$settings->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
