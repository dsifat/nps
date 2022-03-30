@extends('layouts.appMaster')

@section('title', 'Update Password')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Update Password</h4>
                    </div>
                    <div class="card-body container">
                        @include('flash::message')
                        @include('adminlte-templates::common.errors')
                        <div class="row align-items-center">
                        <form class="col-sm-8 mt-2 mx-auto" method="POST" action="{{ route('change-password') }}">
                              @csrf
                              <div class="form-group">
                                <div class="d-flex justify-content-between">
                                  <label for="login-password">Old Password</label>
                                </div>
                                <div class="input-group input-group-merge form-password-toggle">
                                  <input type="password" class="form-control form-control-merge" id="old_password" name="old_password" tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password"/>
                                  <div class="input-group-append">
                                      <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="d-flex justify-content-between">
                                  <label for="login-password">New Password</label>
                                </div>
                                <div class="input-group input-group-merge form-password-toggle">
                                  <input type="password" class="form-control form-control-merge" id="new_password" name="new_password" tabindex="2" placeholder="New Password" aria-describedby="login-password"/>
                                  <div class="input-group-append">
                                      <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="d-flex justify-content-between">
                                  <label for="login-password">Confirm Password</label>
                                </div>
                                <div class="input-group input-group-merge form-password-toggle">
                                  <input type="password" class="form-control form-control-merge" id="confirm_password" name="confirm_password" tabindex="2" placeholder="Confirm Password" aria-describedby="login-password"/>
                                  <div class="input-group-append">
                                      <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                  </div>
                                </div>
                              </div>
                              <button type="submit" class="btn btn-primary btn-block" tabindex="4">Change Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
