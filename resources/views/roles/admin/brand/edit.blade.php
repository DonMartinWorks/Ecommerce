@extends('roles.admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>{{ __('Brand') }}</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ __('Update Brand') }}</h4>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('admin.brand.update', $brand->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="banner">{{ __('Banner Preview') }}</label>
                                    <br />
                                    <img width="300px" src="{{ asset($brand->logo) }}" alt="">
                                </div>

                                <div class="form-group">
                                    <label for="logo">{{ __('Logo') }}</label>
                                    <input type="file" name="logo" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input type="text" name="name" class="form-control" value="{{ $brand->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="is_featured">{{ __('Is Featured') }}</label>
                                    <select name="is_featured" class="form-control">
                                        <option value="" selected disabled>{{ __('Select') }}</option>
                                        <option {{ $brand->is_featured == 1 ? 'selected' : '' }} value="1">
                                            {{ __('Active') }}
                                        </option>

                                        <option {{ $brand->is_featured == 0 ? 'selected' : '' }} value="0">
                                            {{ __('Inactive') }}
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="status">{{ __('State') }}</label>
                                    <select name="status" class="form-control">
                                        <option {{ $brand->status == 0 ? 'selected' : '' }} value="1">
                                            {{ __('Active') }}
                                        </option>

                                        <option {{ $brand->status == 1 ? 'selected' : '' }} value="0">
                                            {{ __('Inactive') }}
                                        </option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
