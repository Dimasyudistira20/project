<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Ninico -  Minimal eCommerce HTML Template</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/img/logo/favicon.png')}}">

   <!-- CSS here -->
   <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/assets/css/swiper-bundle.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome.min.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/assets/css/jquery-ui.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/assets/css/spacing.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
</head>

   <body>


   <!-- preloader -->
   <div id="preloader">
      <div class="preloader">
            <span></span>
            <span></span>
      </div>
   </div>
   <!-- preloader end  -->

   <!-- Scroll-top -->
   <button class="scroll-top scroll-to-target" data-target="html">
      <i class="fas fa-angle-up"></i>
   </button>
   <!-- Scroll-top-end-->

   <!-- header-area-start -->
   @include('include.detail.header')

   <!-- header-area-end -->

   <!-- header-xl-sticky-area -->
   <div id="header-sticky" class="logo-area tp-sticky-one mainmenu-5">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-2 col-lg-3">
               <div class="logo">
                  <a href="index.html"><img src="{{asset('frontend/assets/img/logo/logo.png')}}" alt="logo"></a>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6">
               <div class="main-menu">
                  <ul>
                     <li class="has-dropdown">
                        <a href="{{ route('layouts.frontend') }}">Beranda</a>
                     </li>
                     <li class="has-dropdown">
                        <a href="shop.html">Kategori</a>
                        <ul class="submenu">
                           <li><a href="shop.html">Tanaman</a></li>
                           <li><a href="shop-2.html">Pupuk</a></li>
                           <li><a href="shop-details.html">Bibit</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-xl-4 col-lg-9">
               <div class="header-meta-info d-flex align-items-center justify-content-end">
                  <div class="header-meta__social  d-flex align-items-center"> 
                     <button class="header-cart p-relative tp-cart-toggle">
                        <i class="fal fa-shopping-cart"></i>
                     </button>
                     <a href="sign-in.html"><i class="fal fa-user"></i></a>
                     <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- header-xl-sticky-end -->

   <!-- header-md-lg-area -->
   <div id="header-tab-sticky" class="tp-md-lg-header d-none d-md-block d-xl-none pt-30 pb-30">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 d-flex align-items-center">
               <div class="header-canvas flex-auto">
                  <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
               </div>
               <div class="logo">
                  <a href="index.html"><img src="{{asset('frontend/assets/img/logo/logo.png')}}" alt="logo"></a>
               </div>
            </div>
            <div class="col-lg-9 col-md-8">
               <div class="header-meta-info d-flex align-items-center justify-content-between">
                  <div class="header-search-bar">
                     <form action="#">
                        <div class="search-info p-relative">
                           <button class="header-search-icon"><i class="fal fa-search"></i></button>
                           <input type="text" placeholder="Search products...">
                        </div>
                     </form>
                  </div>
                  <div class="header-meta__social d-flex align-items-center ml-25">
                     <button class="header-cart p-relative tp-cart-toggle">
                        <i class="fal fa-shopping-cart"></i>
                        <span>2</span>
                     </button>
                     <a href="sign-in.html"><i class="fal fa-user"></i></a>
                     <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="header-mob-sticky" class="tp-md-lg-header d-md-none pt-20 pb-20">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-3 d-flex align-items-center">
               <div class="header-canvas flex-auto">
                  <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
               </div>
            </div>
            <div class="col-6">
               <div class="logo text-center">
                  <a href="index.html"><img src="{{asset('frontend/assets/img/logo/logo.png')}}" alt="logo"></a>
               </div>
            </div>
            <div class="col-3">
               <div class="header-meta-info d-flex align-items-center justify-content-end ml-25">
                  <div class="header-meta m-0 d-flex align-items-center">
                     <div class="header-meta__social d-flex align-items-center"> 
                        <button class="header-cart p-relative tp-cart-toggle">
                           <i class="fal fa-shopping-cart"></i>
                           <span>2</span>
                        </button>
                        <a href="sign-in.html"><i class="fal fa-user"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- header-md-lg-area -->

   <!-- sidebar-menu-area -->
   <div class="tpsideinfo">
      <button class="tpsideinfo__close">Close<i class="fal fa-times ml-10"></i></button>
      <div class="tpsideinfo__search text-center pt-35">
         <span class="tpsideinfo__search-title mb-20">What Are You Looking For?</span>
         <form action="#">
            <input type="text" placeholder="Search Products...">
            <button><i class="fal fa-search"></i></button>
         </form>
      </div>
      <div class="tpsideinfo__nabtab">
         <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
               <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Menu</button>
            </li>
            <li class="nav-item" role="presentation">
               <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Categories</button>
            </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
               <div class="mobile-menu"></div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
               <div class="tpsidebar-categories">
                  <ul>
                     <li><a href="shop.html">Furniture</a></li>
                     <li><a href="shop.html">Wooden</a></li>
                     <li><a href="shop.html">Lifestyle</a></li>
                     <li><a href="shop-2.html">Shopping</a></li>
                     <li><a href="track.html">Track Product</a></li>
                  </ul>
               </div>
            </div>
            </div>
      </div>
      <div class="tpsideinfo__account-link">							
         <a href="sign-in.html"><i class="fal fa-user"></i> Login / Register</a>
      </div>
      <div class="tpsideinfo__wishlist-link">
         <a href="wishlist.html" target="_parent"><i class="fal fa-heart"></i> Wishlist</a>
      </div>
   </div> 
   <div class="body-overlay"></div>
   <!-- sidebar-menu-area-end -->

   <!-- header-cart-start -->
   <div class="tpcartinfo tp-cart-info-area p-relative">
      <button class="tpcart__close"><i class="fal fa-times"></i></button>
      <div class="tpcart">
         <h4 class="tpcart__title">Your Cart</h4>
         <div class="tpcart__product">
            <!-- <div class="tpcart__product-list">
               <ul>
                  <li>
                     <div class="tpcart__item">
                        <div class="tpcart__img">
                           <img src="{{asset('frontend/assets/img/banner/banner-2-03.jpg')}}" alt="">
                           <div class="tpcart__del">
                              <a href="#"><i class="far fa-times-circle"></i></a>
                           </div>
                        </div>
                        <div class="tpcart__content">
                           <span class="tpcart__content-title"><a href="shop-details.html">Evo Lightweight Granite Shirt</a>
                           </span>
                           <div class="tpcart__cart-price">
                              <span class="quantity">1 x</span>
                              <span class="new-price">$138.00</span>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li> -->
                     <!-- <div class="tpcart__item">
                        <div class="tpcart__img"> -->
                           <!-- <img src="{{asset('frontend/assets/img/banner/banner-2-04.jpg')}}" alt=""> -->
                           <!-- <div class="tpcart__del">
                              <a href="#"><i class="far fa-times-circle"></i></a>
                           </div>
                        </div> -->
                        <!-- <div class="tpcart__content">
                           <span class="tpcart__content-title"><a href="shop-details.html">Purab Enormous Miranda Bottle</a>
                           </span>
                           <div class="tpcart__cart-price">
                              <span class="quantity">1 x</span>
                              <span class="new-price">$162.8</span>
                           </div>
                        </div> -->
                     <!-- </div> -->
                  <!-- </li>
               </ul> -->
            </div>
            <div class="tpcart__checkout">
               <div class="tpcart__total-price d-flex justify-content-between align-items-center">
                  <span> Subtotal:</span>
                  <span class="heilight-price"> </span>
               </div>
               <div class="tpcart__checkout-btn">
                  <a class="tpcart-btn mb-10" href="cart.html">View Cart</a>
                  <a class="tpcheck-btn" href="checkout.html">Checkout</a>
               </div>
            </div>
         </div>
         <div class="tpcart__free-shipping text-center">
            <span>Free shipping for orders <b>under 10km</b></span>
         </div>
      </div>
   </div>
   <div class="cartbody-overlay"></div>
   <!-- header-cart-end -->

   <!-- main-area-start -->
   <main>

      <!-- breadcrumb-area -->
      <!-- breadcrumb-area-end -->
          
      <!-- product-area-start -->
      <section class="product-area pt-80 pb-50">
         <div class="container">
            <div class="row">
               <div class="col-lg-5 col-md-12">
                  <div class="tpproduct-details__list-img">
                     <div class="tpproduct-details__list-img-item">
                     <img src="{{ asset('/storage/barangs/' . $barang->image) }}" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-lg-5 col-md-7">
                  <div class="tpproduct-details__content tpproduct-details__sticky">
                     <div class="tpproduct-details__title-area d-flex align-items-center flex-wrap mb-5">
                        <h3 class="tpproduct-details__title">{{$barang->nama_barang}}</h3>
                     </div>
                     <div class="tpproduct-details__price mb-30">
                        <span>Rp.{{$barang->harga}}</span>
                     </div>
                     <div class="tpproduct-details__pera">
                        <p>Bunga wangi wangi</p>
                     </div>
                     <div class="tpproduct-details__count d-flex align-items-center flex-wrap mb-25">
                        <div class="tpproduct-details__quantity">
                           <span class="cart-minus"><i class="far fa-minus"></i></span>
                           <input class="tp-cart-input" type="text" value="1">
                           <span class="cart-plus"><i class="far fa-plus"></i></span>
                        </div>
                        <div class="tpproduct-details__cart ml-20">
                           <button><i class="fal fa-shopping-cart"></i> Add To Cart</button>
                        </div>
                        <div class="tpproduct-details__wishlist ml-20">
                           <button><i class="fal fa-heart"></i></button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- product-area-end -->

      <!-- product-details-area-start -->
      <!-- product-details-area-end -->

      <!-- related-product-area-start -->
      <!-- related-product-area-end -->

      </main>
      <!-- main-area-end -->

   <!-- footer-area-start -->
  @include('include.detail.footer')
   <!-- footer-area-end -->



      <!-- JS here -->
      <script src="{{asset('frontend/assets/js/jquery.js')}}"></script>
      <script src="{{asset('frontend/assets/js/waypoints.js')}}"></script>
      <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('frontend/assets/js/swiper-bundle.js')}}"></script>
      <script src="{{asset('frontend/assets/js/slick.js')}}"></script>
      <script src="{{asset('frontend/assets/js/magnific-popup.js')}}"></script>
      <script src="{{asset('frontend/assets/js/nice-select.js')}}"></script>
      <script src="{{asset('frontend/assets/js/counterup.js')}}"></script>
      <script src="{{asset('frontend/assets/js/wow.js')}}"></script>
      <script src="{{asset('frontend/assets/js/isotope-pkgd.js')}}"></script>
      <script src="{{asset('frontend/assets/js/imagesloaded-pkgd.js')}}"></script>
      <script src="{{asset('frontend/assets/js/countdown.js')}}"></script>
      <script src="{{asset('frontend/assets/js/ajax-form.js')}}"></script>
      <script src="{{asset('frontend/assets/js/jquery-ui.js')}}"></script>
      <script src="{{asset('frontend/assets/js/meanmenu.js')}}"></script>
      <script src="{{asset('frontend/assets/js/main.js')}}"></script>
   </body>
</html>