@extends('roles.admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <form method="post" class="needs-validation" novalidate=""
                            action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <h4>{{ __('Update Profile') }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <div class="mb-3">
                                            @if (!Auth::user()->image)
                                                <img width="80px" alt="image"
                                                    src="{{ asset('backend/assets/img/avatar/avatar-1.png') }}"
                                                    class="rounded-circle mr-1">
                                            @else
                                                <img width="80px" src="{{ asset(Auth::user()->image) }}"
                                                    class="rounded-circle mr-1" alt="{{ Auth::user()->name }}">
                                            @endif
                                        </div>

                                        <label>{{ __('Image Avatar') }}</label>
                                        <input type="file" name="image" class="form-control"
                                            value="{{ Auth::user()->name }}" placeholder="Jhon Doe">
                                    </div>

                                    <div class="form-group col-md-6 col-12">
                                        <label>{{ __('Name') }}</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ Auth::user()->name }}" placeholder="Jhon Doe" required="">
                                    </div>

                                    <div class="form-group col-md-6 col-12">
                                        <label>{{ __('Email') }}</label>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ Auth::user()->email }}" placeholder="jhon@doe.com" required="">
                                    </div>

                                    <div class="form-group col-md-6 col-12">
                                        <label>{{ __('Username') }}</label>
                                        <input type="text" name="username" class="form-control"
                                            value="{{ Auth::user()->username }}" placeholder="Jhon-Doe" required="">
                                    </div>

                                    <div class="form-group col-md-6 col-12">
                                        <label>{{ __('Phone') }}</label>
                                        <input type="text" name="phone" class="form-control"
                                            value="{{ Auth::user()->phone }}" placeholder="+1 (615) 507-8013"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">{{ __('Save Changes') }}</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-12">
                    <div class="card">
                        <form method="post" class="needs-validation" novalidate=""
                            action="{{ route('admin.password.update') }}">
                            @csrf
                            <div class="card-header">
                                <h4>{{ __('Update Password') }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>{{ __('Current Password') }}</label>
                                        <input type="password" name="current_password" class="form-control" value=""
                                            placeholder="{{ __('Current Password') }}">
                                    </div>

                                    <div class="form-group col-12">
                                        <label>{{ __('New Password') }}</label>
                                        <input type="password" name="password" class="form-control" value=""
                                            placeholder="{{ __('New Password') }}">
                                    </div>

                                    <div class="form-group col-12">
                                        <label>{{ __('Repeat Password') }}</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            value="" placeholder="{{ __('Confirm Password') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">{{ __('Update Password') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
