@extends('frontend.layouts.master')

@section('content')
<section class="fp__breadcrumb" style="background: url(images/counter_bg.jpg);">
    <div class="fp__breadcrumb_overlay">
        <div class="container">
            <div class="fp__breadcrumb_text">
                <h1>menu Details</h1>
                <ul>
                    <li><a href="{{ url('/') }}" style="color: black;" >home -> </a></li>
                    <li><a href="javascript:;" style="color: black;">menu Details</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="fp__menu_details mt_115 xs_mt_85 mb_95 xs_mb_65">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-9 wow fadeInUp" data-wow-duration="1s">
                <div class="exzoom hidden" id="exzoom">
                    <div class="exzoom_img_box fp__menu_details_images">
                        <ul class='exzoom_img_ul'>
                            <li><img class="zoom ing-fluid w-100" src="{{ asset($product->thumb_img) }}"
                                alt="product"></li>

                            @foreach ($product->productImages as $image)
                                <li><img class="zoom ing-fluid w-100" src="{{ asset($image->image) }}" alt="product">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="exzoom_nav"></div>
                    <p class="exzoom_btn">
                        <a href="javascript:void(0);" class="exzoom_prev_btn"> <i class="far fa-chevron-left"></i>
                        </a>
                        <a href="javascript:void(0);" class="exzoom_next_btn"> <i class="far fa-chevron-right"></i>
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-lg-7 wow fadeInUp" data-wow-duration="1s">
                <div class="fp__menu_details_text">
                    <h2>{!! $product->name !!}</h2>
                    <p class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <i class="far fa-star"></i>
                        <span>(201)</span>
                    </p>
                    <h3 class="price">₱ {{ $product -> price }}
                        <del></del> </h3>
                    <p class="short_description">{!! $product -> short_description !!}</p>

                    <div class="details_size">
                        <h5>Select Icing</h5>

                        @foreach ($product->productIcing as $productIcing)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="icing-{{
                                $productIcing }}" checked style="appearance: none; width: 20px; height: 20px; border: 2px solid #8c582a; border-radius: 50%; outline: none; margin-right: 5px; background-color: #8c582a;">
                            <label class="form-check-label" for="icing-{{ $productIcing }}">
                                {{ $productIcing -> name }} <span> +₱ {{ $productIcing -> price }}</span>
                            </label>
                        </div>


                        @endforeach


                        </div>

                    <div class="details_extra_item">
                        <h5>select option <span>(optional)</span></h5>
                        @foreach ($product->productOption as $productOption)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="option-{{
                                $productOption->id }}" style="background-color: #8c582a;">
                            <label class="form-check-label" for="option-{{
                                $productOption->id }}">
                                {{ $productOption->name }} <span>+₱ {{ $productOption->price }}</span>
                            </label>
                        </div>
                    @endforeach


                    </div>

                    <div class="details_quentity">
                        <h5>select Quantity</h5>
                        <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                            <div class="quentity_btn">
                                <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                <input type="text" placeholder="1">
                                <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                            </div>
                            <h3>$320.00</h3>
                        </div>
                    </div>
                    <ul class="details_button_area d-flex flex-wrap">
                        <li><a class="common_btn" href="#">add to cart</a></li>
                        <li><a class="wishlist" href="#"><i class="far fa-heart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 wow fadeInUp" data-wow-duration="1s">
                <div class="fp__menu_description_area mt_100 xs_mt_70">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true" style="background-color: rgb(150,103,49); color: #000000;">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false" style="background-color: rgb(150,103,49); color: #110707;">Reviews</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="menu_det_description">
                                <p>Ipsum dolor, sit amet consectetur adipisicing elit. Doloribus consectetur
                                    ullam in? Beatae, dolorum ad ea deleniti ratione voluptatum similique omnis
                                    voluptas tempora optio soluta vero veritatis reiciendis blanditiis architecto.
                                    Debitis nesciunt inventore voluptate tempora ea incidunt iste, corporis, quo
                                    cumque facere doloribus possimus nostrum sed magni quasi, assumenda autem!
                                    Repudiandae nihil magnam provident illo alias vero odit repellendus, ipsa nemo
                                    itaque. Aperiam fuga, magnam quia illum minima blanditiis tempore. vero
                                    veritatis reiciendis blanditiis architecto. Debitis nesciunt inventore voluptate
                                    tempora ea incidunt iste, corporis, quo cumque facere doloribus possimus nostrum
                                    sed magni quasi</p>
                                <ul>
                                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus
                                        consectetur ullam in</li>
                                    <li>Dolor sit amet consectetur adipisicing elit. Earum itaque nesciunt.</li>
                                    <li>Corporis, quo cumque facere doloribus possimus nostrum sed magni quasi.</li>
                                    <li>Reiciendis blanditiis architecto. Debitis nesciunt inventore voluptate
                                        tempora ea.</li>
                                    <li>Incidunt iste, corporis, quo cumque facere doloribus possimus
                                        nostrum sed magni quasi</li>
                                    <li>Architecto. Debitis nesciunt inventore voluptate tempora ea incidunt iste
                                        corporis.</li>
                                    <li>Earum itaque nesciunt dolor laudantium placeat sed velit aspernatur.</li>
                                    <li>Laudantium placeat sed velit aspernatur, nobis quos quibusdam distinctio
                                        voluptatum.</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum itaque nesciunt
                                    dolor laudantium placeat sed velit aspernatur, nobis quos quibusdam distinctio
                                    voluptatum officia vel sapiente enim, reprehenderit impedit beatae molestias
                                    dolorum. A laborum consectetur sed quis exercitationem optio consequatur, unde
                                    neque est odit, pariatur quae incidunt quasi dolorem nihil aliquid ut veritatis
                                    porro eaque cupiditate voluptatem vel ad! Asperiores, praesentium. sit amet
                                    consectetur adipisicing elit. Doloribus consectetur ullam in? Beatae, dolorum ad
                                    ea deleniti ratione voluptatum similique omnis voluptas tempora optio soluta</p>

                                <ul>
                                    <li>Reiciendis blanditiis architecto. Debitis nesciunt inventore voluptate
                                        tempora ea.</li>
                                    <li>Incidunt iste, corporis, quo cumque facere doloribus possimus
                                        nostrum sed magni quasi</li>
                                    <li>Architecto. Debitis nesciunt inventore voluptate tempora ea incidunt iste
                                        corporis.</li>
                                    <li>Earum itaque nesciunt dolor laudantium placeat sed velit aspernatur.</li>
                                    <li>Laudantium placeat sed velit aspernatur, nobis quos quibusdam distinctio
                                        voluptatum.</li>
                                </ul>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus consectetur
                                    ullam in? Beatae, dolorum ad ea deleniti ratione voluptatum similique omnis
                                    voluptas tempora optio soluta vero veritatis reiciendis blanditiis architecto.
                                    Debitis nesciunt inventore voluptate tempora ea incidunt iste, corporis, quo
                                    cumque facere doloribus possimus nostrum sed magni quasi, assumenda autem!
                                    Repudiandae nihil magnam provident illo alias vero odit repellendus, ipsa nemo
                                    itaque. Aperiam fuga, magnam quia illum minima blanditiis tempore.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="fp__review_area">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h4>04 reviews</h4>
                                        <div class="fp__comment pt-0 mt_20">
                                            <div class="fp__single_comment m-0 border-0">
                                                <img src="images/comment_img_1.png" alt="review" class="img-fluid">
                                                <div class="fp__single_comm_text">
                                                    <h3>Michel Holder <span>29 oct 2022 </span></h3>
                                                    <span class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fad fa-star-half-alt"></i>
                                                        <i class="fal fa-star"></i>
                                                        <b>(120)</b>
                                                    </span>
                                                    <p>Sure there isn't anything embarrassing hiidden in the
                                                        middles of text. All erators on the Internet
                                                        tend to repeat predefined chunks</p>
                                                </div>
                                            </div>
                                            <div class="fp__single_comment">
                                                <img src="images/chef_1.jpg" alt="review" class="img-fluid">
                                                <div class="fp__single_comm_text">
                                                    <h3>salina khan <span>29 oct 2022 </span></h3>
                                                    <span class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fad fa-star-half-alt"></i>
                                                        <i class="fal fa-star"></i>
                                                        <b>(120)</b>
                                                    </span>
                                                    <p>Sure there isn't anything embarrassing hiidden in the
                                                        middles of text. All erators on the Internet
                                                        tend to repeat predefined chunks</p>
                                                </div>
                                            </div>
                                            <div class="fp__single_comment">
                                                <img src="images/comment_img_2.png" alt="review" class="img-fluid">
                                                <div class="fp__single_comm_text">
                                                    <h3>Mouna Sthesia <span>29 oct 2022 </span></h3>
                                                    <span class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fad fa-star-half-alt"></i>
                                                        <i class="fal fa-star"></i>
                                                        <b>(120)</b>
                                                    </span>
                                                    <p>Sure there isn't anything embarrassing hiidden in the
                                                        middles of text. All erators on the Internet
                                                        tend to repeat predefined chunks</p>
                                                </div>
                                            </div>
                                            <div class="fp__single_comment">
                                                <img src="images/chef_3.jpg" alt="review" class="img-fluid">
                                                <div class="fp__single_comm_text">
                                                    <h3>marjan janifar <span>29 oct 2022 </span></h3>
                                                    <span class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fad fa-star-half-alt"></i>
                                                        <i class="fal fa-star"></i>
                                                        <b>(120)</b>
                                                    </span>
                                                    <p>Sure there isn't anything embarrassing hiidden in the
                                                        middles of text. All erators on the Internet
                                                        tend to repeat predefined chunks</p>
                                                </div>
                                            </div>
                                            <a href="#" class="load_more">load More</a>
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fp__post_review">
                                            <h4>write a Review</h4>
                                            <form>
                                                <p class="rating">
                                                    <span>select your rating : </span>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </p>
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <input type="text" placeholder="Name">
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <input type="email" placeholder="Email">
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <textarea rows="3"
                                                            placeholder="Write your review"></textarea>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="common_btn" type="submit">submit
                                                            review</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fp__related_menu mt_90 xs_mt_60">
            <h2>related item</h2>
            <div class="row related_product_slider">
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img"><img class="img-fluid w-100" src="assets/img/menu2_img_6.jpg" alt="menu"><a class="category" href="#" style="color: rgb(0,0,0);font-weight: bold;font-family: 'Open Sans', sans-serif;">Biryani</a></div>
                        <div class="fp__menu_item_text">
                            <p class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><span>514</span></p><a class="title" href="menu_details.html" style="color: rgb(0,0,0);">Hyderabadi biryani</a>
                            <ul class="d-flex flex-wrap" style="margin-left: 56px;">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-heart"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-eye"></i></a></li>
                            </ul>
                            <h5 class="price">₱70.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img"><img class="img-fluid w-100" src="assets/img/menu2_img_6.jpg" alt="menu"><a class="category" href="#" style="color: rgb(0,0,0);font-weight: bold;font-family: 'Open Sans', sans-serif;">Biryani</a></div>
                        <div class="fp__menu_item_text">
                            <p class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><span>514</span></p><a class="title" href="menu_details.html" style="color: rgb(0,0,0);">Hyderabadi biryani</a>
                            <ul class="d-flex flex-wrap" style="margin-left: 56px;">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-heart"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-eye"></i></a></li>
                            </ul>
                            <h5 class="price">₱70.00</h5>
                        </div>
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="fp__menu_item">
                            <div class="fp__menu_item_img"><img class="img-fluid w-100" src="assets/img/menu2_img_6.jpg" alt="menu"><a class="category" href="#" style="color: rgb(0,0,0);font-weight: bold;font-family: 'Open Sans', sans-serif;">Biryani</a></div>
                            <div class="fp__menu_item_text">
                                <p class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><span>514</span></p><a class="title" href="menu_details.html" style="color: rgb(0,0,0);">Hyderabadi biryani</a>
                                <ul class="d-flex flex-wrap" style="margin-left: 56px;">
                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-shopping-basket"></i></a></li>
                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-heart"></i></a></li>
                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <h5 class="price">₱70.00</h5>
                            </div>
                            </div>
                        </div>
                        <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                            <div class="fp__menu_item">
                                <div class="fp__menu_item_img"><img class="img-fluid w-100" src="assets/img/menu2_img_6.jpg" alt="menu"><a class="category" href="#" style="color: rgb(0,0,0);font-weight: bold;font-family: 'Open Sans', sans-serif;">Biryani</a></div>
                                <div class="fp__menu_item_text">
                                    <p class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><span>514</span></p><a class="title" href="menu_details.html" style="color: rgb(0,0,0);">Hyderabadi biryani</a>
                                    <ul class="d-flex flex-wrap" style="margin-left: 56px;">
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-shopping-basket"></i></a></li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-heart"></i></a></li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-eye"></i></a></li>
                                    </ul>
                                    <h5 class="price">₱70.00</h5>
                                </div>
                                </div>
                            </div>
                            <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                                <div class="fp__menu_item">
                                    <div class="fp__menu_item_img"><img class="img-fluid w-100" src="assets/img/menu2_img_6.jpg" alt="menu"><a class="category" href="#" style="color: rgb(0,0,0);font-weight: bold;font-family: 'Open Sans', sans-serif;">Biryani</a></div>
                                    <div class="fp__menu_item_text">
                                        <p class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><span>514</span></p><a class="title" href="menu_details.html" style="color: rgb(0,0,0);">Hyderabadi biryani</a>
                                        <ul class="d-flex flex-wrap" style="margin-left: 56px;">
                                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-shopping-basket"></i></a></li>
                                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-heart"></i></a></li>
                                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-eye"></i></a></li>
                                        </ul>
                                        <h5 class="price">₱70.00</h5>
                                    </div>
                                    </div>
                                </div>
            </div>
        </div>
    </div>
