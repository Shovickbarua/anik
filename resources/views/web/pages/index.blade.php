@extends('web.app.app')


@section('main-body')
    <div class="main-body">

        @include('web.component.hero')
@include('web.component.subjects')
        {{-- @include('web.component.categories') --}}

        @include('web.component.courses')
        @include('web.component.testimonial')



        <section class="layout-pt-lg layout-pb-lg bg-dark-2">
            <div data-anim-wrap class="container">
                <div class="row justify-center text-center">
                    <div data-anim-child="slide-up delay-1" class="col-auto">

                        <div class="sectionTitle ">

                            <h2 class="sectionTitle__title text-white">Why learn with our courses?</h2>

                            <p class="sectionTitle__text text-white">Lorem ipsum dolor sit amet, consectetur.</p>

                        </div>

                    </div>
                </div>

                <div class="row y-gap-30 pt-50">

                    <div data-anim-child="slide-up delay-2" class="col-lg-4 col-md-6">
                        <div class="stepCard -type-1 -stepCard-hover">
                            <div class="stepCard__content">
                                <div class="stepCard__icon">
                                    <i class="icon-online-learning-4 text-64 text-green-1"></i>
                                </div>
                                <h4 class="stepCard__title">01. Learn</h4>
                                <p class="stepCard__text"> Lorem ipsum dolor sit amet, consectetur dolorili
                                    adipiscing elit. Felis donec massa aliqua.</p>
                            </div>
                        </div>
                    </div>

                    <div data-anim-child="slide-up delay-3" class="col-lg-4 col-md-6">
                        <div class="stepCard -type-1 -stepCard-hover">
                            <div class="stepCard__content">
                                <div class="stepCard__icon">
                                    <i class="icon-graduation-1 text-64 text-green-1"></i>
                                </div>
                                <h4 class="stepCard__title">02. Graduate</h4>
                                <p class="stepCard__text"> Lorem ipsum dolor sit amet, consectetur dolorili
                                    adipiscing elit. Felis donec massa aliqua.</p>
                            </div>
                        </div>
                    </div>

                    <div data-anim-child="slide-up delay-4" class="col-lg-4 col-md-6">
                        <div class="stepCard -type-1 -stepCard-hover">
                            <div class="stepCard__content">
                                <div class="stepCard__icon">
                                    <i class="icon-working-at-home-2 text-64 text-green-1"></i>
                                </div>
                                <h4 class="stepCard__title">03. Work</h4>
                                <p class="stepCard__text"> Lorem ipsum dolor sit amet, consectetur dolorili
                                    adipiscing elit. Felis donec massa aliqua.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        @include('web.component.instructors')
        <section class="layout-pt-lg layout-pb-lg bg-light-3">
            <div data-anim-wrap class="container">
                <div class="row y-gap-20 items-center">
                    <div class="col-xl-7 col-lg-7">
                        <div data-anim-child="slide-up delay-1" class="app-image">
                            <img src="{{ asset('') }}assets/web/img/app/1.png" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="app-content">
                            <h2 data-anim-child="slide-up delay-3" class="app-content__title">Learn From<br>
                                <span>Anywhere</span>
                            </h2>
                            <p data-anim-child="slide-up delay-4" class="app-content__text">Take classes on the
                                go with the educrat app. Stream or download to watch on the plane, the subway, or
                                wherever you learn best.</p>
                            <div data-anim-child="slide-up delay-5" class="app-content__buttons">
                                <a href="#"><img src="{{ asset('') }}assets/web/img/app/buttons/1.svg"
                                        alt="button"></a>
                                <a href="#"><img src="{{ asset('') }}assets/web/img/app/buttons/2.svg"
                                        alt="button"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@include('web.component.blog')

        <section class="layout-pt-md layout-pb-md bg-purple-1">
            <div class="container">
                <div class="row y-gap-20 justify-between items-center">
                    <div class="col-xl-4 col-lg-5">
                        <h2 class="text-30 lh-15 text-white">
                            Join more than <span class="text-green-1">8 million learners</span> worldwide
                        </h2>
                    </div>

                    <div class="col-auto">
                        <a href="#" class="button -md -green-1 text-dark-1">Start Learning For Free</a>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
