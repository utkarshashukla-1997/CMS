@section('header')
<body id="bg">
    <div class="page-wraper">
    <div id="loading-area"></div>
        <div class="modal fade subscribe-modal-bx" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content subscribe-form">
                    <div class="modal-header">
                        <div class="sub-title">
                            <h3 class="title">Join Us To Day</h3>
                            <p>Receive Only The Best Posts Via Email</p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="script/mailchamp.php" method="post" class="dzSubscribe row align-items-center">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input name="dzName" required="required" type="text" class="form-control" placeholder="Your Name ">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email Address">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group m-b0">
                                    <button name="submit" value="Submit" type="submit" class="btn secondry radius-no btn-block">Subscribe</button>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="dzSubscribeMsg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- header -->
        <header class="site-header mo-left header-full header">
            <!-- main header -->
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix ">
                    <div class="container-fluid">
                        <!-- website logo -->
                        <div class="logo-header mostion">
                            <a href="index.html"><img src="images/logo-black.png" alt=""></a>
                        </div>

                        <!-- nav toggle button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <!-- extra nav -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <ul>
                                    <li class="search-btn">
                                        <a id="quik-search-btn" href="javascript:;"><i class="ti-search m-r10"></i><span>Search</span></a>
                                    </li>
                                    <li>
                                        <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn secondry radius-no">Subscribe</button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Quik search -->
                        <div class="dlab-quik-search">
                            <form action="#">
                                <input name="search" value="" type="text" class="form-control" placeholder="Search...">
                                <span id="quik-search"><i class="ti-search"></i></span>
                            </form>
                            <span class="search-remove" id="quik-search-remove"><i class="ti-close"></i></span>
                        </div>

                        <!-- main nav -->
                        <div class="header-nav navbar-collapse collapse justify-content-left" id="navbarNavDropdown">
                            <div class="logo-header">
                                <a href="index.html"><img src="{{asset('assets/images/gcn.png')}}" alt=""></a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="javascript:void(0);">Home<i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                        <li><a href="index-3.html">Home 03</a></li>
                                        <li><a href="index-4.html">Home 04</a></li>
                                        <li><a href="index-5.html">Home 05</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Post Layout<i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="post-standart.html">Post Standart</a></li>
                                        <li><a href="post-left-sidebar.html">Post Left Sidebar</a></li>
                                        <li><a href="post-header-image.html">Post Header Image</a></li>
                                        <li><a href="post-slide-show.html">Post Slide Show</a></li>
                                        <li><a href="post-side-image.html">Post Side Image</a></li>
                                        <li><a href="post-gallery.html">Post Gallery</a></li>
                                        <li><a href="post-gallery-alternative.html">Post Gallery Alt</a></li>
                                        <li><a href="post-link.html">Post Link</a></li>
                                        <li><a href="post-audio.html">Post Audio</a></li>
                                        <li><a href="post-video.html">Post Video</a></li>
                                        <li><a href="post-pagination.html">Post With Pagination</a></li>
                                        <li><a href="post-open-gutenberg.html">Post Open Gutenberg</a></li>
                                    </ul>
                                </li>
                                <li class="has-mega-menu post-slider life-style">
                                    <a href="javascript:void(0);">Category<i class="fa fa-chevron-down"></i></a>
                                    <div class="mega-menu">
                                        <div class="life-style-bx">
                                            <div class="life-style-tabs">
                                                <ul>
                                                    <li><a href="javascript:void(0);" id="st-all" class="post-tabs active">All</a></li>
                                                    <li><a href="javascript:void(0);" id="st-beauty" class="post-tabs">Beauty</a></li>
                                                    <li><a href="javascript:void(0);" id="st-lifestyle" class="post-tabs">Lifestyle</a></li>
                                                    <li><a href="javascript:void(0);" id="st-fashion" class="post-tabs">Fashion</a></li>
                                                    <li><a href="javascript:void(0);" id="st-travel" class="post-tabs">Travel</a></li>
                                                </ul>
                                            </div>
                                            <div class="life-style-post text-center">
                                                <div id="all" class="life-style-post-bx show">
                                                    <div class="header-blog-carousel owl-carousel owl-btn-center-lr">
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="post-standart.html"><img src="images/category/pic1.jpg" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title ">
                                                                        <h5 class="post-title"><a href="post-standart.html">Ready or Not, the Return into of the Hobo Bag Is Nigh</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="post-left-sidebar.html"><img src="images/category/pic2.jpg" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title ">
                                                                        <h5 class="post-title"><a href="post-left-sidebar.html">This Week on Instagram, Celebri ties Went All-In on Prints</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="post-full-width.html"><img src="images/category/pic3.jpg" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title">
                                                                        <h5 class="post-title"><a href="post-header-image.html">Anniversary With An Exhibition At Dallas Contemporary</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="post-slide-show.html"><img src="images/category/pic4.jpg" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title ">
                                                                        <h5 class="post-title"><a href="post-slide-show.html">La Dolce Vita Meets Old School on Beach Style </a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="beauty" class="life-style-post-bx">
                                                    <div class="header-blog-carousel owl-carousel owl-btn-center-lr">
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="post-standart.html"><img src="images/category/pic1.jpg" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title ">
                                                                        <h5 class="post-title"><a href="post-standart.html">Ready or Not, the Return into of the Hobo Bag Is Nigh</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="post-left-sidebar.html"><img src="images/category/pic2.jpg" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title ">
                                                                        <h5 class="post-title"><a href="post-left-sidebar.html">This Week on Instagram, Celebri ties Went All-In on Prints</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="post-full-width.html"><img src="images/category/pic3.jpg" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title">
                                                                        <h5 class="post-title"><a href="post-header-image.html">Anniversary With An Exhibition At Dallas Contemporary</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="post-slide-show.html"><img src="images/category/pic4.jpg" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title ">
                                                                        <h5 class="post-title"><a href="post-slide-show.html">La Dolce Vita Meets Old School on Beach Style </a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="lifestyle" class="life-style-post-bx">
                                                    <div class="header-blog-carousel owl-carousel owl-btn-center-lr">
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="post-standart.html"><img src="images/category/pic1.jpg" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title ">
                                                                        <h5 class="post-title"><a href="post-standart.html">Ready or Not, the Return into of the Hobo Bag Is Nigh</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="post-left-sidebar.html"><img src="images/category/pic2.jpg" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title ">
                                                                        <h5 class="post-title"><a href="post-left-sidebar.html">This Week on Instagram, Celebri ties Went All-In on Prints</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="post-full-width.html"><img src="images/category/pic3.jpg" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title">
                                                                        <h5 class="post-title"><a href="post-header-image.html">Anniversary With An Exhibition At Dallas Contemporary</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="post-slide-show.html"><img src="images/category/pic4.jpg" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title ">
                                                                        <h5 class="post-title"><a href="post-slide-show.html">La Dolce Vita Meets Old School on Beach Style </a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="fashion" class="life-style-post-bx">
                                                    <div class="header-blog-carousel owl-carousel owl-btn-center-lr">
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="post-standart.html"><img src="images/category/pic1.jpg" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title ">
                                                                        <h5 class="post-title"><a href="post-standart.html">Ready or Not, the Return into of the Hobo Bag Is Nigh</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="post-left-sidebar.html"><img src="images/category/pic2.jpg" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title ">
                                                                        <h5 class="post-title"><a href="post-left-sidebar.html">This Week on Instagram, Celebri ties Went All-In on Prints</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="post-full-width.html"><img src="images/category/pic3.jpg" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title">
                                                                        <h5 class="post-title"><a href="post-header-image.html">Anniversary With An Exhibition At Dallas Contemporary</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="post-slide-show.html"><img src="images/category/pic4.jpg" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title ">
                                                                        <h5 class="post-title"><a href="post-slide-show.html">La Dolce Vita Meets Old School on Beach Style </a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="travel" class="life-style-post-bx">
                                                    <div class="header-blog-carousel owl-carousel owl-btn-center-lr">
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="post-standart.html"><img src="images/category/pic1.jpg" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title ">
                                                                        <h5 class="post-title"><a href="post-standart.html">Ready or Not, the Return into of the Hobo Bag Is Nigh</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="post-left-sidebar.html"><img src="images/category/pic2.jpg" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title ">
                                                                        <h5 class="post-title"><a href="post-left-sidebar.html">This Week on Instagram, Celebri ties Went All-In on Prints</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="post-full-width.html"><img src="images/category/pic3.jpg" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title">
                                                                        <h5 class="post-title"><a href="post-header-image.html">Anniversary With An Exhibition At Dallas Contemporary</a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="blog-post blog-sm">
                                                                <div class="dlab-post-media">
                                                                    <a href="post-slide-show.html"><img src="images/category/pic4.jpg" alt=""></a>
                                                                </div>
                                                                <div class="dlab-post-info">
                                                                    <div class="dlab-post-title ">
                                                                        <h5 class="post-title"><a href="post-slide-show.html">La Dolce Vita Meets Old School on Beach Style </a></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Shop<i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-product.html">Product</a></li>
                                        <li><a href="shop-product-details.html">Product Details</a></li>
                                        <li><a href="shop-cart.html">Cart</a></li>
                                        <li><a href="shop-checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Pages<i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="about-me.html">About</a></li>
                                        <li><a href="archive.html">Archive</a></li>
                                        <li><a href="author.html">Author</a></li>
                                        <li><a href="category.html">Category</a></li>
                                        <li><a href="tags.html">Tags</a></li>
                                        <li><a href="search-results.html">Search results</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="sitedown.html">Maintenance</a></li>
                                        <li><a href="error-404.html">Error 404</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-me.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header END -->
        <div class="header-author">
            <div class="author-bx">
                <div class="author-media">
                    <img src="images/author.jpg" alt=""/>
                </div>
                <div class="author-info">
                    <h2 class="title">Hi. i am Shailja Reddy</h2>
                    <p>I am a developer based in Melbourne</p>
                    <ul class="author-social">
                        <li><a href="javascript:void(0);" class=""><i class="fa fa-facebook"></i> <span>facebook</span></a></li>
                        <li><a href="javascript:void(0);" class=""><i class="fa fa-instagram"></i> <span>instagram</span></a></li>
                        <li><a href="javascript:void(0);" class=""><i class="fa fa-twitter"></i> <span>twitter</span></a></li>
                        <li><a href="javascript:void(0);" class=""><i class="fa fa-linkedin"></i> <span>linkedin</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
@endsection
