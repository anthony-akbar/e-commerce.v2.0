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
                                        @foreach($categories as $key => $category)
                                            @if($category->children->count() === 0)
                                                <li class="li-top-item mega-menu">
                                                    <a class="a-top-link" href="index0854.html?route=product/category&amp;path=62">
                                                        <span>{{ $category->title }}</span>
                                                    </a>
                                                </li>
                                            @else
                                                @if($category->parentId === null)
                                                    <li class="li-top-item mega-menu wd-sub-menu">
                                                        <a class="a-top-link" href="index98dc.html?route=product/category&amp;path=20">
                                                            <span>{{ $category->title }}</span>
                                                        </a>
                                                        <!-- Mega Menu -->
                                                        <div class="mega-menu-container product-thumb sub-menu-container ">
                                                            <div class="container">
                                                        @foreach($category->children as $item)

                                                                <div class="col-sm-6 sub-item2-content" data-cols="6">
                                                                    <div class="sub-cate-img">
                                                                    </div>
                                                                    <a class="a-mega-second-link" href="index460c.html?route=product/category&amp;path=80"><h4><strong>{{ $item->title }}</strong></h4></a>
                                                                    <div class="sub_item3-content">
                                                                        @foreach($item->children as $items)
                                                                            <a class="a-mega-third-link" href="indexa220.html?route=product/category&amp;path=80_83"><h5>{{ $items->title }}</h5></a>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                        @endforeach

                                                            </div>
                                                        </div>
                                                        <!-- Flyout Menu -->
                                                    </li>

                                                @endif
                                            @endif
                                        @endforeach

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
