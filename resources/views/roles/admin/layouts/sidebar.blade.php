<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">{{ config('app.name', 'Laravel') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">+</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">{{ __('Dashboard') }}</li>
            <li class="dropdown active">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>{{ __('Dashboard') }}</span></a>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-tags"></i>
                    <span>{{ __('Manage Categories') }}</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.category.index') }}"><i class="fas fa-tag"></i>
                            {{ __('Category') }}</a></li>
                    <li><a class="nav-link" href="{{ route('admin.sub-category.index') }}"><i class="fas fa-tags"></i>
                            {{ __('Sub Category') }}</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>{{ __('Manage Website') }}</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.slider.index') }}"><i class="fas fa-sliders-h"></i>
                            {{ __('Slider') }}</a></li>
                </ul>
            </li>

            {{-- <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank
                        Page</span></a></li> --}}
        </ul>
    </aside>
</div>
