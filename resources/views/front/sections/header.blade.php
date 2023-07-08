<header>
    <nav class="header_nav">
        <div class="container">
            <div class="row">
                <div class="left-nav">
                    <li class="lang-curr-wrapper">
                        <div class="pull-left wd-language">
                            <form action="https://opc.webdigify.com/OPC03/OPC090_quickstore/index.php?route=common/language/language" method="post" enctype="multipart/form-data" id="form-language">
                                <div class="btn-group">
                                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
      <span class="hidden-xs hidden-sm hidden-md">

      <img src="catalog/language/en-gb/en-gb.png" alt="English" title="English">English
                                                      <i class="fa fa-angle-down" aria-hidden="true"></i></span></button>
                                    <ul class="dropdoen-menu language-menu">
                                        <li>
                                            <button class="btn btn-link btn-block language-select" type="button" name="en-gb"><img src="catalog/language/en-gb/en-gb.png" alt="English" title="English" /> English</button>
                                        </li>
                                        <li>
                                            <button class="btn btn-link btn-block language-select" type="button" name="ar"><img src="catalog/language/ar/ar.png" alt="Arabic" title="Arabic" /> Arabic</button>
                                        </li>
                                        <li>
                                            <button class="btn btn-link btn-block language-select" type="button" name="ru-ru"><img src="catalog/language/ru-ru/ru-ru.png" alt="Russian" title="Russian" /> Russian</button>
                                        </li>
                                        <li>
                                            <button class="btn btn-link btn-block language-select" type="button" name="uk-ua"><img src="catalog/language/uk-ua/uk-ua.png" alt="Ukraine" title="Ukraine" /> Ukraine</button>
                                        </li>
                                    </ul>
                                </div>
                                <input type="hidden" name="code" value="" />
                                <input type="hidden" name="redirect" value="https://opc.webdigify.com/OPC03/OPC090_quickstore/index.php?route=common/home" />
                            </form>
                        </div>

                        <div class="pull-left wd-currency">
                            <form action="https://opc.webdigify.com/OPC03/OPC090_quickstore/index.php?route=common/currency/currency" method="post" enctype="multipart/form-data" id="form-currency">
                                <div class="btn-group">
                                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
        <span class="hidden-xs hidden-sm hidden-md">
                                           <strong>$</strong>
                   Currency<i class="fa fa-angle-down" aria-hidden="true"></i></span></button>
                                    <ul class="currency-menu">
                                        <li>
                                            <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro</button>
                                        </li>
                                        <li>
                                            <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound Sterling</button>
                                        </li>
                                        <li>
                                            <button class="currency-select btn btn-link btn-block" type="button" name="USD">$ US Dollar</button>
                                        </li>
                                    </ul>
                                </div>
                                <input type="hidden" name="code" value="" />
                                <input type="hidden" name="redirect" value="https://opc.webdigify.com/OPC03/OPC090_quickstore/index.php?route=common/home" />
                            </form>
                        </div>

                    </li>
                    <aside id="header-nav-left">
                        <div id="wdnavcmsheader">
                            <div class="wdheader-service">Free shipping on all orders over $100</div>
                        </div>

                    </aside>

                </div>
                <div class="right-nav">
                    <div class="nav2">

                        <div class="account">
                            <div class="dropdown myaccount"><a href="indexe223.html?route=account/account" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><span class="account-title">My Account</span></a>
                                <ul class="dropdown-menu dropdown-menu-right myaccount-menu">
                    <span class="drop_account">
                <div class="login_acc">
                                    <li><a class="login" href="indexe223.html?route=account/login">Login</a></li>
                  <li><a class="reg" href="index5502.html?route=account/register">Register</a></li>
                  <li><a href="index630e.html?route=checkout/checkout" title="Checkout"><span class="checkout">Checkout</span></a></li>
                                <div class="whishlist"><a href="indexe223.html?route=account/wishlist" id="wishlist-total"><span class="wishlist">Wishlist</span><span class="wishlist_count">0</span></a></div>
                </div>

                  </span>
                                </ul>
                            </div>
                        </div>

                        <div class="compare"><a href="index6431.html?route=product/compare" id="compare-total" title="Compare">Compare</a></div>
                        <div class="col-sm-3 header_cart"><div id="cart" class="btn-group btn-block">
                                <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle">
                                    <div class="cart_detail">
                                        <div class="cart_image"></div>

                                        <span id="cart-total"><span class="cart_heading">Cart</span><span class="item-count">0</span><span class="mycart">Items</span> <span class="price"> $0.00 </span></span>


                                    </div>
                                </button>

                                <ul class="dropdown-menu pull-right cart-menu">
                                    <li>
                                        <p class="text-center">Your shopping cart is empty!</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </nav>
    <div id="header_top" class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 header-logo">
                    <div id="logo"><a href="index9328.html?route=common/home"><img src="image/catalog/logo.png" title="QuickStore" alt="QuickStore" class="img-responsive" /></a>    </div>
                </div>


                <div class="headertop">
                    <aside id="header-top">
                        <div class="main-category-list left-menu">
                            <div class="cat-menu">
                                <div class="WD-panel-heading">
                                    <!--<i class='material-icons close-icon'>close</i>-->
                                </div>
                                <div class="wd-menu horizontal-menu wd-menu-bar" id="wd-menu-2369">
                                    <ul class="ul-top-items">
                                        @foreach($categories as $category)
                                            if($category->parentId == null){

                                            }
                                        @endforeach
                                        <li class="li-top-item mega-menu wd-sub-menu">
                                            <a class="a-top-link" href="index98dc.html?route=product/category&amp;path=20">
                                                <span>Electronics</span>
                                            </a>
                                            <!-- Mega Menu -->


                                            <div class="mega-menu-container product-thumb sub-menu-container ">
                                                <div class="container">
                                                    <div class="col-sm-6 sub-item2-content" data-cols="6">
                                                        <div class="sub-cate-img">
                                                        </div>
                                                        <a class="a-mega-second-link" href="index460c.html?route=product/category&amp;path=80"><h4><strong>Ear Buds</strong></h4></a>
                                                        <div class="sub_item3-content">
                                                            <a class="a-mega-third-link" href="indexa220.html?route=product/category&amp;path=80_83"><h5>Direct TV</h5></a>
                                                            <a class="a-mega-third-link" href="index8e1e.html?route=product/category&amp;path=80_81"><h5>LCD Screen</h5></a>
                                                            <a class="a-mega-third-link" href="index6684.html?route=product/category&amp;path=80_82"><h5>LED Screen</h5></a>
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-6 sub-item2-content" data-cols="6">
                                                        <div class="sub-cate-img">
                                                        </div>
                                                        <a class="a-mega-second-link" href="index76bc.html?route=product/category&amp;path=61"><h4><strong>Laptop</strong></h4></a>
                                                        <div class="sub_item3-content">
                                                            <a class="a-mega-third-link" href="index248d.html?route=product/category&amp;path=61_64"><h5>Apple MacBook</h5></a>
                                                            <a class="a-mega-third-link" href="index4fb6.html?route=product/category&amp;path=61_65"><h5>Convertible</h5></a>
                                                            <a class="a-mega-third-link" href="index7bfe.html?route=product/category&amp;path=61_63"><h5>Netbook</h5></a>
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-6 sub-item2-content" data-cols="6">
                                                        <div class="sub-cate-img">
                                                        </div>
                                                        <a class="a-mega-second-link" href="index1647.html?route=product/category&amp;path=25"><h4><strong>Smart Phone</strong></h4></a>
                                                        <div class="sub_item3-content">
                                                            <a class="a-mega-third-link" href="indexe177.html?route=product/category&amp;path=25_28"><h5>Android</h5></a>
                                                            <a class="a-mega-third-link" href="indexc219.html?route=product/category&amp;path=25_29"><h5>iPhone</h5></a>
                                                            <a class="a-mega-third-link" href="index955a.html?route=product/category&amp;path=25_32"><h5>Windows phones</h5></a>
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-6 sub-item2-content" data-cols="6">
                                                        <div class="sub-cate-img">
                                                        </div>
                                                        <a class="a-mega-second-link" href="index0027.html?route=product/category&amp;path=27"><h4><strong>Headphones</strong></h4></a>
                                                        <div class="sub_item3-content">
                                                            <a class="a-mega-third-link" href="index6b95.html?route=product/category&amp;path=27_60"><h5>Headsets</h5></a>
                                                            <a class="a-mega-third-link" href="index368b.html?route=product/category&amp;path=27_26"><h5>Wired Earbuds</h5></a>
                                                            <a class="a-mega-third-link" href="indexb71a.html?route=product/category&amp;path=27_79"><h5>Airpods</h5></a>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>

                                            <!-- Flyout Menu -->
                                        </li>

                                        <li class="li-top-item mega-menu wd-sub-menu">
                                            <a class="a-top-link" href="index70a9.html?route=product/category&amp;path=57">
                                                <span>Airpods</span>
                                            </a>
                                            <!-- Mega Menu -->


                                            <div class="mega-menu-container product-thumb sub-menu-container ">
                                                <div class="container">

                                                    <div class="col-sm-2 sub-item2-content div-product" data-cols="2">
                                                        <div class="product-img">
                                                            <a class="a-mega-second-link" href="index6320.html?route=product/product&amp;product_id=28">
                                                                <img src="image/cache/catalog/06-256x256.jpg" alt="Apple AirPods Max 2020 with Smart Case – Blue" class="mega-second-image" />
                                                            </a>
                                                        </div>
                                                        <a class="a-mega-second-link detail" href="index6320.html?route=product/product&amp;product_id=28">
                                                            <h4><strong>Apple AirPods Max 2020 with Smart Case – Blue</strong></h4>
                                                            <p class="price">
                                                                <span class="price-new">$3,600,002.00</span> <span class="price-old">$122.00</span>
                                                            </p>

                                                        </a>
                                                    </div>



                                                    <div class="col-sm-2 sub-item2-content div-product" data-cols="2">
                                                        <div class="product-img">
                                                            <a class="a-mega-second-link" href="indexb77e.html?route=product/product&amp;product_id=48">
                                                                <img src="image/cache/catalog/03-256x256.jpg" alt="Sony EXTRA BASS Portable Splash-proof Wireless Speaker" class="mega-second-image" />
                                                            </a>
                                                        </div>
                                                        <a class="a-mega-second-link detail" href="indexb77e.html?route=product/product&amp;product_id=48">
                                                            <h4><strong>Sony EXTRA BASS Portable Splash-proof Wireless Speaker</strong></h4>
                                                            <p class="price">
                                                                $122.00
                                                            </p>

                                                        </a>
                                                    </div>



                                                    <div class="col-sm-2 sub-item2-content div-product" data-cols="2">
                                                        <div class="product-img">
                                                            <a class="a-mega-second-link" href="index5e0b.html?route=product/product&amp;product_id=36">
                                                                <img src="image/cache/catalog/07-256x256.jpg" alt="Apple iPhone 13 (128GB) – Starlight Light Blue" class="mega-second-image" />
                                                            </a>
                                                        </div>
                                                        <a class="a-mega-second-link detail" href="index5e0b.html?route=product/product&amp;product_id=36">
                                                            <h4><strong>Apple iPhone 13 (128GB) – Starlight Light Blue</strong></h4>
                                                            <p class="price">
                                                                $122.00
                                                            </p>

                                                        </a>
                                                    </div>



                                                    <div class="col-sm-2 sub-item2-content div-product" data-cols="2">
                                                        <div class="product-img">
                                                            <a class="a-mega-second-link" href="indexd21c.html?route=product/product&amp;product_id=47">
                                                                <img src="image/cache/catalog/04-256x256.jpg" alt="realme Pad Mini 3 GB RAM 32 GB ROM 8.7 inch with Wi-Fi+4G, Black" class="mega-second-image" />
                                                            </a>
                                                        </div>
                                                        <a class="a-mega-second-link detail" href="indexd21c.html?route=product/product&amp;product_id=47">
                                                            <h4><strong>realme Pad Mini 3 GB RAM 32 GB ROM 8.7 inch with Wi-Fi+4G, Black</strong></h4>
                                                            <p class="price">
                                                                $122.00
                                                            </p>

                                                        </a>
                                                    </div>



                                                    <div class="col-sm-2 sub-item2-content div-product" data-cols="2">
                                                        <div class="product-img">
                                                            <a class="a-mega-second-link" href="index9144.html?route=product/product&amp;product_id=40">
                                                                <img src="image/cache/catalog/02-256x256.jpg" alt="Apple MacBook Air Laptop: M1 chip, 13.3-inch/33.74 cm" class="mega-second-image" />
                                                            </a>
                                                        </div>
                                                        <a class="a-mega-second-link detail" href="index9144.html?route=product/product&amp;product_id=40">
                                                            <h4><strong>Apple MacBook Air Laptop: M1 chip, 13.3-inch/33.74 cm</strong></h4>
                                                            <p class="price">
                                                                $123.20
                                                            </p>

                                                        </a>
                                                    </div>



                                                    <div class="col-sm-2 sub-item2-content div-product" data-cols="2">
                                                        <div class="product-img">
                                                            <a class="a-mega-second-link" href="indexbb02.html?route=product/product&amp;product_id=42">
                                                                <img src="image/cache/catalog/01-256x256.jpg" alt="Samsung Galaxy Note10+ Mobile Phone; Sim Free Smartphone" class="mega-second-image" />
                                                            </a>
                                                        </div>
                                                        <a class="a-mega-second-link detail" href="indexbb02.html?route=product/product&amp;product_id=42">
                                                            <h4><strong>Samsung Galaxy Note10+ Mobile Phone; Sim Free Smartphone</strong></h4>
                                                            <p class="price">
                                                                <span class="price-new">$110.00</span> <span class="price-old">$122.00</span>
                                                            </p>

                                                        </a>
                                                    </div>



                                                    <div class="col-sm-2 sub-item2-content div-product" data-cols="2">
                                                        <div class="product-img">
                                                            <a class="a-mega-second-link" href="indexfac8.html?route=product/product&amp;product_id=35">
                                                                <img src="image/cache/catalog/08-256x256.jpg" alt="Dell S27QC 27 inch 4K UHD Monitor – Grey" class="mega-second-image" />
                                                            </a>
                                                        </div>
                                                        <a class="a-mega-second-link detail" href="indexfac8.html?route=product/product&amp;product_id=35">
                                                            <h4><strong>Dell S27QC 27 inch 4K UHD Monitor – Grey</strong></h4>
                                                            <p class="price">
                                                                $122.00
                                                            </p>

                                                        </a>
                                                    </div>



                                                    <div class="col-sm-2 sub-item2-content div-product" data-cols="2">
                                                        <div class="product-img">
                                                            <a class="a-mega-second-link" href="indexa17e.html?route=product/product&amp;product_id=32">
                                                                <img src="image/cache/catalog/05-256x256.jpg" alt="Hero Session Action Camera with 8MP Photos" class="mega-second-image" />
                                                            </a>
                                                        </div>
                                                        <a class="a-mega-second-link detail" href="indexa17e.html?route=product/product&amp;product_id=32">
                                                            <h4><strong>Hero Session Action Camera with 8MP Photos</strong></h4>
                                                            <p class="price">
                                                                $122.00
                                                            </p>

                                                        </a>
                                                    </div>


                                                </div>
                                            </div>

                                            <!-- Flyout Menu -->
                                        </li>

                                        <li class="li-top-item wd-sub-menu flyout-menu">
                                            <a class="a-top-link" href="index7fa3.html?route=product/category&amp;path=18">
                                                <span>Smart Watch</span>
                                            </a>
                                            <!-- Mega Menu -->

                                            <!-- Flyout Menu -->

                                            <div class="wd-sub-menu-container sub-menu-container">
                                                <ul class="ul-second-items">
                                                    <li class="li-second-items">
                                                        <a href="index9f41.html?route=product/category&amp;path=18_46" class="a-second-link a-item">
                                                            <span class="a-second-title">GPS Smartwatches</span>
                                                        </a>
                                                    </li>
                                                    <li class="li-second-items">
                                                        <a href="indexba9a.html?route=product/category&amp;path=18_73" class="a-second-link a-item">
                                                            <span class="a-second-title">Fitness-focused</span>
                                                        </a>
                                                    </li>
                                                    <li class="li-second-items">
                                                        <a href="index8470.html?route=product/category&amp;path=18_45" class="a-second-link a-item">
                                                            <span class="a-second-title">Budget Smartwatches</span>
                                                        </a>
                                                    </li>
                                                    <li class="li-second-items">
                                                        <a href="index96fb.html?route=product/category&amp;path=18_72" class="a-second-link a-item">
                                                            <span class="a-second-title">Luxury smartwatches</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="li-top-item mega-menu">
                                            <a class="a-top-link" href="index0854.html?route=product/category&amp;path=62">
                                                <span>iPhone</span>
                                            </a>
                                        </li>

                                        <li class="li-top-item mega-menu">
                                            <a class="a-top-link" href="indexc957.html?route=product/category&amp;path=24">
                                                <span>Computers</span>
                                            </a>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>




                    </aside>

                </div>
                <!-- <div id="_desktop_contact_link"></div> -->

                <div class="col-sm-5 header_search">
                    <div id="search" class="input-group">
                        <span class="search_button"></span><span class="search-title">Search</span>
                        <div class="search_toggle">
                            <div id="searchbox">
                                <input type="text" name="search" value="" placeholder="Search Product Here..." class="form-control input-lg" />
                                <span class="input-group-btn">
        <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i>Search</button>
        </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div></div>
    </div>
    </div>
</header>
