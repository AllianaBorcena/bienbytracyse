<section class="fp__banner" style="background: url(assets/img/pexels-photo-1831234.jpeg);">
    <div class="fp__banner_overlay">
        <div class="row banner_slider">
            @foreach ($sliders as $slider)
                <div class="col-12">
                    <div class="fp__banner_slider">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 col-lg-5 col-xl-5">
                                    <div class="fp__banner_img wow fadeInLeft" data-wow-duration="1s"
                                        style="border-radius: 5%;">
                                        <div class="img" style="border-radius: 5%;"><img class="img-fluid w-100"
                                                alt="food item" src="{{ asset($slider->image) }}"
                                                style="border-radius: 5%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-6 col-xl-5">
                                    <div class="fp__banner_text wow fadeInRight" data-wow-duration="1s">
                                        <h1>{!! $slider->title !!}</h1>
                                        <h3>{!! $slider->sub_title !!}</h3>
                                        <p style="color: rgb(0,0,0);">{!! $slider->short_description !!}</p>
                                        <ul class="d-flex flex-wrap">
                                            @if ($slider->button_link)
                                                <li><a class="common_btn" href="{{ $slider->button_link }}">Order Now</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
