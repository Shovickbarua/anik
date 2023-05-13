<div class="dashboard__sidebar -base scroll-bar-1 border-right-light lg:px-30">

    @if (request()->routeIs('user.*'))
    <div class="sidebar -dashboard">

        <div class="sidebar__item -is-active -dark-bg-dark-2">
            <a href="dashboard.html" class="d-flex items-center text-17 lh-1 fw-500 -dark-text-white">
                <i class="text-20 icon-discovery mr-15"></i>
                Dashboard
            </a>
        </div>

        <div class="sidebar__item ">
            <a href="{{route('user.courses.index')}}" class="d-flex items-center text-17 lh-1 fw-500 ">
                <i class="text-20 icon-play-button mr-15"></i>
                My Courses
            </a>
        </div>

        <div class="sidebar__item ">
            <a href="dshb-bookmarks.html" class="d-flex items-center text-17 lh-1 fw-500 ">
                <i class="text-20 icon-bookmark mr-15"></i>
                Bookmarks
            </a>
        </div>

        <div class="sidebar__item ">
            <a href="dshb-messages.html" class="d-flex items-center text-17 lh-1 fw-500 ">
                <i class="text-20 icon-message mr-15"></i>
                Messages
            </a>
        </div>

        <div class="sidebar__item ">
            <a href="{{route('user.course.create')}}" class="d-flex items-center text-17 lh-1 fw-500 ">
                <i class="text-20 icon-list mr-15"></i>
                Create Course
            </a>
        </div>

        <div class="sidebar__item ">
            <a href="dshb-reviews.html" class="d-flex items-center text-17 lh-1 fw-500 ">
                <i class="text-20 icon-comment mr-15"></i>
                Reviews
            </a>
        </div>

        <div class="sidebar__item ">
            <a href="dshb-settings.html" class="d-flex items-center text-17 lh-1 fw-500 ">
                <i class="text-20 icon-setting mr-15"></i>
                Settings
            </a>
        </div>

        <div class="sidebar__item ">
            <a href="#" class="d-flex items-center text-17 lh-1 fw-500 ">
                <i class="text-20 icon-power mr-15"></i>
                Logout
            </a>
        </div>

    </div>
    @else
    <div class="sidebar -base-sidebar">
        <div class="sidebar__inner">
            <div>
                <div class="text-16 lh-1 fw-500 text-dark-1 mb-30">General</div>
                <div>

                    <div class="sidebar__item -is-active">
                        <a href="about-1.html" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                            <i class="text-20 icon-discovery mr-15"></i>
                            Explore
                        </a>
                    </div>

                    <div class="sidebar__item ">
                        <a href="{{route('courses.show')}}"
                          class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                            <i class="text-20 icon-play-button mr-15"></i>
                            Courses
                        </a>
                    </div>
                    <div class="sidebar__item ">
                        <a href="{{route('courses.order')}}"
                          class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                            <i class="text-20 icon-play-button mr-15"></i>
                            Orders
                        </a>
                    </div>

                    <div class="sidebar__item ">
                        <a href="#" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                            <i class="text-20 icon-book mr-15"></i>
                            Books
                        </a>
                    </div>

                    <div class="sidebar__item ">
                        <a href="blog-list-1.html" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                            <i class="text-20 icon-list mr-15"></i>
                            Articles
                        </a>
                    </div>

                    <div class="sidebar__item ">
                        <a href="#" class="-dark-sidebar-white d-flex items-center text-17 lh-1 fw-500">
                            <i class="text-20 icon-time-management mr-15"></i>
                            Calendar
                        </a>
                    </div>

                </div>
            </div>

            <div class="mt-60">
                <div class="text-16 lh-1 fw-500 text-dark-1 mb-30">Pages</div>
                <div class="">

                    <div class="">
                        <div class="accordion js-accordion">
                            <div class="accordion__item">
                                <div class="accordion__button py-10 px-20 bg-light-4 rounded-16">
                                    <span class="text-16 fw-500 text-dark-1">About</span>
                                    <div class="accordion__icon">
                                        <div class="icon size-20 mt-5" data-feather="chevron-down">
                                        </div>
                                        <div class="icon size-20" data-feather="chevron-up"></div>
                                    </div>
                                </div>
                                <div class="accordion__content">
                                    <div class="accordion__content__inner px-30 pt-15 pb-10">
                                        <div class="sidebar__links y-gap-5">
                                            <div><a href="#">About v1</a></div>
                                            <div><a href="#">About v2</a></div>
                                            <div><a href="#">About v3</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="">
                        <a href="#"
                          class="d-flex items-center justify-between py-15 px-20 rounded-16 text-16 lh-1 fw-500 -base-sidebar-menu-hover">
                            Contact
                        </a>
                    </div>

                    <div class="">
                        <a href="#"
                          class="d-flex items-center justify-between py-15 px-20 rounded-16 text-16 lh-1 fw-500 -base-sidebar-menu-hover">
                            Pricing
                        </a>
                    </div>

                    <div class="">
                        <a href="#"
                          class="d-flex items-center justify-between py-15 px-20 rounded-16 text-16 lh-1 fw-500 -base-sidebar-menu-hover">
                            Help
                        </a>
                    </div>

                    <div class="">
                        <a href="#"
                          class="d-flex items-center justify-between py-15 px-20 rounded-16 text-16 lh-1 fw-500 -base-sidebar-menu-hover">
                            Faq
                        </a>
                    </div>

                    <div class="">
                        <a href="#"
                          class="d-flex items-center justify-between py-15 px-20 rounded-16 text-16 lh-1 fw-500 -base-sidebar-menu-hover">
                            Term
                        </a>
                    </div>

                    <div class="">
                        <a href="#"
                          class="d-flex items-center justify-between py-15 px-20 rounded-16 text-16 lh-1 fw-500 -base-sidebar-menu-hover">
                            Privacy
                        </a>
                    </div>

                    <div class="">
                        <a href="#"
                          class="d-flex items-center justify-between py-15 px-20 rounded-16 text-16 lh-1 fw-500 -base-sidebar-menu-hover">
                            Setting
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endif

</div>