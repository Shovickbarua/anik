@extends('web.app.app')


@section('main-body')
<div class="main-body">
    <div class="dashboard-user">
        <div class="dashboard__content bg-light-4">
            <div class="row pb-50 mb-10">
                <div class="col-auto">

                    <h1 class="text-30 lh-12 fw-700">Settings</h1>
                    <div class="mt-10">Lorem ipsum dolor sit amet, consectetur.</div>

                </div>
            </div>


            <div class="row y-gap-30">
                <div class="col-12">
                    <div class="rounded-16 bg-white -dark-bg-dark-1 shadow-4 h-100">
                        <div class="tabs -active-purple-2 js-tabs pt-0 ">
                            <div
                              class="tabs__controls d-flex x-gap-30 items-center pt-20 px-30 border-bottom-light js-tabs-controls">
                                <button class="tabs__button text-light-1 js-tabs-button  is-active"
                                  data-tab-target=".-tab-item-1" type="button">
                                    User Information
                                </button>
                                <button class="tabs__button text-light-1 js-tabs-button " data-tab-target=".-tab-item-b"
                                  type="button">
                                    Basic Information
                                </button>
                                <button class="tabs__button text-light-1 js-tabs-button" data-tab-target=".-tab-item-2"
                                  type="button">
                                    Password
                                </button>
                                <button class="tabs__button text-light-1 js-tabs-button" data-tab-target=".-tab-item-3"
                                  type="button">
                                    Social Profiles
                                </button>

                            </div>

                            <div class="tabs__content py-30 px-30 js-tabs-content">
                                <div class="tabs__pane -tab-item-1 is-active">

                                    <div class="border-top-light pt-30 mt-30">

                                        <form action="" class="contact-form row y-gap-30">

                                            <div class="col-md-6">

                                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10"> Name</label>

                                                <input type="text" placeholder=" Name" name="name"
                                                  value="{{ $user->name }}">
                                            </div>



                                            <div class="col-md-6">

                                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Phone</label>

                                                <input type="text" placeholder="Phone" name="phone"
                                                  value="{{ $user->phone }}">
                                            </div>
                                            <div class="col-md-6">

                                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">email</label>

                                                <input type="text" placeholder="email" name="email"
                                                  value="{{ $user->email }}">
                                            </div>

                                            <div class="col-12">
                                                <button class="button -md -purple-1 text-white">Update Profile</button>
                                            </div>
                                        </form>


                                    </div>
                                </div>
                                <div class="tabs__pane -tab-item-b is-active">
                                    <div class="row y-gap-20 x-gap-20 items-center">
                                        <div class="col-auto">
                                            <img class="size-100" src="img/dashboard/edit/1.png" alt="image">
                                        </div>

                                        <div class="col-auto">
                                            <div class="text-16 fw-500 text-dark-1">Your avatar</div>
                                            <div class="text-14 lh-1 mt-10">PNG or JPG no bigger than 800px wide and
                                                tall.
                                            </div>

                                            <div class="d-flex x-gap-10 y-gap-10 flex-wrap pt-15">
                                                <div>
                                                    <div
                                                      class="d-flex justify-center items-center size-40 rounded-8 bg-light-3">
                                                        <div class="icon-cloud text-16"></div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div
                                                      class="d-flex justify-center items-center size-40 rounded-8 bg-light-3">
                                                        <div class="icon-bin text-16"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-top-light pt-30 mt-30">
                                        @if (Auth::user()->role == 1 )
                                        <form action="#" class="contact-form row y-gap-30">

                                            <div class="col-md-6">

                                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10"> Address</label>

                                                <input type="text" placeholder=" Address" name="Address"
                                                  value="{{ $user->student->address }}">
                                            </div>

                                            <div class="col-md-6">

                                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">School Name</label>

                                                <input type="text" placeholder=" school" name="current_school"
                                                  value="{{ $user->student->current_school }}">
                                            </div>

                                            <div class="col-md-6">
                                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Birthday</label>

                                                @if ($user->role = 1)
                                                <input type="text" placeholder="Birthday" name="birthday"
                                                  value="{{ $user->student->birthday }}">
                                                @endif

                                            </div>



                                            <div class="col-12">
                                                <button class="button -md -purple-1 text-white">Update Profile</button>
                                            </div>
                                        </form>
                                        @elseif (Auth::user()->role == 2 )
                                        <form action="{{route('teacher.update',$user->teacher->id )}}"
                                          class="contact-form row y-gap-30">


                                            <div class="col-md-6">
                                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Birthday</label>

                                                @if ($user->role = 1)
                                                <input type="date" placeholder="Birthday" name="birthday"
                                                  value="{{ $user->teacher->birthday }}">
                                                @endif

                                            </div>

                                            <div class="col-md-6">

                                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Curent
                                                    profession</label>

                                                <select name="profession">
                                                    <option value="1">Part Time</option>
                                                    <option value="2">Full Time</option>
                                                    <option value="3">Unemployed</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6">

                                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Subject You want to
                                                    Teach</label>

                                                <select name="subject">
                                                    @foreach ($subjects as $subject)
                                                    <option @if ($user->teacher->subject == $subject->id )
                                                        selected
                                                        @endif
                                                        value="{{$subject->id}}">{{$subject->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>


                                            <div class="col-12">
                                                <button class="button -md -purple-1 text-white">Update Profile</button>
                                            </div>
                                        </form>
                                        @endif

                                    </div>
                                </div>
                                <div class="tabs__pane -tab-item-2">
                                    <form action="#" class="contact-form row y-gap-30">

                                        <div class="col-md-7">

                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Current
                                                password</label>

                                            <input type="text" placeholder="Current password">
                                        </div>


                                        <div class="col-md-7">

                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">New password</label>

                                            <input type="text" placeholder="New password">
                                        </div>


                                        <div class="col-md-7">

                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Confirm New
                                                Password</label>

                                            <input type="text" placeholder="Confirm New Password">
                                        </div>

                                        <div class="col-12">
                                            <button class="button -md -purple-1 text-white">Save Password</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="tabs__pane -tab-item-3">
                                    <form action="#" class="contact-form row y-gap-30">

                                        <div class="col-md-6">

                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Twitter</label>

                                            <input type="text" placeholder="Twitter Profile">
                                        </div>


                                        <div class="col-md-6">

                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Facebook</label>

                                            <input type="text" placeholder="Facebook Profile">
                                        </div>


                                        <div class="col-md-6">

                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Instagram</label>

                                            <input type="text" placeholder="Instagram Profile">
                                        </div>


                                        <div class="col-md-6">

                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">LinkedIn Profile
                                                URL</label>

                                            <input type="text" placeholder="LinkedIn Profile">
                                        </div>

                                        <div class="col-12">
                                            <button class="button -md -purple-1 text-white">Save Social Profile</button>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</div>
@endsection
