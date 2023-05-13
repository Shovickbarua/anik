@extends('web.app.app')


@section('main-body')
<div class="dashboard-main">
    <div class="dashboard__content bg-light-4">
        <div class="row pb-50 mb-10">
            <div class="col-auto">

                <h1 class="text-30 lh-12 fw-700">My Courses</h1>
                <div class="mt-10">Lorem ipsum dolor sit amet, consectetur.</div>

            </div>
        </div>


        <div class="row y-gap-30">
            <div class="col-12">
                <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                    <div class="tabs -active-purple-2 js-tabs">
                        <div
                          class="tabs__controls d-flex items-center pt-20 px-30 border-bottom-light js-tabs-controls">
                            <button class="text-light-1 lh-12 tabs__button js-tabs-button is-active"
                              data-tab-target=".-tab-item-1" type="button">
                                All Courses
                            </button>
                            <button class="text-light-1 lh-12 tabs__button js-tabs-button ml-30"
                              data-tab-target=".-tab-item-2" type="button">
                                Finished
                            </button>
                            <button class="text-light-1 lh-12 tabs__button js-tabs-button ml-30"
                              data-tab-target=".-tab-item-3" type="button">
                                Not enrolled
                            </button>
                        </div>

                        <div class="tabs__content py-30 px-30 js-tabs-content">
                            <div class="tabs__pane -tab-item-1 is-active">
                                <div class="row y-gap-10 justify-between">
                                    <div class="col-auto">
                                        <form class="search-field border-light rounded-8 h-50" action="post">
                                            <input class="bg-white -dark-bg-dark-2 pr-50" type="text"
                                              placeholder="Search Courses">
                                            <button class="" type="submit">
                                                <i class="icon-search text-light-1 text-20"></i>
                                            </button>
                                        </form>
                                    </div>

                                    <div class="col-auto">
                                        <div class="d-flex flex-wrap y-gap-10 x-gap-20">
                                            <div>

                                                <div class="dropdown js-dropdown js-category-active">
                                                    <div
                                                      class="dropdown__button d-flex items-center text-14 bg-white -dark-bg-dark-2 border-light rounded-8 px-20 py-10 text-14 lh-12"
                                                      data-el-toggle=".js-category-toggle"
                                                      data-el-toggle-active=".js-category-active">
                                                        <span class="js-dropdown-title">Categories</span>
                                                        <i class="icon text-9 ml-40 icon-chevron-down"></i>
                                                    </div>

                                                    <div
                                                      class="toggle-element -dropdown -dark-bg-dark-2 -dark-border-white-10 js-click-dropdown js-category-toggle">
                                                        <div class="text-14 y-gap-15 js-dropdown-list">

                                                            <div><a href="#"
                                                                  class="d-block js-dropdown-link">Animation</a></div>

                                                            <div><a href="#" class="d-block js-dropdown-link">Design</a>
                                                            </div>

                                                            <div><a href="#"
                                                                  class="d-block js-dropdown-link">Illustration</a>
                                                            </div>

                                                            <div><a href="#"
                                                                  class="d-block js-dropdown-link">Business</a></div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div>

                                                <div class="dropdown js-dropdown js-review-active">
                                                    <div
                                                      class="dropdown__button d-flex items-center text-14 bg-white -dark-bg-dark-2 border-light rounded-8 px-20 py-10 text-14 lh-12"
                                                      data-el-toggle=".js-review-toggle"
                                                      data-el-toggle-active=".js-review-active">
                                                        <span class="js-dropdown-title">Old Review</span>
                                                        <i class="icon text-9 ml-40 icon-chevron-down"></i>
                                                    </div>

                                                    <div
                                                      class="toggle-element -dropdown -dark-bg-dark-2 -dark-border-white-10 js-click-dropdown js-review-toggle">
                                                        <div class="text-14 y-gap-15 js-dropdown-list">

                                                            <div><a href="#"
                                                                  class="d-block js-dropdown-link">Animation</a></div>

                                                            <div><a href="#" class="d-block js-dropdown-link">Design</a>
                                                            </div>

                                                            <div><a href="#"
                                                                  class="d-block js-dropdown-link">Illustration</a>
                                                            </div>

                                                            <div><a href="#"
                                                                  class="d-block js-dropdown-link">Business</a></div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row y-gap-30 pt-30">

                                    @foreach($courses->where('creator_id',Auth::user()->id) as $course)
                                    <div class="w-1/5 xl:w-1/3 lg:w-1/2 sm:w-1/1">
                                        <div class="relative">
                                            <img class="rounded-8 w-1/1"
                                              src="{{ asset('/uploads/courses/' . $course->image) }}"
                                              alt="{{ $course->title }}">

                                            <button class="absolute-button"
                                              data-el-toggle=".js-more-{{ $course->id }}-toggle">
                                                <span
                                                  class="d-flex items-center justify-center size-35 bg-white shadow-1 rounded-8">
                                                    <i class="icon-menu-vertical"></i>
                                                </span>
                                            </button>

                                            <div class="toggle-element -dshb-more js-more-{{ $course->id }}-toggle">
                                                <div
                                                  class="px-25 py-25 bg-white -dark-bg-dark-2 shadow-1 border-light rounded-8">
                                                    <a href="#" class="d-flex items-center">
                                                        <div class="icon-share"></div>
                                                        <div class="text-17 lh-1 fw-500 ml-12">Share</div>
                                                    </a>

                                                    <a href="#" class="d-flex items-center mt-20">
                                                        <div class="icon-bookmark"></div>
                                                        <div class="text-17 lh-1 fw-500 ml-12">Favorite</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pt-15">
                                            <div class="d-flex y-gap-10 justify-between items-center">
                                                <div class="text-14 lh-1">{{ $course->creator->name }}</div>

                                                <div class="d-flex items-center">
                                                    <div class="text-14 lh-1 text-yellow-1 mr-10">{{ $course->rating }}
                                                    </div>

                                                </div>
                                            </div>

                                            <h3 class="text-16 fw-500 lh-15 mt-10">{{ $course->title }}</h3>
                                        </div>
                                    </div>
                                    @endforeach



                                </div>

                                <div class="row justify-center pt-30">
                                    <div class="col-auto">
                                        <div class="pagination -buttons">
                                            <button class="pagination__button -prev">
                                                <i class="icon icon-chevron-left"></i>
                                            </button>

                                            <div class="pagination__count">
                                                <a href="#">1</a>
                                                <a class="-count-is-active" href="#">2</a>
                                                <a href="#">3</a>
                                                <span>...</span>
                                                <a href="#">67</a>
                                            </div>

                                            <button class="pagination__button -next">
                                                <i class="icon icon-chevron-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tabs__pane -tab-item-2"></div>
                            <div class="tabs__pane -tab-item-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer class="footer -dashboard py-30">
        <div class="row items-center justify-between">
            <div class="col-auto">
                <div class="text-13 lh-1">© 2022 Educrat. All Right Reserved.</div>
            </div>

            <div class="col-auto">
                <div class="d-flex items-center">
                    <div class="d-flex items-center flex-wrap x-gap-20">
                        <div>
                            <a href="help-center.html" class="text-13 lh-1">Help</a>
                        </div>
                        <div>
                            <a href="terms.html" class="text-13 lh-1">Privacy Policy</a>
                        </div>
                        <div>
                            <a href="#" class="text-13 lh-1">Cookie Notice</a>
                        </div>
                        <div>
                            <a href="#" class="text-13 lh-1">Security</a>
                        </div>
                        <div>
                            <a href="terms.html" class="text-13 lh-1">Terms of Use</a>
                        </div>
                    </div>

                    <button class="button -md -rounded bg-light-4 text-light-1 ml-30">English</button>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection
