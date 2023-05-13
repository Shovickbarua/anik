@extends('web.app.app')


@section('main-body')
<div class="main-body">

    <!-- blog breadcrumb version one strat here -->
    <section class="breadcrumb-blog-version-one">
        <div class="single-bredcurms" style="background-image:url('images/bercums/contact-page.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bredcrums-content">
                            <h2>Blog Post</h2>
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li class="active"><a href="blog-single.html">Blog-Post</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- blog breadcrumb version one end here -->

    <!-- Start blog -->
    <section id="blog" class="section-paddings single section page">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="col-md-12">
                        <!-- Single blog -->
                        <div class="single-blog">
                            <div class="blog-head">
                                <img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="#">
                            </div>
                            <div class="blog-content">
                                <h2>{{ $blog->title }}</h2>
                                <div class="meta">
                                    {{-- <span><i class="fa fa-user"></i>Admin</span> --}}
                                    <span><i
                                          class="fa fa-calender"></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}</span>
                                </div>
                                <p>
                                    {!! $blog->description !!}
                                </p>
                            </div>
                        </div>
                        <!--/ End Single blog -->

                    </div>

                </div>

                <div class="col-md-4 col-sm-12 col-xs-12">
                    <!-- Blog Sidebar -->
                    <div class="blog-sidebar">
                        <div class="single-sidebar tags">
                            <h2>Popular <span>Services</span></h2>
                            <ul>
                                @foreach ($services as $service)
                                <li><a href="{{ route('service.package',$service->title) }}">{{ $service->title }} <span> ({{ $service->packages->count() }})</span></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>



                        <!-- Single Sidebar -->
                        <div class="single-sidebar latest">
                            <h2>Popular Post</h2>

                            @foreach ($blogs as $blog)
                            <div class="single-post">
                                <div class="post-info">
                                    <h4><a href="#">{{ $blog->title }}</a></h4>
                                    <p>{{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}</p>
                                </div>
                            </div> <!-- End Single Post -->
                            @endforeach


                        </div>
                        <!--/ End Single Sidebar -->
         <!-- Single Sidebar -->
         <div class="single-sidebar category">
            <h2>Leatest Packages</h2>
            <ul>
                @foreach ($packages->take(5) as $package)
                <li><a href="{{ route('package.details', $package->title) }}"><i class="fa fa-angle-double-right"></i>{{ $package->title }}</a>
                </li>
                @endforeach


            </ul>
        </div>
        <!--/ End Single Sidebar -->

                    </div>
                    <!--/ End Blog Sidebar -->
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
