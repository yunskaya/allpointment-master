@extends('layouts/fullLayoutMaster')

@section('title', 'Register Page')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/page-auth.css')) }}">
@endsection

@section('content')
<div class="auth-wrapper auth-v1 px-2">
  <div class="auth-inner py-2" style="max-width: 500px!important;">
    <!-- Register v1 -->
    <div class="card mb-0">
      <div class="card-body">
        <a href="javascript:void(0);" class="brand-logo">
          <h2 class="brand-text text-primary ml-1">{{trans('All Pointment')}}</h2>
        </a>
          <div class="col-xl-12 col-lg-12">
              <div class="card">
                  <div class="card-body">
                      <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" id="homeIcon-tab" data-toggle="tab" href="#homeIcon" aria-controls="home" role="tab" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg> {{trans('USER REGISTER')}}</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link " id="profileIcon-tab" data-toggle="tab" href="#profileIcon" aria-controls="profile" role="tab" aria-selected="true"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg> {{trans('Company Register')}}</a>
                          </li>

                      </ul>
                      <div class="tab-content">
                          <div class="tab-pane active" id="homeIcon" aria-labelledby="homeIcon-tab" role="tabpanel">
                              <form class="auth-register-form mt-2" method="POST" action="{{ route('register') }}">
                                  @csrf
                                  <div class="col-md-12 col-12">
                                      <div class="card">
                                          <div class="card-header">
                                              <h4 class="card-title">{{trans('User Register')}}</h4>
                                          </div>
                                          <div class="card-body">
                                              <form class="form form-horizontal">
                                                  <input type="hidden" value="0" id="is-company" class="form-control" name="is_company" placeholder="Is-Company">
                                                  <div class="row">
                                                      <div class="col-12">
                                                          <div class="form-group row">
                                                              <div class="col-sm-3 col-form-label">
                                                                  <label for="first-name">{{trans('First Name')}}</label>
                                                              </div>
                                                              <div class="col-sm-9">
                                                                  <input type="text" id="first-name" class="form-control" name="name" placeholder="First Name" required>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-12">
                                                          <div class="form-group row">
                                                              <div class="col-sm-3 col-form-label">
                                                                  <label for="email">{{trans('Email')}}</label>
                                                              </div>
                                                              <div class="col-sm-9">
                                                                  <input type="email" id="email-id" class="form-control" name="email" placeholder="Email" required>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 col-form-label">
                                                                <label for="password">{{trans('Password')}}</label>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                @error('password')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-sm-3 col-form-label">
                                                                <label for="password_confirmation">{{trans('Password Repeat')}}</label>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="password" id="password-confirmation" class="form-control" name="password_confirmation" placeholder="Password confirmation" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9 offset-sm-3">
                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">{{trans('Remember Me')}}</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9 offset-sm-3">
                                                        <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">{{trans('Submit')}}</button>
                                                        <button type="reset" class="btn btn-outline-secondary waves-effect">{{trans('Reset')}}</button>
                                                    </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                          <div class="tab-pane" id="profileIcon" aria-labelledby="profileIcon-tab" role="tabpanel">
                              <form class="auth-register-form mt-2" method="POST" action="{{ route('register') }}">
                                  @csrf
                                  <div class="col-md-12 col-12">
                                      <div class="card">
                                          <div class="card-header">
                                              <h4 class="card-title">{{trans('Company Register')}}</h4>
                                          </div>
                                          <div class="card-body">
                                              <form class="form form-horizontal">
                                                  <input type="hidden" value="1" id="is-company" class="form-control" name="is_company" placeholder="Is-Company">
                                                  <div class="row">
                                                      <div class="col-12">
                                                          <div class="form-group row">
                                                              <div class="col-sm-3 col-form-label">
                                                                  <label for="first-name">{{trans('First Name')}}</label>
                                                              </div>
                                                              <div class="col-sm-9">
                                                                  <input type="text" id="first-name" class="form-control" name="name" placeholder="First Name" required>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-12">
                                                          <div class="form-group row">
                                                              <div class="col-sm-3 col-form-label">
                                                                  <label for="email-id">{{trans('Email')}}</label>
                                                              </div>
                                                              <div class="col-sm-9">
                                                                  <input type="email" id="email-id" class="form-control" name="email" placeholder="Email" required>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-12">
                                                          <div class="form-group row">
                                                              <div class="col-sm-3 col-form-label">
                                                                  <label for="company-name">{{trans('Company Name')}}</label>
                                                              </div>
                                                              <div class="col-sm-9">
                                                                  <input type="text" id="company-name" class="form-control" name="company_name" placeholder="Company Name" required>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-12">
                                                          <div class="form-group row">
                                                              <div class="col-sm-3 col-form-label">
                                                                  <label for="contact-info">{{trans('Mobile')}}</label>
                                                              </div>
                                                              <div class="col-sm-9">
                                                                  <input type="number" id="contact-info" class="form-control" name="phone" placeholder="Mobile" required>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-12">
                                                          <div class="form-group row">
                                                              <div class="col-sm-3 col-form-label">
                                                                  <label for="password">{{trans('Password')}}</label>
                                                              </div>
                                                              <div class="col-sm-9">
                                                                  <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-12">
                                                          <div class="form-group row">
                                                              <div class="col-sm-3 col-form-label">
                                                                  <label for="password_confirmation">{{trans('Password Repeat')}}</label>
                                                              </div>
                                                              <div class="col-sm-9">
                                                                  <input type="password" id="password-confirmation" class="form-control" name="password_confirmation" placeholder="Password confirmation" required>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-sm-9 offset-sm-3">
                                                          <div class="form-group">
                                                              <div class="custom-control custom-checkbox">
                                                                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                  <label class="custom-control-label" for="customCheck1">{{trans('Remember Me')}}</label>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-sm-9 offset-sm-3">
                                                          <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">{{trans('Submit')}}</button>
                                                          <button type="reset" class="btn btn-outline-secondary waves-effect">{{trans('Reset')}}</button>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <p class="text-center mt-2">
          <span>{{trans('Already have an account?')}}</span>
          @if (Route::has('login'))
          <a href="{{ route('login') }}">
            <span>{{trans('Sign in instead')}}</span>
          </a>
          @endif
        </p>
      </div>
    </div>
    <!-- /Register v1 -->
  </div>
</div>
@endsection
@section('after-script')
    <script>

  </script>

@endsection
