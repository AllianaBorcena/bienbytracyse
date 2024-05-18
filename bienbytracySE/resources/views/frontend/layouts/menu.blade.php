<nav class="navbar navbar-expand-lg main_menu">
    <div class="container"><a class="navbar-brand" href="{{ route('home') }}"><img class="img-fluid" src="{{ asset('frontend/img/logo.png') }}" alt="Bien By Tracy"></a><button data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><i class="far fa-bars" style="font-family:'Font Awesome 5 Brands';"></i></button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}" style="color: #8c592b;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('product.index') }}">Order Cakes Here</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">contact Us</a></li>
            </ul>
            <ul class="d-flex flex-wrap menu_icon">
                <li><a class="menu_search" href="#"><i class="far fa-search"></i></a>
                    <div class="fp__search_form">
                        <form><span class="close_search"><i class="far fa-times"></i></span><input type="text" placeholder="Search . . ."><button type="submit">search</button></form>
                    </div>
                </li>
                <li><a class="cart_icon"><i class="fas fa-shopping-basket"></i><span>5</span></a></li>
                <li><i class="fas fa-user"></i></li>
                <li></li>
            </ul>
        </div>
    </div>
</nav>
<div class="fp__menu_cart_area">
    <div class="fp__menu_cart_boody">
        <div class="fp__menu_cart_header">
            <h5>total item (05)</h5><span class="close_cart"><i class="fal fa-times"></i></span>
        </div>
        <ul>
            <li>
                <div class="menu_cart_img"><img class="img-fluid w-100" src="assets/img/menu8.png" alt="menu"></div>
                <div class="menu_cart_text"><a class="title" href="#">Hyderabadi Biryani </a>
                    <p class="size">small</p><span class="extra">coca-cola</span><span class="extra">7up</span>
                    <p class="price">$99.00 <del>$110.00</del></p>
                </div><span class="del_icon"><i class="fal fa-times"></i></span>
            </li>
            <li>
                <div class="menu_cart_img"><img class="img-fluid w-100" src="assets/img/menu4.png" alt="menu"></div>
                <div class="menu_cart_text"><a class="title" href="#">Chicken Masalas</a>
                    <p class="size">medium</p><span class="extra">7up</span>
                    <p class="price">$70.00</p>
                </div><span class="del_icon"><i class="fal fa-times"></i></span>
            </li>
            <li>
                <div class="menu_cart_img"><img class="img-fluid w-100" src="assets/img/menu5.png" alt="menu"></div>
                <div class="menu_cart_text"><a class="title" href="#">Competently Supply Customized Initiatives</a>
                    <p class="size">large</p><span class="extra">coca-cola</span><span class="extra">7up</span>
                    <p class="price">$120.00 <del>$150.00</del></p>
                </div><span class="del_icon"><i class="fal fa-times"></i></span>
            </li>
            <li>
                <div class="menu_cart_img"><img class="img-fluid w-100" src="assets/img/menu6.png" alt="menu"></div>
                <div class="menu_cart_text"><a class="title" href="#">Hyderabadi Biryani</a>
                    <p class="size">small</p><span class="extra">7up</span>
                    <p class="price">$59.00</p>
                </div><span class="del_icon"><i class="fal fa-times"></i></span>
            </li>
            <li>
                <div class="menu_cart_img"><img class="img-fluid w-100" src="assets/img/menu1.png" alt="menu"></div>
                <div class="menu_cart_text"><a class="title" href="#">Competently Supply</a>
                    <p class="size">medium</p><span class="extra">coca-cola</span><span class="extra">7up</span>
                    <p class="price">$99.00 <del>$110.00</del></p>
                </div><span class="del_icon"><i class="fal fa-times"></i></span>
            </li>
        </ul>
        <p class="subtotal">sub total <span>$1220.00</span></p><a class="cart_view" href="cart_view.html"> view cart</a><a class="checkout" href="check_out.html">checkout</a>
    </div>
</div>
