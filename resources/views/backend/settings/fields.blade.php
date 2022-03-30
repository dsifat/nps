  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="application">Application Name</label>
      <input type="text" name="name" class="form-control" id="application" placeholder="Application Name" value="{{ $data->name ?? '' }}">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="application">Application Logo</label>
      <input type="file" name="logo" class="form-control" id="application" placeholder="Application Logo">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="admin-email">Admin Email</label>
      <input type="email" name="email" class="form-control" id="admin-email" placeholder="Admin Email" value="{{ $data->email ?? '' }}">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="copyright">Copyright Text</label>
      <input type="text" name="copyright" class="form-control" id="copyright" placeholder="Copyright Text" value="{{ $data->copyright ?? '' }}">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="ad-cred">Microsoft AD Credentials</label>
      <input type="text" name="msad" class="form-control" id="ad-cred" placeholder="Microsoft AD Credentials" value="{{ $data->msad ?? '' }}">
    </div>
  </div>