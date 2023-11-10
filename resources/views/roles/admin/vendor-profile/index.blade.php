@extends('roles.admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>{{ __('Update Vendor Profile') }}</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ __('Update Vendor Profile') }}</h4>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('admin.vendor-profile.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="banner">{{ __('Banner') }}</label>
                                    <input type="file" name="banner" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="phone">{{ __('Phone') }}</label>
                                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                                </div>

                                <div class="form-group">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                                </div>

                                <div class="form-group">
                                    <label for="Address">{{ __('Address') }}</label>
                                    <input type="text" name="Address" class="form-control" value="{{ old('Address') }}">
                                </div>

                                <div class="form-group">
                                    <label for="description">{{ __('Description') }}</label>
                                    <textarea class="summernote" name="description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="fb_link">{{ __('Facebook Link') }}</label>
                                    <input type="text" name="fb_link" class="form-control" value="{{ old('fb_link') }}">
                                </div>

                                <div class="form-group">
                                    <label for="tw_link">{{ __('Twitter Link') }}</label>
                                    <input type="text" name="tw_link" class="form-control" value="{{ old('tw_link') }}">
                                </div>

                                <div class="form-group">
                                    <label for="insta_link">{{ __('Instagram Link') }}</label>
                                    <input type="text" name="insta_link" class="form-control"
                                        value="{{ old('insta_link') }}">
                                </div>

                                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
