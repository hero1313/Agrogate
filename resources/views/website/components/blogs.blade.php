@extends('website.index')
@section('content')

    <div class="main page-wrapper">

        <!-- Breadscrumb Section Start -->
        <section class="breadscrumb-section ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadscrumb-contain">
                            <h2>Blog Grid</h2>
                            <nav>
                                <ol class="mb-0 breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <i class="bx bx-home-circle"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog Grid</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadscrumb Section End -->

        <!-- Start Blog Area -->
        <div class="blog-area ptb-60">
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-duration="1200">
                    <h2>Our Latest Blog</h2>
                </div>
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6">
                            <div class="content-blog blog-grid" data-aos="fade-up" data-aos-duration="1200">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="{{ route('website.blog.show', $blog->id) }}">
                                            <img src="{{ $blog->image }}" alt="Blog Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="{{ route('website.blog.show', $blog->id) }}">{{ $blog->name }}</a></h5>

                                        <div class="read-more-btn">
                                            <a class="blog-btn" href="{{ route('website.blog.show', $blog->id) }}">წაკითხვა <i
                                                    class="bx bx-right-arrow-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pagination">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
        <!-- End Blog Area -->

    </div>
@stop
