@section('vendor-style')
    {{-- <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}"> --}}
@endsection

@section('page-style')
    <style>
        .mt-fixing {
            margin-top: 0.2857rem !important;
        }

        [v-cloak] { display: none; }
    </style>
@endsection

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Command Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('command', 'Command:') !!}
    {!! Form::text('command', null, ['class' => 'form-control']) !!}
</div> --}}

<div class="form-group col-sm-6">
  {!! Form::label('command', 'Command:') !!}
  <select class="form-control select2" id="command" name="command" v-model="command">
    @foreach ($commands as $command)
        <option value="{{ $command['name'] }}"> {{ $command['name'] }} - {{ $command['description'] }}</option>
    @endforeach
  </select>
</div>

<!-- Parameters Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('parameters', 'Parameters:') !!}
    {!! Form::text('parameters', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Expression Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('expression', 'Expression:') !!}
    {!! Form::text('expression', null, ['class' => 'form-control']) !!}
</div> --}}

<div class="form-group col-md-6">
  <label for="expression">Expression:</label>
    <fieldset>
      <div class="input-group">
        <input type="text" class="form-control" aria-describedby="button-addon2" name="expression" id="expression" v-model="expression">
        <div class="input-group-append" id="button-addon2">
          <button class="btn btn-primary" type="button" @click.prevent="openExpressionModal">Prepare</button>
        </div>
      </div>
    </fieldset>
</div>

<!-- Is Active Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('is_active', 'Is Active:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_active', 0) !!}
        {!! Form::checkbox('is_active', '1', null) !!}
    </label>
</div> --}}

<div class="form-group col-md-6">
    {!! Form::label('', '') !!}
    <div class="custom-control custom-switch custom-control-inline mt-2">
        {!! Form::hidden('is_active', 0) !!}
        {!! Form::checkbox('is_active', 1, null,  ['class' => 'custom-control-input', 'id' => 'is_active']) !!}
        {!! Form::label('is_active', 'Is Active', ['for' => 'is_active', 'class' => 'custom-control-label mt-fixing']) !!}
    </div>
</div>



<!-- Dont Overlap Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('dont_overlap', 'Dont Overlap:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('dont_overlap', 0) !!}
        {!! Form::checkbox('dont_overlap', '1', null) !!}
    </label>
</div> --}}


<!-- Notification Email Address Field -->
<div class="form-group col-md-6">
    {!! Form::label('notification_email_address', 'Notification Email Address:') !!}
    {!! Form::text('notification_email_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Notification Type Field -->
<div class="form-group col-md-6 demo-inline-spacing">
    {!! Form::label('notification_type', 'Notification Type:') !!}
    <div class="custom-control custom-radio">
        {!! Form::radio('notification_type', "0", null, ['class' => 'custom-control-input', 'id' => 'customRadio1Error']) !!}
        <label class="custom-control-label" for="customRadio1Error">Error</label>
    </div>
    <div class="custom-control custom-radio">
        {!! Form::radio('notification_type', "1", null, ['class' => 'custom-control-input', 'id' => 'customRadio2All']) !!}
        <label class="custom-control-label" for="customRadio2All">All</label>
    </div>
</div>

<!-- Log Clean Up Frequency Field -->
<div class="form-group col-md-6">
    {!! Form::label('log_clean_up_frequency', 'Log Clean Up Frequency:') !!}
    {!! Form::text('log_clean_up_frequency', null, ['class' => 'form-control']) !!}
</div>

<!-- Log Clean Up Type Field -->
<div class="form-group col-md-6 demo-inline-spacing">
    {!! Form::label('log_clean_up_type', 'Log Clean Up Type:') !!}
    <div class="custom-control custom-radio">
        {!! Form::radio('log_clean_up_type', "0", null, ['class' => 'custom-control-input', 'id' => 'customRadio1']) !!}
        <label class="custom-control-label" for="customRadio1">Times</label>
    </div>
    <div class="custom-control custom-radio">
        {!! Form::radio('log_clean_up_type', "1", null, ['class' => 'custom-control-input', 'id' => 'customRadio2']) !!}
        <label class="custom-control-label" for="customRadio2">Days</label>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('backend.scheduleTasks.index') }}" class="btn btn-outline-secondary waves-effect">Cancel</a>
</div>

@include('backend.schedule_tasks._cronexpression_modal')

@section('vendor-script')
    {{-- <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script> --}}
@endsection