</section>


<div class="fp__cart_popup">
    <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fal fa-times"></i></button>
                    <div class="fp__cart_popup_img">
                        <img src="images/menu1.png" alt="menu" class="img-fluid w-100">
                    </div>
                    <div class="fp__cart_popup_text">
                        <a href="#" class="title">Maxican Pizza Test Better</a>
                        <p class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span>(201)</span>
                        </p>
                        <h4 class="price">$320.00 <del>$350.00</del> </h4>

                        <div class="details_size">
                            <h5>select size</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="large01"
                                    checked>
                                <label class="form-check-label" for="large01">
                                    large <span>+ $350</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="medium01">
                                <label class="form-check-label" for="medium01">
                                    medium <span>+ $250</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="small01">
                                <label class="form-check-label" for="small01">
                                    small <span>+ $150</span>
                                </label>
                            </div>
                        </div>

                        <div class="details_extra_item">
                            <h5>select option <span>(optional)</span></h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="coca-cola01">
                                <label class="form-check-label" for="coca-cola01">
                                    coca-cola <span>+ $10</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="7up01">
                                <label class="form-check-label" for="7up01">
                                    7up <span>+ $15</span>
                                </label>
                            </div>
                        </div>

                        <div class="details_quentity">
                            <h5>select quentity</h5>
                            <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                                <div class="quentity_btn">
                                    <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                    <input type="text" placeholder="1">
                                    <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                </div>
                                <h3>$320.00</h3>
                            </div>
                        </div>
                        <ul class="details_button_area d-flex flex-wrap">
                            <li><a class="common_btn" href="#">add to cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
