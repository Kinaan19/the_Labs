@extends('adminlte::master')

@section('body')


<!-- Page Preloder and Header -->
@include('partials/header')
<!-- End Page Preloder and Header -->


<!-- Page header -->
@include('partials/pageHeader')
<!-- Page header end-->


<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Post item -->
                <div class="post-item">
                    <div class="post-thumbnail">
                        <img src="img/blog/blog-2.jpg" alt="">
                        <div class="post-date">
                            <h2>03</h2>
                            <h3>Nov 2017</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">Just a simple blog post</h2>
                        <div class="post-meta">
                            <a href="">Loredana Papp</a>
                            <a href="">Design, Inspiration</a>
                            <a href="">2 Comments</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
                            elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices,
                            est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius
                            blandit. Praesent mattis, eros a sodales commodo.</p>
                        <a href="/blog_post" class="read-more">Read More</a>
                    </div>
                </div>
                <!-- Post item -->
                <div class="post-item">
                    <div class="post-thumbnail">
                        <img src="img/blog/blog-1.jpg" alt="">
                        <div class="post-date">
                            <h2>03</h2>
                            <h3>Nov 2017</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">Just a simple blog post</h2>
                        <div class="post-meta">
                            <a href="">Loredana Papp</a>
                            <a href="">Design, Inspiration</a>
                            <a href="">2 Comments</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
                            elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices,
                            est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius
                            blandit. Praesent mattis, eros a sodales commodo.</p>
                        <a href="/blog_post" class="read-more">Read More</a>
                    </div>
                </div>
                <!-- Post item -->
                <div class="post-item">
                    <div class="post-thumbnail">
                        <img src="img/blog/blog-3.jpg" alt="">
                        <div class="post-date">
                            <h2>03</h2>
                            <h3>Nov 2017</h3>
                        </div>
                    </div>
                    <div class="post-content">
                        <h2 class="post-title">Just a simple blog post</h2>
                        <div class="post-meta">
                            <a href="">Loredana Papp</a>
                            <a href="">Design, Inspiration</a>
                            <a href="">2 Comments</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec
                            elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices,
                            est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius
                            blandit. Praesent mattis, eros a sodales commodo.</p>
                        <a href="/blog_post" class="read-more">Read More</a>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="page-pagination">
                    <a class="active" href="">01.</a>
                    <a href="">02.</a>
                    <a href="">03.</a>
                </div>
            </div>
            <!-- Sidebar area -->
            @include('partials/blogSideBar')
        </div>
    </div>
</div>
<!-- page section end-->


<!-- newsletter section -->
@include('partials/newsLetter')
<!-- newsletter section end-->


<!-- Footer section -->
@include('partials/footer')
<!-- Footer section end -->


@stop