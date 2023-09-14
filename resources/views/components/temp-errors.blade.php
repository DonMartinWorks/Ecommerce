@if ($errors->any())
    @foreach ($errors->all() as $error)
        <span class="alert alert-danger">
            {{ $error }}
        </span>
    @endforeach
@endif
