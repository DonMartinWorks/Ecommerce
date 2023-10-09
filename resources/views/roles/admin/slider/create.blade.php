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
                            <h4>{{ __('Create Slider') }}</h4>
                        </div>

                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="banner">{{ __('Banner') }}</label>
                                    <input type="file" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="type">{{ __('Type') }}</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="title">{{ __('Title') }}</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="price">{{ __('Starting Price') }}</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="button">{{ __('Button Url') }}</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="serial">{{ __('Serial') }}</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="serial">{{ __('State') }}</label>
                                    <select name="status" class="form-control">
                                        <option value="">{{ __('Active') }}</option>
                                        <option value="">{{ __('Inactive') }}</option>
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
