<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Group Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<!-- Upload File Field -->
<div class="file-upload-section">
    <div class="d-flex flex-column form-group">
        <label for="customer_list">File Upload</label>
        <input type="file" name="customer_list" placeholder="Choose File">
    </div>
</div>