@section('page-script')
<!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2"></script> --}}
    {{-- <script src="{{ asset('/vendor/vuejs/vue.js') }}"></script> --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> --}}

    <script src="{{ asset('/vendor/cronstrue/compiled_cronexpression.js') }}"></script>
    <script src="{{ asset('/vendor/cronstrue/cronstrue.min.js') }}"></script>
    <script>
        var s_expression = '{{ old('expression') ?? $scheduleTask->expression ?? '' }}';
        var s_command = '{{ old('command') ?? $scheduleTask->command ?? '' }}';

        var app = new Vue({
            el: '#schedule-task-app',

            data: {
                cronExpression: {},
                humanReadable: '',
                selectedField: '',
                selectedFrequency: '',
                minute: '',
                hour: '',
                day_month: '',
                month: '',
                day_week: '',
                options: [
                    [
                        {opt: '*', desc: 'any value'},
                        {opt: ',', desc: 'value list separator'},
                        {opt: '-', desc: 'range of values'},
                        {opt: '/', desc: 'step values'}
                    ],
                    [
                        {opt: '*', desc: 'any value'},
                        {opt: ',', desc: 'value list separator'},
                        {opt: '-', desc: 'range of values'},
                        {opt: '/', desc: 'step values'},
                        {opt: '0-59', desc: 'allowed values'}
                    ],
                    [
                        {opt: '*', desc: 'any value'},
                        {opt: ',', desc: 'value list separator'},
                        {opt: '-', desc: 'range of values'},
                        {opt: '/', desc: 'step values'},
                        {opt: '0-23', desc: 'allowed values'}
                    ],
                    [
                        {opt: '*', desc: 'any value'},
                        {opt: ',', desc: 'value list separator'},
                        {opt: '-', desc: 'range of values'},
                        {opt: '/', desc: 'step values'},
                        {opt: '1-31', desc: 'allowed values'}
                    ],
                    [
                        {opt: '*', desc: 'any value'},
                        {opt: ',', desc: 'value list separator'},
                        {opt: '-', desc: 'range of values'},
                        {opt: '/', desc: 'step values'},
                        {opt: '1-12', desc: 'allowed values'},
                        {opt: 'JAN-DEC', desc: 'alternative single values'}
                    ],
                    [
                        {opt: '*', desc: 'any value'},
                        {opt: ',', desc: 'value list separator'},
                        {opt: '-', desc: 'range of values'},
                        {opt: '/', desc: 'step values'},
                        {opt: '0-6', desc: 'allowed values'},
                        {opt: 'SUN-SAT', desc: 'alternative single values'},
                        // {opt: '7', desc: 'sunday non-standard'}
                    ]
                ],
                cronExpObj: new Cronexpression(),
                final_exp: '',
                expression: s_expression,
                command: s_command
            },

            methods: {
                initCronExpression: function () {
                    this.selectedField = 0;
                    this.selectedFrequency = 0;
                    this.final_exp = this.expression;
                    this.updatePreparedCronSegments(this.final_exp);
                    this.updateHumanREadableCronExpression();
                    // this.humanReadable = '';
                    // this.minute = this.hour = this.day_week = this.day_month = this.month = '';
                    // this.final_exp = '';
                    // this.cronExpression.form = '';
                },
                prepareCronExpression: function (action) {
                    this.expression = this.final_exp;
                },
                getCurrentExpression: function () {
                    return this.minute + " " + this.hour + " " + this.day_month + " " + this.month + " " + this.day_week;
                },
                updateHumanREadableCronExpression: function () {
                    const exp = this.final_exp;
                    this.humanReadable = (this.cronExpObj.isValidExpression(exp)) ? cronstrue.toString(exp) : 'Not a Valid Cron Expression';
                },
                onPreparedCronExpression: function () {
                    const final_exp = this.final_exp;
                    (this.cronExpression.form === 'create') ? this.formCreate.expression = final_exp : this.formUpdate.expression = final_exp;
                    this.initCronExpression();
                    $.magnificPopup.close();
                },
                updatePreparedCronSegments: function (exp) {//done
                    const segments = exp.split(" ");
                    const len = segments.length;

                    console.log(len);

                    for (let i = 0; i < len; i++) {
                        switch(i) {
                            case 0:
                                this.minute = segments[0];
                                break;
                            case 1:
                                this.hour = segments[1];
                                break;
                            case 2:
                                this.day_month = segments[2];
                                break;
                            case 3:
                                this.month = segments[3];
                                break;
                            case 4:
                                this.day_week = segments[4];
                                break;
                        }
                    }
                },
                prepareFreqOptionChanged: function () {//done
                    this.selectedField = 0;

                    let exp = this.cronExpObj[this.selectedFrequency.interval]();
                    this.updatePreparedCronSegments(exp);
                    this.final_exp = exp;
                },
                cronSegmentChanged: function () {
                    this.final_exp = this.getCurrentExpression();
                },



                openExpressionModal: function () {
                this.initCronExpression();
                $('#inlineForm').modal();
                },
            },

            mounted() {
            },

            watch: {
                final_exp: function(val) {
                    this.updateHumanREadableCronExpression();
                }
            },

            computed: {
                    // formCreateCanSubmit: function formCreateCanSubmit() {
                    //     return this.formCreate.description !== '' && this.formCreate.command !== '' && this.formCreate.expression !== '' && this.formCreate.log_clean_up_frequency !== '' && this.formCreate.log_clean_up_type !== '' && this.formCreate.notification_type !== '' && this.multipleFormSubmit === true;
                    // },
                    // formUpdateCanSubmit: function formUpdateCanSubmit() {
                    //     return this.formUpdate.description !== '' && this.formUpdate.command !== '' && this.formUpdate.expression !== '' && this.formUpdate.log_clean_up_frequency !== '' && this.formUpdate.log_clean_up_type !== '' && this.formUpdate.notification_type !== '' && this.multipleFormSubmit === true;
                    // },
                    // finalExp: function finalExp() {
                    //     return this.cronExpression.prepare.final_exp;
                    // },
                    // prepareCanBeSubmitted: function prepareCanBeSubmitted() {
                    //     return this.cronExpression.prepare.cronExpObj.isValidExpression(this.cronExpression.prepare.final_exp);
                    // }
                }
            }
        );

        // (function(window, document, $) {
        //     'use strict';
        //     // Basic Select2 select
        //     $(".select2").select2({
        //         // the following code is used to disable x-scrollbar when click in select input and
        //         // take 100% width in responsive also
        //         dropdownAutoWidth: true,
        //         width: '100%'
        //     });
        // })(window, document, jQuery);
    </script>
@endsection
