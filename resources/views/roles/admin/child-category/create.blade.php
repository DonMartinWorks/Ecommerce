@extends('roles.admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>{{ __('Child Category') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">{{ __('Child Category') }}</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ __('Child Category') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.child-category.store') }}" method="post">@csrf
                                <div class="form-group">
                                    <label for="category">{{ __('Category') }}</label>
                                    <select name="category" class="form-control main-category">
                                        <option value="" selected disabled>{{ __('Select') }}</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="sub_category">{{ __('Child Category') }}</label>
                                    <select name="sub_category" class="form-control sub-category">
                                        <!-- -->
                                        <option value="" selected disabled>{{ __('Select') }}</option>
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

@push('scripts')
    <script>
        $(document).ready(function() {
            $('body').on('change', '.main-category', function(e) {
                let id = $(this).val();
                $.ajax({
                    method: 'GET',
                    url: "{{ route('admin.get-subcategories') }}",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        // console.log(data);

                        // $('.sub-category').html(`<option value="" selected disabled>{{ __('Select') }}</option>`)
                        $.each(data, function(i, item) {
                            // console.log(item.name);
                            // Trae las categorias para imprimirlas con el select con la clase SUB-CATEGORY
                            $('.sub-category').append(
                                `<option value="${item.id}">${item.name}</option>`)
                        })
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                })
            })
        })
    </script>
@endpush
