@extends('roles.admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>{{ __('Slider') }}</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ __('Edit Slider') }}</h4>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('admin.slider.update', $slider->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="banner">{{ __('Banner Preview') }}</label>
                                    <br />
                                    <img width="300px" src="{{ asset($slider->banner) }}" alt="">
                                </div>

                                <div class="form-group">
                                    <label for="banner">{{ __('Banner') }}</label>
                                    <input type="file" name="banner" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="type">{{ __('Type') }}</label>
                                    <input type="text" name="type" class="form-control" value="{{ $slider->type }}">
                                </div>

                                <div class="form-group">
                                    <label for="title">{{ __('Title') }}</label>
                                    <input type="text" name="title" class="form-control" value="{{ $slider->title }}">
                                </div>

                                <div class="form-group">
                                    <label for="starting_price">{{ __('Starting Price') }}</label>
                                    <input type="text" name="starting_price" class="form-control"
                                        value="{{ $slider->starting_price }}">
                                </div>

                                <div class="form-group">
                                    <label for="button">{{ __('Button Url') }}</label>
                                    <input type="text" name="btn_url" class="form-control"
                                        value="{{ $slider->btn_url }}">
                                </div>

                                <div class="form-group">
                                    <label for="serial">{{ __('Serial') }}</label>
                                    <input type="text" name="serial" class="form-control"
                                        value="{{ $slider->serial }}">
                                </div>

                                <div class="form-group">
                                    <label for="serial">{{ __('State') }}</label>
                                    <select name="status" class="form-control">
                                        <option {{ $slider->status == 1 ? __('selected') : '' }} value="1">
                                            {{ __('Active') }}</option>
                                        <option {{ $slider->status == 0 ? __('selected') : '' }} value="0">
                                            {{ __('Inactive') }}</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">{{ __('Edit') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
