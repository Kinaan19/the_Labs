<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>{{ (Request::url() == url('/services')) ? 'Services' : '' }} {{ (Request::url() == url('/blog')) || (Request::url() == url('/blog_post')) || (Request::url() == url('/elements')) ? 'Blog' : '' }} {{ (Request::url() == url('/contact')) ? 'Contact' : '' }} </h2>
            <div class="page-links">
                <a href="#">Home</a>
                <span>{{ (Request::url() == url('/services')) ? 'Services' : '' }} {{ (Request::url() == url('/blog')) || (Request::url() == url('/blog_post')) || (Request::url() == url('/elements')) ? 'Blog' : '' }} {{ (Request::url() == url('/contact')) ? 'Contact' : '' }}</span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end-->