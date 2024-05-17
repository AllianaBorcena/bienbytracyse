@extends('frontend.layouts.master')

@section('content')
<section class="fp__breadcrumb" style="background:url(assets/img/counter_bg.jpg);">
    <div class="fp__breadcrumb_overlay" style="width:1376px;">
        <div class="container">
            <div class="fp__breadcrumb_text">
                <h1>search result</h1>
                <ul></ul>
            </div>
        </div>
    </div>
</section>
<section class="fp__search_menu mt_120 xs_mt_90 mb_100 xs_mb_70">
    <div class="container">
        <form class="fp__search_menu_form">
            <div class="row">
                <div class="col-md-5 col-xl-6"><input type="text" placeholder="Search..."></div>
                <div class="col-md-4 col-xl-4"><select id="select_js3">
                        <option value="">Select Category</option>
                        <option value="">Mother's Day Special</option>
                        <option value="">Custom Cakes</option>
                        <option value="">Rush Cakes</option>
                    </select></div>
                <div class="col-md-3 col-xl-2"><button type="submit" class="common_btn">search</button></div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 col-xl-3 burger pizza wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img"><img class="img-fluid w-100" src="assets/img/menu2_img_1.jpg" alt="menu"><a class="category" href="#" style="color: rgb(0,0,0);font-family: 'Open Sans', sans-serif;font-weight: bold;">Biryani</a></div>
                        <div class="fp__menu_item_text">
                            <p class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><span>10</span></p><a class="title" href="menu_details.html" style="color: rgb(0,0,0);">Hyderabadi biryani</a>
                            <h5 class="price">₱70.00</h5>
                            <ul class="d-flex flex-wrap" style="margin-left: 56px;">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-heart"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 chicken dresserts wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img"><img class="img-fluid w-100" src="assets/img/menu2_img_2.jpg" alt="menu"><a class="category" href="#" style="color: rgb(0,0,0);font-family: 'Open Sans', sans-serif;font-weight: bold;">chicken</a></div>
                        <div class="fp__menu_item_text">
                            <p class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><span>145</span></p><a class="title" href="menu_details.html" style="color: rgb(0,0,0);">chicken Masala</a>
                            <h5 class="price">₱80.00 <del>90.00</del></h5>
                            <ul class="d-flex flex-wrap" style="margin-left: 56px;">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-heart"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 chicken dresserts wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img"><img class="img-fluid w-100" src="assets/img/menu2_img_3.jpg" alt="menu"><a class="category" href="#" style="color: rgb(10,8,8);font-family: 'Open Sans', sans-serif;font-weight: bold;">grill</a></div>
                        <div class="fp__menu_item_text">
                            <p class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><span>54</span></p><a class="title" href="menu_details.html" style="color: rgb(0,0,0);">daria shevtsova</a>
                            <ul class="d-flex flex-wrap" style="margin-left: 56px;">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-heart"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-eye"></i></a></li>
                            </ul>
                            <h5 class="price">₱99.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 burger pizza wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img"><img class="img-fluid w-100" src="assets/img/menu2_img_4.jpg" alt="menu"><a class="category" href="#" style="color: rgb(0,0,0);font-family: 'Open Sans', sans-serif;font-weight: bold;">chicken</a></div>
                        <div class="fp__menu_item_text">
                            <p class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><span>74</span></p><a class="title" href="menu_details.html" style="color: rgb(0,0,0);">chicken Masala</a>
                            <ul class="d-flex flex-wrap" style="margin-left: 56px;">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-heart"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-eye"></i></a></li>
                            </ul>
                            <h5 class="price">₱80.00 <del>90.00</del></h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 chicken dresserts wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img"><img class="img-fluid w-100" src="assets/img/menu2_img_5.jpg" alt="menu"><a class="category" href="#" style="color: rgb(0,0,0);font-family: 'Open Sans', sans-serif;font-weight: bold;">chicken</a></div>
                        <div class="fp__menu_item_text">
                            <p class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><span>120</span></p><a class="title" href="menu_details.html" style="color: rgb(0,0,0);">chicken Masala</a>
                            <ul class="d-flex flex-wrap" style="margin-left: 56px;">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-heart"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-eye"></i></a></li>
                            </ul>
                            <h5 class="price">₱80.00 <del>90.00</del></h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 burger pizza wow fadeInUp" data-wow-duration="1s">
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
                <div class="col-sm-6 col-lg-4 col-xl-3 chicken dresserts wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img"><img class="img-fluid w-100" src="assets/img/menu2_img_7.jpg" alt="menu"><a class="category" href="#" style="color: rgb(14,13,13);font-family: 'Open Sans', sans-serif;font-weight: bold;">grill</a></div>
                        <div class="fp__menu_item_text">
                            <p class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><span>25</span></p><a class="title" href="menu_details.html" style="color: rgb(51,51,51);">daria shevtsova</a>
                            <ul class="d-flex flex-wrap" style="margin-left: 56px;">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-heart"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-eye"></i></a></li>
                            </ul>
                            <h5 class="price">₱99.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-3 burger pizza wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__menu_item">
                        <div class="fp__menu_item_img"><img class="img-fluid w-100" src="assets/img/menu2_img_8.jpg" alt="menu"><a class="category" href="#" style="color: rgb(4,4,4);font-family: 'Open Sans', sans-serif;font-weight: bold;">chicken</a></div>
                        <div class="fp__menu_item_text">
                            <p class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><span>324</span></p><a class="title" href="menu_details.html" style="color: rgb(0,0,0);">chicken Masala</a>
                            <ul class="d-flex flex-wrap" style="margin-left: 56px;">
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-shopping-basket"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-heart"></i></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#cartModal" style="background: rgb(150,103,49);"><i class="fas fa-eye"></i></a></li>
                            </ul>
                            <h5 class="price">₱80.00 <del>90.00</del></h5>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="fp__pagination mt_35">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-long-arrow-alt-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
