@extends('web.app.app')


@section('main-body')
<div class="main-body">
    @include('web.component.hero')

    <section class="section-paddings welcome-area">

        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-welcome-text">
                        <div class="section-title-version-2-black text-center">
                            <h2>About Us</h2>
                            <p>{{ $content->about_title }}
                            </p>
                            <br>
                            {{ $content->about_subtitle }}
                            <br><br>

                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-welcome-area text-center">
                        <div class="single-image mt-5">
                            <img src="{{ asset('uploads/content/' . $content->about_image) }}" alt=""
                              class="img-thumbnail img-responsive">
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="welcome-content" style="padding-top: 10px">
                        <p>

                            <br>
                            {!! $content->about_content !!}
                        </p>
                        {{-- <a href="{{ route('about') }}" class="read-more hvr-fade">Read More</a> --}}
                    </div>
                </div>
                <!-- welcome area left side end -->

                <!-- welcome area right side end -->
            </div>
        </div>
    </section>

</div>
@endsection