<!-- Page Preloder -->
<div id="preloder">
    <div class="loader">
        <img src="img/logo.png" alt="">
        <h2>Loading.....</h2>
    </div>
</div>


<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src="img/logo.png" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li {!! (Request::url() == url('/')) ? ' class="active"' : '' !!}><a href="/">Home</a></li>
            <li {!! (Request::url() == url('/services')) ? ' class="active"' : '' !!}><a href="/services">Services</a></li>
            <li {!! (Request::url() == url('/blog')) || (Request::url() == url('/blog_post')) ? ' class="active"' : '' !!}><a href="/blog">Blog</a></li>
            <li {!! (Request::url() == url('/contact')) ? ' class="active"' : '' !!}><a href="/contact">Contact</a></li>
            <li {!! (Request::url() == url('/elements')) ? ' class="active"' : '' !!}><a href="/elements">Elements</a></li>
        </ul>
    </nav>
</header>
<!-- Header section end -->
