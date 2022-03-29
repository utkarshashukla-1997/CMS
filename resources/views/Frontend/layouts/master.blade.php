<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@include('Frontend.layouts.head')
@yield('head')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Frontend.layouts.header')
        @yield('header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <div class="page-content bg-white">
            <!-- Trending Post -->
            <div class="section-full trending-post-bx m-b20 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                <div class="container-fluid">
                    <div class="trending-post-carousel owl-carousel owl-none">
                        <div class="item">
                            <div class="trending-post">
                                <div class="dlab-post-media">
                                    <img src="images/trending-post/pic1.jpg" alt="">
                                </div>
                                <div class="dlab-post-info">
                                    <h6 class="post-title"><a href="post-standart.html">Best Beauty Instagrams of the Week</a></h6>
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-category"><a href="javascript:void(0);">Lifestyle</a></li>
                                            <li class="post-date">at <span>12 August 2018</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="trending-post">
                                <div class="dlab-post-media">
                                    <img src="images/trending-post/pic2.jpg" alt="">
                                </div>
                                <div class="dlab-post-info">
                                    <h6 class="post-title"><a href="post-left-sidebar.html">Really Like to Break Into the Modeling World</a></h6>
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-category"><a href="javascript:void(0);">Lifestyle</a></li>
                                            <li class="post-date">at <span>12 August 2018</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="trending-post">
                                <div class="dlab-post-media">
                                    <img src="images/trending-post/pic3.jpg" alt="">
                                </div>
                                <div class="dlab-post-info">
                                    <h6 class="post-title"><a href="post-header-image.html">New Face of L’Oréal And More Iconic Ever</a></h6>
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-category"><a href="javascript:void(0);">Lifestyle</a></li>
                                            <li class="post-date">at <span>12 August 2018</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="trending-post">
                                <div class="dlab-post-media">
                                    <img src="images/trending-post/pic4.jpg" alt="">
                                </div>
                                <div class="dlab-post-info">
                                    <h6 class="post-title"><a href="post-side-image.html">Best Washes Swap Into Morning Routine</a></h6>
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-category"><a href="javascript:void(0);">Lifestyle</a></li>
                                            <li class="post-date">at <span>12 August 2018</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="trending-post">
                                <div class="dlab-post-media">
                                    <img src="images/trending-post/pic5.jpg" alt="">
                                </div>
                                <div class="dlab-post-info">
                                    <h6 class="post-title"><a href="post-gallery.html">Pop Icon’s Best Beauty Looks of All Time</a></h6>
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-category"><a href="javascript:void(0);">Lifestyle</a></li>
                                            <li class="post-date">at <span>12 August 2018</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Trending Post End -->
            <!-- Blog Post Carousel -->
            <div class="section-full bg-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.9s">
                <div class="container-fluid">
                    <div class="top-post-carousel owl-carousel owl-none">
                        <div class="item">
                            <div class="blog-card blog-grid overlay-post left radius-sm">
                                <div class="dlab-post-media">
                                    <img src="images/blog/full/blog/pic1.jpg" alt=""/>
                                </div>
                                <div class="blog-card-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-tag"><a href="tags.html">lifestyle</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="post-standart.html">Masters the Rainy Day Blowout in New York</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-card blog-grid overlay-post left radius-sm">
                                <div class="dlab-post-media">
                                    <img src="images/blog/full/blog/pic2.jpg" alt=""/>
                                </div>
                                <div class="blog-card-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-tag"><a href="tags.html">Fashion</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="post-left-sidebar.html">Latest Look Is a Lesson in Neon Bright Beauty</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-card blog-grid overlay-post left radius-sm">
                                <div class="dlab-post-media">
                                    <img src="images/blog/full/blog/pic3.jpg" alt=""/>
                                </div>
                                <div class="blog-card-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-tag"><a href="tags.html">Beauty</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="post-header-image.html">The Definitive Guide to Surviving Allergy Season</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-card blog-grid overlay-post left radius-sm">
                                <div class="dlab-post-media">
                                    <img src="images/blog/full/blog/pic4.jpg" alt=""/>
                                </div>
                                <div class="blog-card-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-tag"><a href="tags.html">Culture</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="post-slide-show.html">New Subtly Subversive Power of Pink Lipstick</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Post End -->
            <!-- Post Grid Style -->
            <div class="section-full bg-white content-inner-1">
                <div class="container">
                    <div class="section-head text-center">
                        <span>Category</span>
                    </div>
                    <div class="category-owl owl-carousel owl-btn-center-lr">
                        <div class="item">
                            <div class="category-box">
                                <div class="category-media">
                                    <img src="images/category/pic1.jpg" alt="Travel">
                                </div>
                                <div class="category-info">
                                    <a href="javascript:void(0);" class="category-title">Travel</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="category-box">
                                <div class="category-media">
                                    <img src="images/category/pic2.jpg" alt="Travel">
                                </div>
                                <div class="category-info">
                                    <a href="javascript:void(0);" class="category-title">Beauty</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="category-box">
                                <div class="category-media">
                                    <img src="images/category/pic3.jpg" alt="Travel">
                                </div>
                                <div class="category-info">
                                    <a href="javascript:void(0);" class="category-title">Fashion</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="category-box">
                                <div class="category-media">
                                    <img src="images/category/pic4.jpg" alt="Travel">
                                </div>
                                <div class="category-info">
                                    <a href="javascript:void(0);" class="category-title">Beauty</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-full bg-white content-inner-1">
                <div class="container">
                    <div class="section-head text-center">
                        <span>Feature Post</span>
                    </div>
                    <div class="row blog-box-style1">
                        <div class="col-md-8 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                            <div class="blog-card blog-lg content-box">
                                <div class="dlab-post-media">
                                    <img src="images/blog/blog-lg/pic1.jpg" alt=""/>
                                </div>
                                <div class="blog-card-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-author"><span>by</span> <a href="author.html">Shailja Reddy</a></li>
                                            <li class="post-category">in <a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
                                            <li class="post-date">at <span>12 August 2020</span></li>
                                        </ul>
                                    </div>
                                    <h2 class="title"><a href="post-standart.html">The Best Street Style Photos From Russia Fashion Week Fall 2020</a></h2>
                                    <div class="dlab-feed-meta">
                                        <ul>
                                            <li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
                                            <li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
                                            <li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
                                            <li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="post-standart.html" class="post-readmore" data-text="Read More">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                            <div class="blog-card blog-grid overlay-post left">
                                <div class="dlab-post-media">
                                    <img src="images/blog/full/blog/pic4.jpg" alt="">
                                </div>
                                <div class="blog-card-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-tag"><a href="tags.html">Beauty</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="post-header-image.html">The Definitive Guide to Surviving Allergy Season</a></h4>
                                </div>
                            </div>
                            <div class="blog-card blog-grid overlay-post left">
                                <div class="dlab-post-media">
                                    <img src="images/blog/full/blog/pic6.jpg" alt="">
                                </div>
                                <div class="blog-card-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-tag"><a href="tags.html">Beauty</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="post-header-image.html">The Definitive Guide to Surviving Allergy Season</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-full bg-white content-inner-3">
                <div class="container">
                    <div class="section-head text-center">
                        <span>LifeStyle</span>
                    </div>
                    <div class="row">
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                            <div class="blog-card blog-grid">
                                <div class="dlab-post-media">
                                    <img src="images/blog/blog-md/blog/pic1.jpg" alt=""/>
                                </div>
                                <div class="blog-card-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
                                            <li class="post-date">at <span>12 August 2020</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="post-audio.html">Natural Hair Guru Who Launch Products For Tresses</a></h4>
                                    <div class="dlab-feed-meta">
                                        <ul>
                                            <li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
                                            <li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
                                            <li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
                                            <li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                            <div class="blog-card blog-grid">
                                <div class="dlab-post-media">
                                    <img src="images/blog/blog-md/blog/pic2.jpg" alt=""/>
                                </div>
                                <div class="blog-card-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
                                            <li class="post-date">at <span>12 August 2020</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="post-pagination.html">Everything You Need to Know About Cultural</a></h4>
                                    <div class="dlab-feed-meta">
                                        <ul>
                                            <li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
                                            <li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
                                            <li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
                                            <li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                            <div class="blog-card blog-grid">
                                <div class="dlab-post-media">
                                    <img src="images/blog/blog-md/blog/pic3.jpg" alt=""/>
                                </div>
                                <div class="blog-card-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
                                            <li class="post-date">at <span>12 August 2020</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="post-open-gutenberg.html">Las Catalinas, Car-Free Costa Rica Town Welcomes</a></h4>
                                    <div class="dlab-feed-meta">
                                        <ul>
                                            <li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
                                            <li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
                                            <li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
                                            <li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Post Grid Style End -->
            <!-- Subscribe -->
            <div class="section-full">
                <div class="container">
                    <form action="script/mailchamp.php" method="post" class="dzSubscribe subscribe-box row align-items-center">
                        <div class="col-lg-12">
                            <div class="dzSubscribeMsg"></div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="sub-title">
                                <h3 class="title">Join Us To Day</h3>
                                <p>Receive Only The Best Posts Via Email</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="input-group">
                                <input name="dzName" required="required" type="text" class="form-control" placeholder="Your Name ">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="input-group">
                                <input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email Address">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="input-group">
                                <button name="submit" value="Submit" type="submit" class="btn white">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Subscribe End -->
            <!-- Blog Post -->
            <div class="section-full bg-white content-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                            <div class="row blog-box">
                                <div class="col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <div class="blog-card blog-grid">
                                        <div class="dlab-post-media">
                                            <img src="images/blog/blog-md/blog/pic9.jpg" alt=""/>
                                        </div>
                                        <div class="blog-card-info">
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
                                                    <li class="post-date">at <span>12 August 2020</span></li>
                                                </ul>
                                            </div>
                                            <h4 class="title"><a href="post-standart.html">Lori Loughlin and May Finally Break Their Silence in Court Tomorrow</a></h4>
                                            <div class="dlab-feed-meta">
                                                <ul>
                                                    <li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
                                                    <li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
                                                    <li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
                                                    <li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
                                                        <ul>
                                                            <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                            <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                                    <div class="blog-card blog-grid">
                                        <div class="dlab-post-media">
                                            <img src="images/blog/blog-md/blog/pic2.jpg" alt=""/>
                                        </div>
                                        <div class="blog-card-info">
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
                                                    <li class="post-date">at <span>12 August 2020</span></li>
                                                </ul>
                                            </div>
                                            <h4 class="title"><a href="post-left-sidebar.html">All the Celebratory Moments from His New York Wedding</a></h4>
                                            <div class="dlab-feed-meta">
                                                <ul>
                                                    <li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
                                                    <li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
                                                    <li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
                                                    <li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
                                                        <ul>
                                                            <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                            <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                                    <div class="blog-card blog-grid">
                                        <div class="dlab-post-media">
                                            <img src="images/blog/blog-md/blog/pic5.jpg" alt=""/>
                                        </div>
                                        <div class="blog-card-info">
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
                                                    <li class="post-date">at <span>12 August 2020</span></li>
                                                </ul>
                                            </div>
                                            <h4 class="title"><a href="post-header-image.html">Watch Jackson Wang Shop for the Perfect Tracksuit</a></h4>
                                            <div class="dlab-feed-meta">
                                                <ul>
                                                    <li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
                                                    <li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
                                                    <li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
                                                    <li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
                                                        <ul>
                                                            <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                            <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
                                    <div class="blog-card blog-grid">
                                        <div class="dlab-post-media">
                                            <img src="images/blog/blog-md/blog/pic6.jpg" alt=""/>
                                        </div>
                                        <div class="blog-card-info">
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
                                                    <li class="post-date">at <span>12 August 2020</span></li>
                                                </ul>
                                            </div>
                                            <h4 class="title"><a href="post-slide-show.html">Anwar Hadid Wants Everyone to Wear His Unisex Jewelry Label</a></h4>
                                            <div class="dlab-feed-meta">
                                                <ul>
                                                    <li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
                                                    <li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
                                                    <li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
                                                    <li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
                                                        <ul>
                                                            <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                            <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <div class="blog-card blog-grid">
                                        <div class="dlab-post-media">
                                            <img src="images/blog/blog-md/blog/pic3.jpg" alt=""/>
                                        </div>
                                        <div class="blog-card-info">
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
                                                    <li class="post-date">at <span>12 August 2020</span></li>
                                                </ul>
                                            </div>
                                            <h4 class="title"><a href="post-side-image.html">How to Wear Spring’s Chunkiest Shoes and Loveliest Dresses</a></h4>
                                            <div class="dlab-feed-meta">
                                                <ul>
                                                    <li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
                                                    <li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
                                                    <li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
                                                    <li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
                                                        <ul>
                                                            <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                            <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                                    <div class="blog-card blog-grid">
                                        <div class="dlab-post-media">
                                            <img src="images/blog/blog-md/blog/pic4.jpg" alt=""/>
                                        </div>
                                        <div class="blog-card-info">
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
                                                    <li class="post-date">at <span>12 August 2020</span></li>
                                                </ul>
                                            </div>
                                            <h4 class="title"><a href="post-gallery-alternative.html">The Best Brows for Your Hair Color: From Bleached to Black</a></h4>
                                            <div class="dlab-feed-meta">
                                                <ul>
                                                    <li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
                                                    <li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
                                                    <li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
                                                    <li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
                                                        <ul>
                                                            <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                            <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="reload-btn text-center">
                                        <a href="javascript:void(0);" class="btn">Load More <i class="fa fa-repeat"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="side-bar sticky-top">
                                <div class="widget widget-author wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <h6 class="widget-title">About Me</h6>
                                    <div class="author-profile-info">
                                        <div class="author-profile-pic">
                                            <a href="javascript:void(0);">
                                                <img src="images/author.jpg" alt="Profile Pic" width="130" height="130">
                                            </a>
                                        </div>
                                        <div class="author-profile-content">
                                            <h6 class="title">I Am Shailja Reddy</h6>
                                            <p>There are many variations of passages of Lorem Ipsum available.</p>
                                            <ul class="social-icon m-b0">
                                                <li><a href="javascript:void(0);" class="btn radius-xl"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="javascript:void(0);" class="btn radius-xl"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="javascript:void(0);" class="btn radius-xl"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="javascript:void(0);" class="btn radius-xl"><i class="fa fa-pinterest-p"></i></a></li>
                                                <li><a href="javascript:void(0);" class="btn radius-xl"><i class="fa fa-youtube-play"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget recent-posts-entry wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
                                    <h6 class="widget-title"><span>Popular Posts</span></h6>
                                    <div class="widget-post-bx">
                                        <div class="widget-post clearfix">
                                            <div class="dlab-post-media">
                                                <img src="images/blog/recent-blog/pic1.jpg" alt="">
                                            </div>
                                            <div class="dlab-post-info">
                                                <div class="dlab-post-meta">
                                                    <ul>
                                                        <li class="post-category"><a href="javascript:void(0);">Lifestyle</a></li>
                                                        <li class="post-date">at <span>12 August 2018</span></li>
                                                    </ul>
                                                </div>
                                                <h6 class="post-title"><a href="post-header-image.html">Hamish Bowles Spends a Week in Qatar and Is Dazzled by Doha</a></h6>
                                            </div>
                                        </div>
                                        <div class="widget-post clearfix">
                                            <div class="dlab-post-media">
                                                <img src="images/blog/recent-blog/pic2.jpg" alt="">
                                            </div>
                                            <div class="dlab-post-info">
                                                <div class="dlab-post-meta">
                                                    <ul>
                                                        <li class="post-category"><a href="javascript:void(0);">Lifestyle</a></li>
                                                        <li class="post-date">at <span>12 August 2018</span></li>
                                                    </ul>
                                                </div>
                                                <h6 class="post-title"><a href="post-left-sidebar.html">This Week on Instagram, Celebri ties Went All-In on Prints</a></h6>
                                            </div>
                                        </div>
                                        <div class="widget-post clearfix">
                                            <div class="dlab-post-media">
                                                <img src="images/blog/recent-blog/pic3.jpg" alt="">
                                            </div>
                                            <div class="dlab-post-info">
                                                <div class="dlab-post-meta">
                                                    <ul>
                                                        <li class="post-category"><a href="javascript:void(0);">Lifestyle</a></li>
                                                        <li class="post-date">at <span>12 August 2018</span></li>
                                                    </ul>
                                                </div>
                                                <h6 class="post-title"><a href="post-standart.html">Anniversary With An Exhibition At Dallas Contemporary</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget widget_categories wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <h6 class="widget-title"><span>Categories</span></h6>
                                    <ul>
                                        <li><a href="category.html">Culture </a> <span class="badge">11</span> </li>
                                        <li><a href="category.html">Lifestyle </a> <span class="badge">08</span></li>
                                        <li><a href="category.html">Fashion </a> <span class="badge">14</span></li>
                                        <li><a href="category.html">Food & Health </a> <span class="badge">05</span></li>
                                        <li><a href="category.html">Travel </a> <span class="badge">10</span></li>
                                    </ul>
                                </div>
                                <div class="widget widget-vlog wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                                    <h6 class="widget-title"><span>Latest Vlog</span></h6>
                                    <div class="widget-carousel owl-carousel owl-dots-style1 owl-none owl-theme">
                                        <div class="item">
                                            <div class="post-box">
                                                <img src="images/video-post/pic1.jpg" alt="">
                                                <a href="https://www.youtube.com/watch?v=Dj6CKxQue7U" class="popup-youtube video"><i class="fa fa-youtube-play"></i></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="post-box">
                                                <img src="images/video-post/pic2.jpg" alt="">
                                                <a href="https://www.youtube.com/watch?v=Dj6CKxQue7U" class="popup-youtube video"><i class="fa fa-youtube-play"></i></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="post-box">
                                                <img src="images/video-post/pic3.jpg" alt="">
                                                <a href="https://www.youtube.com/watch?v=Dj6CKxQue7U" class="popup-youtube video"><i class="fa fa-youtube-play"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Post End -->
            <!-- Latest Post -->
            <div class="section-full latest-post-bx wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.6s" style="background-image:url(images/pattern/pt2.png);">
                <div class="setResizeMargin">
                    <div class="section-head text-black no-line">
                        <h6 class="title-head text-uppercase"><span>Latest Posts</span></h6>
                    </div>
                    <div class="post-carousel owl-carousel btn-style-1">
                        <div class="item">
                            <div class="blog-card blog-grid post-boxed">
                                <div class="dlab-post-media">
                                    <img src="images/blog/blog-md/blog/pic6.jpg" alt=""/>
                                </div>
                                <div class="blog-card-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
                                            <li class="post-date">at <span>12 August 2020</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="post-slide-show.html">Anwar Hadid Wants Everyone to Wear His</a></h4>
                                    <div class="dlab-feed-meta">
                                        <ul>
                                            <li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
                                            <li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
                                            <li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
                                            <li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-card blog-grid post-boxed">
                                <div class="dlab-post-media">
                                    <img src="images/blog/blog-md/blog/pic2.jpg" alt=""/>
                                </div>
                                <div class="blog-card-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
                                            <li class="post-date">at <span>12 August 2020</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="post-left-sidebar.html">All the Celebratory Moments from His New</a></h4>
                                    <div class="dlab-feed-meta">
                                        <ul>
                                            <li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
                                            <li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
                                            <li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
                                            <li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-card blog-grid post-boxed">
                                <div class="dlab-post-media">
                                    <img src="images/blog/blog-md/blog/pic9.jpg" alt=""/>
                                </div>
                                <div class="blog-card-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
                                            <li class="post-date">at <span>12 August 2020</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="post-standart.html">Lori Loughlin and May Finally Break Their</a></h4>
                                    <div class="dlab-feed-meta">
                                        <ul>
                                            <li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
                                            <li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
                                            <li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
                                            <li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-card blog-grid post-boxed">
                                <div class="dlab-post-media">
                                    <img src="images/blog/blog-md/blog/pic4.jpg" alt=""/>
                                </div>
                                <div class="blog-card-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
                                            <li class="post-date">at <span>12 August 2020</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="post-gallery-alternative.html">The Best Brows for Your Hair Colo</a></h4>
                                    <div class="dlab-feed-meta">
                                        <ul>
                                            <li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
                                            <li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
                                            <li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
                                            <li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Latest Post End -->
            <!-- Most Popular -->
            <div class="section-full bg-white content-inner">
                <div class="container">
                    <div class="section-head text-center">
                        <h6 class="title-head text-uppercase"><span>Most popular</span></h6>
                    </div>
                    <div class="row sp40">
                        <div class="col-lg-6 widget-post-bx wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
                            <div class="blog-card blog-md clearfix wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                                <div class="dlab-post-media">
                                    <img src="images/blog/popular-blog/pic1.jpg" alt="">
                                    <h2 class="post-count">1</h2>
                                </div>
                                <div class="dlab-post-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
                                            <li class="post-date">at <span>12 August 2020</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="post-gallery-alternative.html">March Madness! A Pro’s Guide to the Healthiest Courtside</a></h4>
                                    <div class="dlab-feed-meta">
                                        <ul>
                                            <li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
                                            <li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
                                            <li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
                                            <li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card blog-md clearfix wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                                <div class="dlab-post-media">
                                    <img src="images/blog/popular-blog/pic2.jpg" alt="">
                                    <h2 class="post-count">3</h2>
                                </div>
                                <div class="dlab-post-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
                                            <li class="post-date">at <span>12 August 2020</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="post-side-image.html">The Ultimate Guide to Prepping Your Legs for Spring</a></h4>
                                    <div class="dlab-feed-meta">
                                        <ul>
                                            <li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
                                            <li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
                                            <li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
                                            <li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card blog-md clearfix wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s">
                                <div class="dlab-post-media">
                                    <img src="images/blog/popular-blog/pic3.jpg" alt="">
                                    <h2 class="post-count">5</h2>
                                </div>
                                <div class="dlab-post-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
                                            <li class="post-date">at <span>12 August 2020</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="post-slide-show.html">New Senate Bill Aims to Tackle Unreg ulated Ingredients</a></h4>
                                    <div class="dlab-feed-meta">
                                        <ul>
                                            <li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
                                            <li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
                                            <li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
                                            <li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 widget-post-bx wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
                            <div class="blog-card blog-md clearfix wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                                <div class="dlab-post-media">
                                    <img src="images/blog/popular-blog/pic4.jpg" alt="">
                                    <h2 class="post-count">2</h2>
                                </div>
                                <div class="dlab-post-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
                                            <li class="post-date">at <span>12 August 2020</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="post-header-image.html">Ariana Grande Knows the Power of a Good Hair Accessory</a></h4>
                                    <div class="dlab-feed-meta">
                                        <ul>
                                            <li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
                                            <li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
                                            <li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
                                            <li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card blog-md clearfix wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                                <div class="dlab-post-media">
                                    <img src="images/blog/popular-blog/pic5.jpg" alt="">
                                    <h2 class="post-count">4</h2>
                                </div>
                                <div class="dlab-post-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
                                            <li class="post-date">at <span>12 August 2020</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="post-left-sidebar.html">The Top Take Aways from 2020’s In Goop Health Summit</a></h4>
                                    <div class="dlab-feed-meta">
                                        <ul>
                                            <li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
                                            <li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
                                            <li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
                                            <li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-card blog-md clearfix wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.9s">
                                <div class="dlab-post-media">
                                    <img src="images/blog/popular-blog/pic6.jpg" alt="">
                                    <h2 class="post-count">6</h2>
                                </div>
                                <div class="dlab-post-info">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-category"><a href="javascript:void(0);">beauty</a>, <a href="javascript:void(0);">beauty</a></li>
                                            <li class="post-date">at <span>12 August 2020</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="title"><a href="post-standart.html">The Best Model Street Style Beauty of Fashion Month</a></h4>
                                    <div class="dlab-feed-meta">
                                        <ul>
                                            <li class="post-like"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i><span>231</span></a></li>
                                            <li class="post-dislike"><a href="javascript:void(0);"><i class="fa fa-thumbs-o-down"></i><span>584</span></a></li>
                                            <li class="post-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i><span>397</span></a></li>
                                            <li class="post-share"><i class="fa fa-share-alt"></i><span>Share</span>
                                                <ul>
                                                    <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Post End -->
            <!-- Instagram Post Carousel -->
            <div class="section-full insta-post-carousel owl-carousel owl-none wow fadeIn lightgallery" data-wow-duration="2s" data-wow-delay="0.6s">
                <div class="item">
                    <span data-exthumbimage="images/blog/card/small/pic1.jpg" data-src="images/blog/card/full-img/pic1.jpg" class="check-km dlab-img-effect" title="Title Come Here">
                        <img src="images/blog/card/pic1.jpg" alt="">
                    </span>
                </div>
                <div class="item">
                    <span data-exthumbimage="images/blog/card/small/pic2.jpg" data-src="images/blog/card/full-img/pic2.jpg" class="check-km dlab-img-effect" title="Title Come Here">
                        <img src="images/blog/card/pic2.jpg" alt="">
                    </span>
                </div>
                <div class="item">
                    <span data-exthumbimage="images/blog/card/small/pic3.jpg" data-src="images/blog/card/full-img/pic3.jpg" class="check-km dlab-img-effect" title="Title Come Here">
                        <img src="images/blog/card/pic3.jpg" alt="">
                    </span>
                </div>
                <div class="item">
                    <span data-exthumbimage="images/blog/card/small/pic4.jpg" data-src="images/blog/card/full-img/pic4.jpg" class="check-km dlab-img-effect" title="Title Come Here">
                        <img src="images/blog/card/pic4.jpg" alt="">
                    </span>
                </div>
                <div class="item">
                    <span data-exthumbimage="images/blog/card/small/pic5.jpg" data-src="images/blog/card/full-img/pic5.jpg" class="check-km dlab-img-effect" title="Title Come Here">
                        <img src="images/blog/card/pic5.jpg" alt="">
                    </span>
                </div>
                <div class="item">
                    <span data-exthumbimage="images/blog/card/small/pic6.jpg" data-src="images/blog/card/full-img/pic6.jpg" class="check-km dlab-img-effect" title="Title Come Here">
                        <img src="images/blog/card/pic6.jpg" alt="">
                    </span>
                </div>
                <div class="item">
                    <span data-exthumbimage="images/blog/card/small/pic7.jpg" data-src="images/blog/card/full-img/pic7.jpg" class="check-km dlab-img-effect" title="Title Come Here">
                        <img src="images/blog/card/pic7.jpg" alt="">
                    </span>
                </div>
            </div>
            <!-- Blog Card Carousel End -->
        </div>
            <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->

     <!-- Main Footer -->
     @include('Frontend.layouts.footer')
     @yield('footer')
     <!-- JAVASCRIPT FILES ========================================= -->
<script src="{{asset('js/jquery.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script src="{{asset('plugins/wow/wow.js')}}"></script><!-- WOW JS -->
<script src="{{asset('plugins/bootstrap/js/popper.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
<script src="{{asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script><!-- FORM JS -->
<script src="{{asset('plugins/magnific-popup/magnific-popup.js')}}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{asset('plugins/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
<script src="{{asset('plugins/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script src="{{asset('plugins/imagesloaded/imagesloaded.js')}}"></script><!-- IMAGESLOADED -->
<script src="{{asset('plugins/masonry/masonry-3.1.4.js')}}"></script><!-- MASONRY -->
<script src="{{asset('plugins/masonry/masonry.filter.js')}}"></script><!-- MASONRY -->
<script src="{{asset('plugins/owl-carousel/owl.carousel.js')}}"></script><!-- OWL SLIDER -->
<script src="{{asset('plugins/scroll/scrollbar.min.js')}}"></script><!-- Scroll Bar -->
<script src="{{asset('plugins/lightgallery/js/lightgallery-all.min.js')}}"></script><!-- Lightgallery -->
<script src="{{asset('js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{asset('js/dz.carousel.js')}}"></script><!-- SORTCODE FUCTIONS -->
<script src="{{asset('js/dz.ajax.js')}}"></script><!-- CONTACT JS  -->
</body>
</html>
