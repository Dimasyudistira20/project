<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Green Shop</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logo/favicon.png')}}">

   <!-- CSS here -->
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.min.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/spacing.css')}}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css')}}">
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
   @include('include.frontend.header')
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
                     <li class="">
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
                  <a href="index.html"><img src="{{ asset('frontend/assets/img/logo/logo.png')}}" alt="logo"></a>
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

   <!-- sidebar-menu-area-end -->

   <!-- header-cart-start -->

   <div class="tpcartinfo tp-cart-info-area p-relative">
      <button class="tpcart__close"><i class="fal fa-times"></i></button>
      <div class="tpcart">
         <h4 class="tpcart__title">Your Cart</h4>
         <div class="tpcart__product">
            <div class="tpcart__product-list">
               <ul>
                  <li>
                     <div class="tpcart__item">
                        <div class="tpcart__img">
                           <img src="" alt="">
                           <div class="tpcart__del">
                              <a href="#"><i class="far fa-times-circle"></i></a>
                           </div>
                        </div>
                        <div class="tpcart__content">
                           <span class="tpcart__content-title"><a href="shop-details.html"></a>
                           </span>
                           <div class="tpcart__cart-price">
                              <span class="quantity"></span>
                            <span class="new-price"></span>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="tpcart__checkout">
               <div class="tpcart__total-price d-flex justify-content-between align-items-center">
                  <span> Subtotal:</span>
                  <span class="heilight-price"></span>
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

      <!-- slider-area-start -->
      <section class="slider-area slider-bg slider-bg-height">
         <div class="slider-pagination-2 p-relative">
            <div class="swiper-containers slidertwo-active">
               <div class="swiper-wrapper">
                  <div class="swiper-slide slider-bg">
                     <div class="container">
                        <div class="slider-top-padding pt-55">
                           <div class="row p-relative align-items-end">
                              <div class="col-xl-5 col-lg-6 col-md-6 d-flex align-self-center">
                                 <div class="tpslidertwo__item">
                                    <div class="tpslidertwo__content">
                                       <h3 class="tpslidertwo__title mb-10">Tanaman</h3>
                                       <div class="tpslidertwo__slide-btn">
                                          <a class="tp-btn banner-animation" href="shop.html">Shop Now <i
                                             class="fal fa-long-arrow-right"></i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-7 col-lg-6 col-md-6 d-none d-md-block">
                                 <div class="tpslidertwo__img p-relative text-end">
                                    <img src="{{ asset('frontend/assets/img/slider/slider-01.png')}}" alt="">
                                    <div class="tpslidertwo__img-shape">
                                       <img src="{{ asset('frontend/assets/img/slider/fasion-tag-01.png')}}" alt="tag">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide slider-bg">
                     <div class="container">
                        <div class="slider-top-padding pt-55">
                           <div class="row p-relative align-items-end">
                              <div class="col-xl-5 col-lg-6 col-md-6 d-flex align-self-center">
                                 <div class="tpslidertwo__item">
                                    <div class="tpslidertwo__content">
                                       <h3 class="tpslidertwo__title mb-10">Pupuk</h3>
                                       <div class="tpslidertwo__slide-btn">
                                          <a class="tp-btn banner-animation" href="shop.html">Shop Now <i
                                             class="fal fa-long-arrow-right"></i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-7 col-lg-6 col-md-6 d-none d-md-block">
                                 <div class="tpslidertwo__img p-relative text-end">
                                    <img src="{{ asset('frontend/assets/img/slider/slider-02.png')}}" alt="">
                                    <div class="tpslidertwo__img-shape">
                                       <img src="{{ asset('frontend/assets/img/slider/fasion-tag-01.png')}}" alt="tag">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide slider-bg">
                     <div class="container">
                        <div class="slider-top-padding pt-55">
                           <div class="row p-relative align-items-end">
                              <div class="col-xl-5 col-lg-6 col-md-6 d-flex align-self-center">
                                 <div class="tpslidertwo__item">
                                    <div class="tpslidertwo__content">
                                       <h3 class="tpslidertwo__title mb-10">Bibit</h3>
                                       <div class="tpslidertwo__slide-btn">
                                          <a class="tp-btn banner-animation" href="shop.html">Shop Now <i
                                             class="fal fa-long-arrow-right"></i>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-7 col-lg-6 col-md-6 d-none d-md-block mb-50">
                                 <div class="tpslidertwo__img p-relative text-end">
                                    <img src="{{ asset('frontend/assets/img/slider/slider-03.png')}}" alt="">
                                    <div class="tpslidertwo__img-shape">
                                       <img src="{{ asset('frontend/assets/img/slider/fasion-tag-01.png')}}" alt="tag">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="slider-two-pagination">
               <div class="container">
                  <div class="slider-two-pagination-item p-relative">
                     <div class="slidertwo_pagination"></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- slider-area-end -->

      <!-- banner-area-start -->
      <!-- banner-area-end -->

      <!-- product-area-start -->
      <br>
      <section class="product-area pb-65">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <div class="tpsection mb-40">
                     <h4 class="tpsection__title">Popular Products</h4>
                  </div>
               </div>
            <section class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                   <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct">
                      @foreach ($barang as $item)
                      <div class="col">
                         <div class="tpproduct tpproductitem mb-15 p-relative">
                            <div class="tpproduct__thumb">
                               <div class="tpproduct__thumbitem p-relative">
                                  <a href="{{url('detail',$item->id)}}">
                                     <img src="{{ asset('/storage/barangs/'. $item->image)}}" alt="product-thumb">
                                     <img class="thumbitem-secondary" src="{{ asset('/storage/barangs/'. $item->image)}}" alt="product-thumb"
                                     onmouseover="this.style.transform='scale(1.1)'"
                                     onmouseout="this.style.transform='scale(1)'">

                                  </a>
                               </div>
                            </div>
                            <div class="tpproduct__content-area">
                               <h3 class="tpproduct__title mb-5"><a href="">{{ $item->nama_barang }}</a></h3>
                               <div class="tpproduct__priceinfo p-relative">
                                  <div class="tpproduct__ammount">
                                     <span>Rp.{{ $item->harga }}</span>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      @endforeach
                   </div>
                </div>
             </section>

      <!-- product-area-end -->

      <!-- exclusive-area-start -->
      <section class="exclusive-area pb-65">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8">
                  <div class="exclusiveitem banner-animation p-relative mb-30">
               </div>
            </div>
         </div>
      </section>
      <!-- exclusive-area-end -->

      <!-- blog-area-start -->
      <section class="blog-area pb-55">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-12">
                  <div class="blog-main-box">
                     <div class="row">
                        <div class="col-md-12 col-12">
                           <div class="blogheader mb-20 d-flex align-items-center justify-content-between">
                              <div class="tpallblog mb-20">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- blog-area-end -->

      <!-- brand-area-start -->
      <!-- brand-area-end -->

   </main>
   <!-- main-area-end -->

   <!-- footer-area-start -->
  @include('include.frontend.footer')
   <!-- footer-area-end -->



   <!-- JS here -->
   <script src="{{ asset('frontend/assets/js/jquery.js')}}"></script>
   <script src="{{ asset('frontend/assets/js/waypoints.js')}}"></script>
   <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{ asset('frontend/assets/js/swiper-bundle.js')}}"></script>
   <script src="{{ asset('frontend/assets/js/slick.js')}}"></script>
   <script src="{{ asset('frontend/assets/js/magnific-popup.js')}}"></script>
   <script src="{{ asset('frontend/assets/js/nice-select.js')}}"></script>
   <script src="{{ asset('frontend/assets/js/counterup.js')}}"></script>
   <script src="{{ asset('frontend/assets/js/wow.js')}}"></script>
   <script src="{{ asset('frontend/assets/js/isotope-pkgd.js')}}"></script>
   <script src="{{ asset('frontend/assets/js/imagesloaded-pkgd.js')}}"></script>
   <script src="{{ asset('frontend/assets/js/countdown.js')}}"></script>
   <script src="{{ asset('frontend/assets/js/ajax-form.js')}}"></script>
   <script src="{{ asset('frontend/assets/js/meanmenu.js')}}"></script>
   <script src="{{ asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>
