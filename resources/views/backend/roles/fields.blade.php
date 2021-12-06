<!-- Role Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role_name', 'Role Name:') !!}
    {!! Form::text('role_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

{{-- Permissions --}}
<div class="form-group col-sm-12 col-lg-12 px-1 d-inline-block">
  <h6 class="border-bottom ont-medium-2 text-center">
      Permissions
  </h6>
  @php
      $s_permissions = $role->permissions ?? collect([]);
      $s_old = old('permissions');
  @endphp

  @foreach ($permissions as $key => $value)
    <p class="mb-0 mt-1">{{ $key }}</p>
    {{-- <ul class="list-unstyled mb-0"> --}}
      <div class="row">
      @foreach ($value as $item)
          <div class="col-sm-3">
                <div class="custom-control custom-checkbox">
                    {{ Form::checkbox('permissions[]', $item->id, $s_permissions->contains($item), ['class' => 'custom-control-input', 'id' => 'customCheck' . $item->id ]) }}
                    {{-- <input type="checkbox" class="custom-control-input" id="customCheck1" checked /> --}}
                    <label class="custom-control-label" for="customCheck{{ $item->id }}">{{ $item->label }}</label>
                </div>
          </div>
          @endforeach
    </div>
    {{-- </ul> --}}
  @endforeach
</div>
