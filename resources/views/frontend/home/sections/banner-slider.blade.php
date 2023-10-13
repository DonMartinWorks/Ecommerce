<section id="wsus__banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="wsus__banner_content">
                    <div class="row banner_slider">
                        @forelse ($sliders as $sli)
                            <div class="col-xl-12">
                                <div class="wsus__single_slider" style="background: url({{ $sli->banner }});">
                                    <div class="wsus__single_slider_text">
                                        <h3>{!! $sli->type !!}</h3>
                                        <h1>{!! $sli->title !!}</h1>
                                        <h6>{{ __('start at') }} &#36;{{ $sli->starting_price }}</h6>
                                        <a class="common_btn" href="{{ $sli->btn_url }}">{{ __('See More') }}</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>{{ __('There is no sliders') }}</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
