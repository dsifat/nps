<!-- Description Field -->
<div class="col-sm-3">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $scheduleTask->description }}</p>
</div>


<!-- Command Field -->
<div class="col-sm-3">
    {!! Form::label('command', 'Command:') !!}
    <p>{{ $scheduleTask->command }}</p>
</div>


<!-- Parameters Field -->
{{-- <div class="col-sm-3">
    {!! Form::label('parameters', 'Parameters:') !!}
    <p>{{ $scheduleTask->parameters }}</p>
</div> --}}


<!-- Expression Field -->
<div class="col-sm-3">
    {!! Form::label('expression', 'Expression:') !!}
    <p>{{ $scheduleTask->expression }}</p>
</div>


<!-- Is Active Field -->
<div class="col-sm-3">
    {!! Form::label('is_active', 'Is Active:') !!}
    <p>{{ $scheduleTask->is_active }}</p>
</div>


<!-- Dont Overlap Field -->
{{-- <div class="col-sm-3">
    {!! Form::label('dont_overlap', 'Dont Overlap:') !!}
    <p>{{ $scheduleTask->dont_overlap }}</p>
</div> --}}


<!-- Notification Email Address Field -->
<div class="col-sm-3">
    {!! Form::label('notification_email_address', 'Notification Email Address:') !!}
    <p>{{ $scheduleTask->notification_email_address }}</p>
</div>


<!-- Notification Type Field -->
<div class="col-sm-3">
    {!! Form::label('notification_type', 'Notification Type:') !!}
    <p>{{ $scheduleTask->notification_type }}</p>
</div>


<!-- Log Clean Up Frequency Field -->
<div class="col-sm-3">
    {!! Form::label('log_clean_up_frequency', 'Log Clean Up Frequency:') !!}
    <p>{{ $scheduleTask->log_clean_up_frequency }}</p>
</div>


<!-- Log Clean Up Type Field -->
<div class="col-sm-3">
    {!! Form::label('log_clean_up_type', 'Log Clean Up Type:') !!}
    <p>{{ $scheduleTask->log_clean_up_type }}</p>
</div>


<!-- Created At Field -->
{{-- <div class="col-sm-3">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $scheduleTask->created_at }}</p>
</div> --}}


<!-- Updated At Field -->
{{-- <div class="col-sm-3">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $scheduleTask->updated_at }}</p>
</div> --}}


