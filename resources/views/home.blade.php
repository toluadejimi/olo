@extends('layouts.main')
@section('content')

    <!-- Page Content Start -->


    <div class="page-content space-top p-b65">
        <div class="container fixed-full-area">
            <div class="dzSwipe_card-cont dz-gallery-slider">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif


                @foreach($escorts as $data)

                    <div class="dzSwipe_card">
                        <div class="dz-media">
                            <img src="{{url('')}}/assets/images/w3tinder/slider/{{$data->image1}}" alt="">
                        </div>

                        <div class="dz-content">
                            <div class="left-content">

                                <span class="badge badge-primary d-inline-flex gap-1 mb-2"><i
                                        class="icon feather icon-map-pin"></i> {{strtoupper($data->state)}} | {{strtoupper($data->town)}}</span>
                                <h4 class="title"><a href="view-user?id={{$data->id}}">{{$data->username}}
                                        , {{$data->age}}</a></h4>

                                <ul class="intrest">
                                    @php
                                        $cleanInterests = str_replace(['[', ']', '"'], '', $data->skills);
                                        $interests = explode(',', $cleanInterests);
                                    @endphp
                                    @foreach($interests as $interest)
                                        <li><span class="badge">{{ trim(strtoupper($interest)) }}</span></li>
                                    @endforeach
                                </ul>

                                {{--                                <p class="mt-3"><i class="bi bi-cash-stack"></i></i> ST - @if($data->country == "NG") ₦ @endif {{number_format($data->short_time, 2)}} |  OV - @if($data->country == "NG") ₦ @endif {{number_format($data->over_night, 2)}} </p>--}}


                            </div>
                            @auth
                                <a href="javascript:void(0);" class="dz-icon " data-bs-toggle="offcanvas"
                                   data-bs-target="#phonecanva{{$data->id}}" aria-controls="phonecanva"><i
                                        class="bi bi-telephone-forward"></i></a>

                            @else
                                <a href="login1" class="dz-icon dz-sp-like"><i class="bi bi-box-arrow-in-right"></i></a>

                            @endauth
                        </div>
                        <div class="dzSwipe_card__option dzReject">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <div class="dzSwipe_card__option dzLike">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <div class="dzSwipe_card__option dzSuperlike">
                            <h5 class="title mb-0">Super Like</h5>
                        </div>
                        <div class="dzSwipe_card__drag"></div>
                    </div>


                    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="phonecanva{{$data->id}}">
                        <button type="button" class="btn-close drage-close" data-bs-dismiss="offcanvas"
                                aria-label="Close">
                        </button>
                        <div class="offcanvas-header share-style m-0 pb-0">
                            <h5 class="title">Call {{$data->username}}</h5>

                        </div>

                        <div class="offcanvas-body mb-5">
                            <div class="radio style-3">
                                <a  href="tel:{{$data->phone}}" class="btn btn-gradient btn-shadow w-100">{{$data->phone}}   </a>


                            </div>
                        </div>


                    </div>

                @endforeach


            </div>
        </div>
    </div>
    <!-- Page Content End -->

    <!-- Menubar -->
    <div class="menubar-area style-3 footer-fixed">
        <div class="toolbar-inner menubar-nav">
            <a href="home.html" class="nav-link active">
                <i class="fa-solid fa-house"></i>
            </a>
            <a href="explore.html" class="nav-link">
                <i class="flaticon flaticon-magnifying-glass"></i>
            </a>
            <a href="wishlist.html" class="nav-link">
                <i class="flaticon flaticon-sparkle"></i>
            </a>
            <a href="chat-list.html" class="nav-link">
                <i class="flaticon flaticon-chat-2"></i>
            </a>
            <a href="profile.html" class="nav-link">
                <i class="fa-solid fa-user"></i>
            </a>
        </div>
    </div>
    <!-- Menubar -->

    <!--  Setting OffCanvas -->
    <div class="offcanvas offcanvas-bottom container p-0" tabindex="-1" id="settingCanvas">
        <button type="button" class="btn-close drage-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <div class="offcanvas-header share-style m-0">
            <h5 class="title mb-0">Discovery Setting</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                    class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="offcanvas-body">
            <div class="dz-slider mb-3">
                <div class="slider-head">
                    <h6 class="title mb-0">Maximum Distance</h6>
                    <div class="title font-w600 font-16">
                        <span class="example-val title slider-margin-value-min"></span>
                        <span class="example-val title slider-margin-value-max"></span>
                    </div>
                </div>
                <div class="slider-body">
                    <div class="range-slider style-1 w-100">
                        <div id="slider-tooltips3"></div>
                    </div>
                </div>
            </div>
            <div class="show-me mb-3">
                <h6 class="title">Show Me</h6>
                <a href="javascript:void(0);"
                   class="btn d-flex align-items-center justify-content-between btn-primary light py-2 px-3 font-14"
                   data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom4" aria-controls="offcanvasBottom">
                    <span class="text-start d-block">Women</span>
                    <i class="font-20 icon feather icon-chevron-right"></i>
                </a>
            </div>
            <div class="dz-slider">
                <div class="slider-head">
                    <h6 class="title mb-0">Age Range</h6>
                    <div class="title font-w600 font-16">
                        <span class="example-val title slider-margin-value-min"></span>
                        <span class="example-val title slider-margin-value-max"></span>
                    </div>
                </div>
                <div class="slider-body">
                    <div class="range-slider style-1 w-100">
                        <div id="slider-tooltips4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Setting OffCanvas -->

    <!--  Show Me OffCanvas -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom4">
        <button type="button" class="btn-close drage-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <div class="offcanvas-header share-style m-0 pb-0">
            <h5 class="title">Show Me</h5>
        </div>
        <div class="offcanvas-body">
            <div class="radio style-3">
                <label class="radio-label">
                    <input type="radio" checked="checked" name="radio2">
                    <span class="checkmark">
						<span class="text">Women</span>
					</span>
                </label>
                <label class="radio-label">
                    <input type="radio" name="radio2">
                    <span class="checkmark">
						<span class="text">Men</span>
					</span>
                </label>
                <label class="radio-label">
                    <input type="radio" name="radio2">
                    <span class="checkmark">
						<span class="text">Everyone</span>
					</span>
                </label>
            </div>
        </div>
    </div>
    <!--  Show Me OffCanvas -->

@endsection
