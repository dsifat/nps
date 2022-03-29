@can('DeleteCustomerGroup')
    {!! Form::open(['route' => ['backend.customerGroups.destroy', $id], 'method' => 'delete']) !!}
@endcan
<div class='btn-group'>
    @can('CreateCustomerGroup')
        <a href="{{ route('backend.customerGroups.show', $id) }}"
           class='btn btn-secondary btn-sm waves-effect waves-light'>
            <i class="mr-50" data-feather="eye"></i>
        </a>
    @endcan
    @can('EditCustomerGroup')
        <a href="{{ route('backend.customerGroups.edit', $id) }}"
           class='btn btn-secondary btn-sm waves-effect waves-light'>
            <i class="mr-50" data-feather="edit-2"></i>
        </a>
    @endcan
    @can('DeleteCustomerGroup')
        {!! Form::button('<i class="mr-50" data-feather="trash"></i>', [
            'type' => 'submit',
            'class' => 'btn btn-danger btn-sm waves-effect waves-light',
            'onclick' => "return confirm('Are you sure?')"
        ]) !!}
    @endcan
</div>
@can('DeleteCustomerGroup')
    {!! Form::close() !!}
@endcan
