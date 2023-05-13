<section class="layout-pt-md layout-pb-md">
    <div data-anim-wrap class="container">
        <div data-anim-child="slide-left delay-1" class="row y-gap-20 justify-between items-center">
            <div class="col-lg-6">

                <div class="sectionTitle ">

                    <h2 class="sectionTitle__title ">Latest Subjects</h2>

                    <p class="sectionTitle__text ">10,000+ </p>

                </div>

            </div>

            <div class="col-auto">

                <a href="#" class="button -icon -purple-3 text-purple-1">
                    All Courses
                    <i class="icon-arrow-top-right text-13 ml-10"></i>
                </a>

            </div>
        </div>

        <div class="pt-60 lg:pt-40">
            <div class="overflow-hidden js-section-slider" data-loop data-gap="30" data-pagination
                data-slider-cols="xl-6 lg-6 md-4 sm-3 base-2">
                <div class="swiper-wrapper">

                    @foreach ($subjects as $item)
                        <div class="swiper-slide">
                            <div class="">
                                <img class="w-1/1" src="{{ asset('uploads/subjects/' . $item->image) }}"
                                    alt="book">
                                <h5 class="text-17 fw-500 mt-15">{{ $item->title }}</h5>
                            </div>
                        </div>
                    @endforeach


                </div>


                <div class="d-flex x-gap-15 items-center justify-center pt-60 lg:pt-40">
                    <div class="col-auto">
                        <button class="d-flex items-center text-24 arrow-left-hover js-prev">
                            <i class="icon icon-arrow-left"></i>
                        </button>
                    </div>
                    <div class="col-auto">
                        <div class="pagination -arrows js-pagination"></div>
                    </div>
                    <div class="col-auto">
                        <button class="d-flex items-center text-24 arrow-right-hover js-next">
                            <i class="icon icon-arrow-right"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
