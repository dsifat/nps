<!-- Name Field -->
@section('vendor-style')
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('topic_type', 'Type:') !!}
        {!! Form::select('topic_type', [1=>'Topic',2=>'Sub Topic'], !empty($data) ? $data->parent_id : '', ['class' => 'form-control select2', 'id'=>'topic_type']) !!}
    </div>
    <div class="form-group col-sm-6"></div>
</div>

<div class="row hidden" id="parent-topic">
    <div class="form-group col-sm-6">
        {!! Form::label('parent_id', 'Parent Topic:') !!}
        {!! Form::select('parent_id', $topics, !empty($data) ? $data->parent_id : '', ['class' => 'form-control select2', 'placeholder'=>'Please select a Topic']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', !empty($data) ? $data->name : '', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
    </div>
</div>

@section('vendor-script')
    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
@endsection

@section('page-script')
    <script>
        (function (window, document, $) {
            'use strict';
            // Basic Select2 select
            $(".select2").select2({
                // the following code is used to disable x-scrollbar when click in select input and
                // take 100% width in responsive also
                dropdownAutoWidth: true,
                width: '100%',
                allowClear: true
            });
            if ($('#topic_type').val() == 2) {
                $('#parent-topic').show().removeClass('hidden');
            }
            $('#topic_type').change(function () {
                if ($('#topic_type').val() == 2) {
                    $('#parent-topic').show().removeClass('hidden');
                } else {
                    $('#parent-topic').hide().addClass('hidden');
                }
            });
        })(window, document, jQuery);
    </script>
@endsection
