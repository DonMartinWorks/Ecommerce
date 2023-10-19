@extends('roles.admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>{{ __('Sub Category') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">{{ __('Sub Category') }}</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ __('Sub Category') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.sub-category.store') }}" method="post">@csrf
                                <div class="form-group">
                                    <label for="serial">{{ __('State') }}</label>
                                    <select name="category" class="form-control">
                                        <option value="" selected disabled>{{ __('Select') }}</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input type="text" name="name" class="form-control" value="">
                                </div>

                                <div class="form-group">
                                    <label for="status">{{ __('Status') }}</label>
                                    <select name="status" class="form-control">
                                        <option value="1">{{ __('Active') }}</option>
                                        <option value="0">{{ __('Inactive') }}</option>
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
