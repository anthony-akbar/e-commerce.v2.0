<div class="content-top">
    <div class="main-slider">
        <div id="spinner"></div>
        <div class="swiper-viewport">
            <div id="slideshow0" class="swiper-container" style="opacity: 1;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide text-center">
                        <a href="#">
                            <img src="{{ asset('front/image/cache/catalog/Main-banner-1-1903x580.jpg') }}" alt="Galaxy S13+ Ultra." class="img-responsive" />
                        </a>

                        <div class="slider-content">
                            <div class="main-carousel-content">
                                <div class="slider-title">Galaxy S13+ Ultra.</div>
                                <div class="slider-details">Supercharged for pros.<span>$999.00</span></div>
                                <div class="slider-description">From $999.00 or $41.62/mo.per month</div>
                                <div class="slider-buttons">
                                    <div class="slider-button"> <a class="btn-primary" href="#">Buy Now</a></div>
                                    <div class="slider-button1"> <a class="btn-primary" href="#">Learn More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide text-center">
                        <a href="#">
                            <img src="{{ asset('front/image/cache/catalog/Main-banner-2-1903x580.jpg') }}" alt="Electronic Essentials" class="img-responsive" />
                        </a>

                        <div class="slider-content">
                            <div class="main-carousel-content">
                                <div class="slider-title">Electronic Essentials</div>
                                <div class="slider-details">50% off order above<span>$999.00</span></div>
                                <div class="slider-description">From $999.00 or $41.62/mo.per month
                                </div>
                                <div class="slider-buttons">
                                    <div class="slider-button"> <a class="btn-primary" href="#">Buy Now</a></div>
                                    <div class="slider-button1"> <a class="btn-primary" href="#">Learn More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="swiper-pagination slideshow0"></div>
            <div class="swiper-pager">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <script>
        $(window).load(function() {
            $('#slideshow0').swiper({
                mode: 'horizontal',
                slidesPerView: 1,
                pagination: '.slideshow0',
                paginationClickable: true,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                spaceBetween: 0,
                autoplay: 5500,
                autoplayDisableOnInteraction: true,
                loop: true,
                effect:'fade'
            });
        });
    </script>
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
            $("#spinner").fadeOut("slow");
        });
    </script>
    <div class="wd_category_feature bottom-to-top hb-animate-element" id="wd_category_feature">
        <div class="container">
            <div class="row">
                <div class="box-heading">Trending Categories</div>
                <div class="wdfcat-items">
                    <div class="list_carousel row responsive clearfix">
                        <div class="product-list category_list_carousel" id="wd_cat_featured">

                            @foreach($categories as $category)
                                <div class="item">
                                    <div class="content">
                                        <div class="wd_cat_content">
                                            <div class="cat-img">
                                                <a href="indexc957.html?route=product/category&amp;path=24">
                                                    <img src="{{ $category->img }}" alt="{{ $category->title }}" title="{{ $category->title }}" class="cat_image1" />
                                                </a>
                                            </div>
                                            <div class="wdcat-content">
                                                <div class="wdcat-inner">
                                                    <div class="cat-infor">
                                                        <h4 class="title"><a href="indexc957.html?route=product/category&amp;path=24" class="btn-pattern">{{ $category->title }}</a></h4>
                                                    </div>

                                                    <li class="cat-more">
                                                        <a href="indexc957.html?route=product/category&amp;path=24" class="category-viewall">Shop Now</a>
                                                    </li>

                                                </div>
                                            </div>
                                        </div><!-- Caption END -->
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="category_cms bottom-to-top hb-animate-element">
        <div class="container">
            <div class="row">
                <div class="category_center">
                    <div class="category_block banner-1">
                        <div class="list_inner">
                            <div class="category_block_img">
                                <a href="#" title="cat_banner"><img class="cat_image" src="image/catalog/banner-01.jpg" alt=""></a>
                                <div class="description">
                                    <div class="title">Big saving</div>
                                    <div class="subtitle">Galaxy S13 lite love the price.</div>
                                    <div class="price">
                                        <div class="banner-price">From $429.00</div>
                                    </div>
                                    <div class="action">
                                        <a href="#" class="banner_text">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="category_block banner-2">
                        <div class="list_inner">
                            <div class="category_block_img">
                                <a href="#" title="cat_banner"><img class="cat_image" src="image/catalog/banner-02.jpg" alt=""></a>
                                <div class="description">
                                    <div class="title">15% off</div>
                                    <div class="subtitle">Smartwatch 7 light on price.</div>
                                    <div class="price">
                                        <div class="banner-price">From $399.00</div>
                                    </div>
                                    <div class="action">
                                        <a href="#" class="banner_text">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="category_block banner-3">
                        <div class="list_inner">
                            <div class="category_block_img">
                                <a href="#" title="cat_banner"><img class="cat_image" src="image/catalog/banner-03.jpg" alt=""></a>
                                <div class="description">
                                    <div class="title">Flat 20% off</div>
                                    <div class="subtitle">Five bold colors $99 each.</div>
                                    <div class="price">
                                        <div class="banner-price">From $290.00</div>
                                    </div>
                                    <div class="action">
                                        <a href="#" class="banner_text">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="category_block banner-4">
                        <div class="list_inner">
                            <div class="category_block_img">
                                <a href="#" title="cat_banner"><img class="cat_image" src="image/catalog/banner-04.jpg" alt=""></a>
                                <div class="description">
                                    <div class="title">Best price</div>
                                    <div class="subtitle">5th generation AirPods.</div>
                                    <div class="price">
                                        <div class="banner-price">From $400.00</div>
                                    </div>
                                    <div class="action">
                                        <a href="#" class="banner_text">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="category_block banner-5">
                        <div class="list_inner">
                            <div class="category_block_img">
                                <a href="#" title="cat_banner"><img class="cat_image" src="image/catalog/banner-05.jpg" alt=""></a>
                                <div class="description">
                                    <div class="title">Over 50%</div>
                                    <div class="subtitle">Headset max 3rd generation</div>
                                    <div class="price">
                                        <div class="banner-price">From $550.00</div>
                                    </div>
                                    <div class="action">
                                        <a href="#" class="banner_text">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="category_block banner-6">
                        <div class="list_inner">
                            <div class="category_block_img">
                                <a href="#" title="cat_banner"><img class="cat_image" src="image/catalog/banner-06.jpg" alt=""></a>
                                <div class="description">
                                    <div class="title">Save extra</div>
                                    <div class="subtitle">Mac book pro. new arrival</div>
                                    <div class="price">
                                        <div class="banner-price">From $3500.00</div>
                                    </div>
                                    <div class="action">
                                        <a href="#" class="banner_text">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
