<header>
      <div class="mainmenuarea d-none d-xl-block">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-9">
                  <div class="mainmenu d-flex align-items-center">
                     <div class="mainmenu__main d-flex align-items-center p-relative">
                        <div class="main-menu">
                           <nav id="mobile-menu">
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
                                 <li>
                                    
                                 </li>
                              </ul>
                           </nav>
                        </div>
                        <div class="mainmenu__logo">
                           <a href="index.html"><img src="{{asset('frontend/assets/img/logo/logo.png')}}" alt=""></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3">
                  <div class="header-meta d-flex align-items-center justify-content-end">
                     <div class="header-meta__social d-flex align-items-center ml-25">
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
   </header>