<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/">{{ config('app.name', 'Laravel') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">+</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fas fa-fire"></i><span>{{ __('Dashboard') }}</span></a>
                <ul class="dropdown-menu">
                    <li class=active><a class="nav-link"
                            href="{{ route('admin.dashboard') }}">{{ __('General Admin Dashboard') }}</a></li>
                    <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-columns"></i>
                    <span>{{ __('Manage Website') }}</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.slider.index') }}"><i class="fas fa-sliders-h"></i> {{ __('Slider') }}</a></li>
                </ul>
            </li>

            {{-- <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank
                        Page</span></a></li> --}}
        </ul>
    </aside>
</div>
