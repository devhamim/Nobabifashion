<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    @if($setting->first()->title != null)
        <title>{{$setting->first()->title}}</title>
    @endif
    <!-- <meta name="robots" content="noindex, follow" /> -->
    <meta name="AdsBot-Google" content="noindex follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Favicon -->
    @if($setting->first()->favicon != null)
        <link rel="shortcut icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">
    @endif

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <link rel="stylesheet" href="{{ asset('landingpage') }}/css/vendor/icofont.min.css" />
    <link rel="stylesheet" href="{{ asset('landingpage') }}/css/vendor/line-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('landingpage') }}/css/vendor/simple-line-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Bangla:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{ asset('landingpage/css/plugins/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/css/plugins/slick.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('landingpage') }}/css/style.css" />

    <style>
        body {
            overflow-x: hidden;
        }

        .head-color {
            /* background: rgb(254,78,0);
            background: linear-gradient(90deg, rgba(254,78,0,1) 0%, rgba(0,124,234,1) 100%); */
            background: #000;
            color: #fff;
        }

        .responsive-iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }
    </style>

    <!-- Meta Pixel Code -->
    @if ($markatingsetting->first()->fb_pixel != null)
        {!! $markatingsetting->first()->fb_pixel !!}
    @endif
    {{-- <!-- End Meta Pixel Code --> --}}

    <!-- googletag Code -->
    @if ($markatingsetting->first()->google_tag != null)
        {!! $markatingsetting->first()->google_tag !!}
    @endif
    <!-- End googletag Code -->

</head>


<body class="font-poppins text-sm leading-loose">

    <!-- Hero section start -->
    <section class="hero-section relative" style="background: #0088FE24;">
        <div class="hero-slider overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt-4 m-auto">
                        <div class="logo text-center">
                            <a href="{{ url('/') }}" class="mb-1">
                                @if($setting->first()->black_logo != null)
                                    <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->black_logo }}" width="160px" alt="Logo">
                                @else
                                    <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" width="160px" alt="Logo">
                                @endif
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12 m-auto" style="width: 800px">
                        <div class="grid grid-rows-1 grid-flow-col gap-4 text-center">
                            <div class="text-center text-white">
                                <h2 class="btn btn-seccess text-white landing_header">Modina Dying >টু পিস জামা+ওড়না ১ সেট>৬০ বডি</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6 text-white">
                            <div class="video_left">
                                <ul>
                                    <li>
                                        <img width="16px" draggable="false" role="img" class="emoji" alt="✅" src="https://s.w.org/images/core/emoji/15.0.3/svg/2705.svg">
                                        মদীনা প্রিন্ট করা কালার ১০০% গ্যারান্টি।
                                    </li>
                                    <li>
                                        <img width="16px" draggable="false" role="img" class="emoji" alt="✅" src="https://s.w.org/images/core/emoji/15.0.3/svg/2705.svg">
                                        লং ৪৭"+ ফেব্রিক্স ১০০%কটন।
                                    </li>
                                    <li>
                                        <img width="16px" draggable="false" role="img" class="emoji" alt="✅" src="https://s.w.org/images/core/emoji/15.0.3/svg/2705.svg">
                                        জামা+ওরনা টু পিস।
                                    </li>
                                    <li>
                                        <img width="16px" draggable="false" role="img" class="emoji" alt="✅" src="https://s.w.org/images/core/emoji/15.0.3/svg/2705.svg">
                                        পায়জামার কাপড় থাকবে না।
                                    </li>
                                    <li>
                                        <img width="16px" draggable="false" role="img" class="emoji" alt="✅" src="https://s.w.org/images/core/emoji/15.0.3/svg/2705.svg">
                                        বডি ৬০"পর্যন্ত বানাতে পারবেন।
                                    </li>
                                    <li>
                                        <img width="16px" draggable="false" role="img" class="emoji" alt="✅" src="https://s.w.org/images/core/emoji/15.0.3/svg/2705.svg">
                                        ওড়নার কাপড় দেওয়া আছে ৫ হাত।
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 text-white text-end">
                            <div class="video_right">
                                <img src="{{ asset('landingpage/images/product/s-1.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="grid grid-rows-1 grid-flow-col gap-4 text-end">
                            <div class="text-center mb-2 text-white">
                                <a href="https://api.whatsapp.com/send?phone={{$setting->first()->number_two}}&text=Hello%20there,%20I%20found%20you%20on%20website!%20i%20would%20like%20to%20talk%20about%20your%20service." class="btn btn-seccess text-white mobile_btn" style="background: #2BB31D" target="_blank">
                                    <i class="fa-brands fa-whatsapp" style="color: #ffffff;"></i>
                                    হোয়াটস্যাপ মেসেজ দিন
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 m-auto">
                        <div class="grid grid-rows-1 grid-flow-col gap-4 text-start">
                            <div class="text-center mb-2 text-white">
                                <a href="#order" class="btn btn-seccess mobile_btn text-white">অনলাইনে অর্ডার করুন</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination mb-5 md:mb-0"></div>
            <!-- swiper navigation -->
        </div>
    </section>
    <!-- Hero section end -->
    <div class="elementor-shape elementor-shape-bottom" data-negative="true" style="background: #0088FE24;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path style="color: #fff; background: #fff" class="elementor-shape-fill" d="M761.9,40.6L643.1,24L333.9,93.8L0.1,1H0v99h1000V1"></path>
        </svg>
    </div>

    <!-- Product section start -->
    <section class="product-section">
        <div class="container">
            <div class="row">
                <div class="col-ls-12">
                    <div class="autoplay">
                        <div class="px-3">
                            <img src="{{ asset('landingpage/images/product/1.jpg') }}" alt="">
                        </div>
                        <div class="px-3">
                            <img src="{{ asset('landingpage/images/product/2.jpg') }}" alt="">
                        </div>
                        <div class="px-3">
                            <img src="{{ asset('landingpage/images/product/3.jpg') }}" alt="">
                        </div>
                        <div class="px-3">
                            <img src="{{ asset('landingpage/images/product/4.jpg') }}" alt="">
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- Product section end -->

{{--
    <!-- Service section Start -->
    <div class="pt-5 subject-color" style=" font-weight: 700; font-size:  18px">
        <div class="container">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12">
                    <section class="relative visa_part">
                        <div class="row mb-4">
                            <div class="col-lg-12 m-auto">
                                <h2 class="text-center mt-3">ভিসার ধারণ ও পেমেন্ট সিস্টেম :</h2>
                                <h4 class="my-5 text-center">আমরা সাধারানত দুইটি নিয়মে সৌদি আরবের ১ বছরের ভিসা করে
                                    থাকি।</h4>
                                <p class="text-center">অপশন: এক. বাংলাদেশ থেকে ইস্যুড (সৌদি পার্সনাল ভিজিট ভিসা)</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 m-auto">
                                <div class="service_left">
                                    <ul class="text-center">
                                        <li>
                                            প্রসেস টাইম: ৪০-৪৫ কর্ম দিবস।
                                        </li>
                                        <li>
                                            মোট খরচ: ৬৫,০০০ টাকা
                                        </li>
                                        <li>
                                            নোট: কোন কারণে যদি ভিসা রিজেক্ট হয় সেক্ষত্রে ২৫,০০০ টাকা ডেমারেজ যাবে।
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12 m-auto">
                                <div class="grid grid-rows-1 grid-flow-col gap-4 text-end">
                                    <div class="text-center mb-2 text-white">
                                        <a href="https://api.whatsapp.com/send?phone={{$setting->first()->number_two}}&text=Hello%20there,%20I%20found%20you%20on%20website!%20i%20would%20like%20to%20talk%20about%20your%20service." class="btn btn-seccess text-white mobile_btn" style="background: #2BB31D" target="_blank">
                                            <i class="fa-brands fa-whatsapp" style="color: #ffffff;"></i>
                                            হোয়াটস্যাপ মেসেজ দিন
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 m-auto">
                                <div class="grid grid-rows-1 grid-flow-col gap-4 text-start">
                                    <div class="text-center mb-2 text-white">
                                        <a href="#order" class="btn btn-seccess mobile_btn text-white">অনলাইনে অর্ডার করুন</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- Service section End -->
    <!-- Service section Start -->
    <div class=" pt-5 subject-color" style="background: #0088FE24; color: #000; font-weight: 700; font-size:  18px">
        <div class="container">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12">
                    <section class="relative visa_part">
                        <div class="row mb-4">
                            <div class="col-lg-12 m-auto">
                                <h4 class="text-center">অপশন: দুই. (GCC-গালফ কান্ট্রি) থেকে ইস্যুড (সৌদি মাল্টিপল ভিজিট
                                    ভিসা)</h4>
                            </div>
                        </div>
                        <div class="row my-5">
                            <div class="col-lg-12 m-auto">
                                <div class="service_left">
                                    <ul class="text-center">
                                        <li>
                                            প্রসেস টাইম: ২-৩ কর্ম দিবস।
                                        </li>
                                        <li>
                                            ডকুমেন্ট : পাসপোর্ট ও ছবি।
                                        </li>
                                        <li>
                                            মোট খরচ: ১৭,০০০ অথবা ৩০,০০০ টাকা।
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-12 m-auto">
                                <p class="my-4 text-center">ভিসা ফি ১৭,০০০ (কোন কারনে ভিসা রিজেক্ট হলে ভিসা ফি নন
                                    রিফান্ডবেল (তথা ভিসা ফি রিফান্ড পাবেন না। )</p>
                                <p class="text-center">নোট: এটি কাতার থেকে ইস্যুড ভিসা কোন কারনে যাত্রী না যেতে পারলে
                                    এর দায়ভার আমরা নিবনা সুতারং বুঝে শুনে Application করবেন।</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12 m-auto">
                                <div class="grid grid-rows-1 grid-flow-col gap-4 text-end">
                                    <div class="text-center mb-2 text-white">
                                        <a href="https://api.whatsapp.com/send?phone={{$setting->first()->number_two}}&text=Hello%20there,%20I%20found%20you%20on%20website!%20i%20would%20like%20to%20talk%20about%20your%20service." class="btn btn-seccess text-white mobile_btn" style="background: #2BB31D" target="_blank">
                                            <i class="fa-brands fa-whatsapp" style="color: #ffffff;"></i>
                                            হোয়াটস্যাপ মেসেজ দিন</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 m-auto">
                                <div class="grid grid-rows-1 grid-flow-col gap-4 text-start">
                                    <div class="text-center mb-2 text-white">
                                        <a href="#order" class="btn btn-seccess mobile_btn text-white">অনলাইনে অর্ডার করুন</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- Service section End --> --}}

    <!-- Product section start -->
    <section class="product-section py-24">
        <div class="container product_border">
            <div class="row">
                <div class="pt-5 subject-color" style="font-weight: 700; font-size:  18px">
                    <div class="container">
                        <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-12">
                                <section class="relative ">
                                    <div class="row mb-4">
                                        <div class="col-lg-12 m-auto">
                                            <h3 class="text-center">টু পিস রেগুলার প্রাইস ১৩৫০ টাকা। বর্তমান অফার প্রাইস ৯৫০ টাকা মাত্র।</h3>
                                        </div>
                                    </div>
                                    <div class="row py-3">
                                        <div class="col-lg-12 m-auto">
                                            <div class="service_left">
                                                <ul class="text-center">
                                                    <li>
                                                       * ২ টি ড্রেস অর্ডার করলে ডেলিভারি চার্জ ফ্রি।
                                                    </li>
                                                    <li>
                                                       * আমরা নিজস্ব কারখানায় ২০১২ সাল থেকে ইসলামপুরে পোশাক তৈরি করে আসছি।
                                                    </li>
                                                    <li>
                                                       * আমাদের সকল কাপড় প্রস্তুত করি।জামা ও ওড়নার কাপড় সম্পুর্ন সুতি।
                                                    </li>
                                                    <li>
                                                       * আমাদের মোবাইল নাম্বারে ২৪ ঘন্টা কলে পাওয়া যাবে।
                                                    </li>
                                                    <li>
                                                       * যদি প্রডাক্টে কোন সমস্যা থাকে উক্ত প্রডাক্টের ছবি বা ভিডিও করে আমাদের ফেসবুক মেসেঞ্জার অথবা হোয়াটসঅ্যাপ এ দিবেন। যদি সমস্যা যুক্তিযুক্ত মনে হয়, তাহলে আমরা বিনা ডেলিভারি চার্জে প্রডাক্ট এক্সচেন্জ করে দিব।
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-ls-12">
                    <div class="autoplay">
                        <div class="px-3">
                            <img src="{{ asset('landingpage/images/product/11.jpg') }}" alt="">
                        </div>
                        <div class="px-3">
                            <img src="{{ asset('landingpage/images/product/22.jpg') }}" alt="">
                        </div>
                        <div class="px-3">
                            <img src="{{ asset('landingpage/images/product/2.jpg') }}" alt="">
                        </div>
                        <div class="px-3">
                            <img src="{{ asset('landingpage/images/product/44.jpg') }}" alt="">
                        </div>
                    </div>

                </div>
                <div class="row pt-5">
                    <div class="col-lg-12 m-auto">
                        <div class="text-center">
                            <h4>📳আরও বিস্তারিত জানতে যোগাযোগ করুন:</h4>
                            <h4 class="pt-3">+{{$setting->first()->number_two}} ( Whatsapp )</h4>
                        </div>
                    </div>
                    <div class="col-lg-6 m-auto">
                        <div class="grid grid-rows-1 grid-flow-col gap-4 text-end">
                            <div class="text-center mb-2 text-white">
                                <a href="https://api.whatsapp.com/send?phone={{$setting->first()->number_two}}&text=Hello%20there,%20I%20found%20you%20on%20website!%20i%20would%20like%20to%20talk%20about%20your%20service." class="btn btn-seccess text-white mobile_btn" style="background: #2BB31D" target="_blank">
                                    <i class="fa-brands fa-whatsapp" style="color: #ffffff;"></i>
                                    হোয়াটস্যাপ মেসেজ দিন
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 m-auto">
                        <div class="grid grid-rows-1 grid-flow-col gap-4 text-start">
                            <div class="text-center mb-2 text-white">
                                <a href="#order" class="btn btn-seccess mobile_btn text-white">অনলাইনে অর্ডার করুন</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Product section end -->

    <!-- News Letter section start -->
    <section class="news-letter-section py-5" style="background: #0088FE24; color: #000; font-weight: 700;">
        <div class="container form_border">
            <div class="grid gap-4">
                <div class="col-span-12 visa_part">
                    <div class="section-title text-center pb-14">
                        <h2 class="my-4">অর্ডার করতে নিচের ফর্মটি পূরন করুন</h2>
                        <p >২ টি ড্রেস অর্ডার করলে ডেলিভারি চার্জ ফ্রি।</p>
                    </div>
                </div>
                <div id="order" class="col-span-12">
                    <form action="{{ route('sharee.order.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Your Products</h3>
                                <!-- Product Options Table -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- Product Row 1 -->
                                        <div class="product_box">
                                            <input type="radio" id="product_1" name="radio_btn" value="1" data-product-name="Modina Dying >টু পিস জামা+ওড়না ১ সেট>৬০ বডি" data-quantity="1" data-price="950" data-image="{{ asset('landingpage/images/product/1.jpg') }}" checked="checked">
                                            <img src="{{ asset('landingpage/images/product/1.jpg') }}" alt="" width="80" height="80">
                                            <div class="box-content">
                                                <label for="product_1">Modina Dying >টু পিস জামা+ওড়না ১ সেট>৬০ বডি x 1</label>
                                                <label for="product_1">৯৫০৳</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- Product Row 2 -->
                                        <div class="product_box">
                                            <input type="radio" name="radio_btn" id="product_2" value="2" data-product-name="Modina Dying >টু পিস জামা+ওড়না ১ সেট>৬০ বডি" data-quantity="2" data-price="1800" data-image="{{ asset('landingpage/images/product/2.jpg') }}">
                                            <img src="{{ asset('landingpage/images/product/2.jpg') }}" alt="" width="80" height="80">
                                            <div class="box-content">
                                                <label for="product_2">Modina Dying >টু পিস জামা+ওড়না ১ সেট>৬০ বডি x 2</label>
                                                <label for="product_2">১৮০০৳</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- Product Row 3 -->
                                        <div class="product_box">
                                            <input type="radio" id="product_3" name="radio_btn" value="3" data-product-name="Modina Dying >টু পিস জামা+ওড়না ১ সেট>৬০ বডি" data-quantity="3" data-price="2600" data-image="{{ asset('landingpage/images/product/11.jpg') }}">
                                            <img src="{{ asset('landingpage/images/product/11.jpg') }}" alt="" width="80" height="80">
                                            <div class="box-content">
                                                <label for="product_3">Modina Dying >টু পিস জামা+ওড়না ১ সেট>৬০ বডি x 3</label>
                                                <label for="product_3">২৬০০৳</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- Product Row 3 -->
                                        <div class="product_box">
                                            <input type="radio" id="product_4" name="radio_btn" value="4" data-product-name="Modina Dying >টু পিস জামা+ওড়না ১ সেট>৬০ বডি" data-quantity="4" data-price="3600" data-image="{{ asset('landingpage/images/product/22.jpg') }}">
                                            <img src="{{ asset('landingpage/images/product/22.jpg') }}" alt="" width="80" height="80">
                                            <div class="box-content">
                                                <label for="product_4">Modina Dying >টু পিস জামা+ওড়না ১ সেট>৬০ বডি x 4</label>
                                                <label for="product_4">৩৬০০৳</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <h5>Billing details</h5>
                                <div class="row">
                                    <div class="col-lg-12 my-3">
                                        <label class="form-label" for="">আপনার নাম <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="আপনার নাম" required>
                                        @error('name')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 my-3">
                                        <label class="form-label" for="">আপনার ঠিকানা লিখুন : <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="address" class="form-control"
                                            placeholder="গ্রাম/মহল্লা, থানা, জেলা" required>
                                        @error('address')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 my-3">
                                        <label class="form-label" for="">মোবাইল নাম্বার : <span
                                                class="text-danger">*</span></label>
                                        <input type="tel" name="mobile" class="form-control"
                                            placeholder="১১ ডিজিটের মোবাইল নাম্বার দিন" required>
                                        @error('mobile')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                        @error('mobile')
                                            <script>
                                                Swal.fire({
                                                    icon: "error",
                                                    title: "Oops...",
                                                    text: "Something went wrong!",
                                                });
                                            </script>
                                        @enderror
                                    </div>
                                    {{-- <div class="col-lg-6 my-3">
                                        <label class="form-label" for="">সাইজ : </label>
                                        <input type="text" name="size" class="form-control" placeholder="সাইজ লিখুন ( যেমন ৩২,৩৪ ইত্যাদি) *">
                                    </div> --}}
                                    <div class="col-lg-6 my-3">
                                        <label class="form-label" for="">কালার : </label>
                                        <input type="text" name="color" class="form-control" placeholder="কালার লিখুন(লাল,কালো, অ্যাশ,টিয়া) *">
                                    </div>
                                    <div class="col-lg-12 my-3">
                                        <label class="form-label" for="">Order notes (optional)</label>
                                        <textarea name="note" class="form-control" placeholder="এখানে লিখুন..." id="" cols="30" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="container">
                                    <!-- Your order -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>Your order</h3>
                                            <!-- Order Review Table -->
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-bordered woocommerce-checkout-review-order-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name">Product</th>
                                                            <th class="product-total">Subtotal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Sample Product Row -->
                                                        <tr class="cart_item">
                                                            <td class="product-name">
                                                                <div class="wcf-product-image">
                                                                    <div class="wcf-product-thumbnail">
                                                                        <img width="80" height="80"
                                                                            src="{{ asset('landingpage/images/product/1.jpg') }}"
                                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                            alt="">
                                                                        <a href="#" rel="nofollow"
                                                                            class="wcf-remove-product cartflows-icon cartflows-circle-cross"
                                                                            data-id="138"
                                                                            data-item-key="013d407166ec4fa56eb1e1f8cbe183b9"></a>
                                                                    </div>
                                                                    <div class="wcf-product-name">Modina Dying >টু পিস জামা+ওড়না ১ সেট>৬০ বডি x 1</div>
                                                                </div>
                                                                <strong class="product-quantity"></strong>
                                                            </td>
                                                            <td class="product-total">
                                                                <span class="woocommerce-Price-amount amount"><bdi>950<span
                                                                            class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span>
                                                            </td>
                                                        </tr>
                                                        <!-- Add more product rows as needed -->
                                                    </tbody>
                                                    <tfoot>
                                                        <tr class="cart-subtotal">
                                                            <th>Subtotal</th>
                                                            <td>
                                                                <input type="hidden" name="sub_total"
                                                                    value="950" id="">
                                                                <span class="woocommerce-Price-amount amount"><bdi>950<span
                                                                            class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span>
                                                            </td>
                                                        </tr>
                                                        <!-- Shipping Options -->
                                                        <tr class="woocommerce-shipping-totals shipping">
                                                            <th>Shipping</th>
                                                            <td data-title="Shipping">
                                                                <!-- Shipping Methods -->
                                                                <ul id="shipping_method" class="woocommerce-shipping-methods">
                                                                    <!-- Sample Shipping Method 1 -->
                                                                    <li style="display: flex">
                                                                        <input type="radio" name="shipping_cost" data-index="0" id="shipping_method_0_flat_rate2" value="70" class="shipping_method" checked="checked">
                                                                        <label for="shipping_method_0_flat_rate2">ঢাকার ভিতরে: <span class="woocommerce-Price-amount amount"><bdi>70<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span></label>
                                                                    </li>
                                                                    <!-- Sample Shipping Method 2 -->
                                                                    <li style="display: flex;">
                                                                        <input type="radio" name="shipping_cost" data-index="0" id="shipping_method_0_local_pickup3" value="120" class="shipping_method">
                                                                        <label for="shipping_method_0_local_pickup3">ঢাকার বাহিরে: <span class="woocommerce-Price-amount amount"><bdi>120<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span></label>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <!-- End Shipping Options -->
                                                        <!-- Order Total -->
                                                        <tr class="order-total">
                                                            <th>Total</th>
                                                            <td>
                                                                <input type="hidden" name="total"
                                                                    value="1020">
                                                                <strong><span
                                                                        class="woocommerce-Price-amount amount"><bdi>1020<span
                                                                                class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span></strong>
                                                            </td>
                                                        </tr>
                                                        <!-- End Order Total -->
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Payment Section -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="payment" class="woocommerce-checkout-payment">
                                                <!-- Payment Methods -->
                                                <ul class="wc_payment_methods payment_methods methods">
                                                    <!-- Cash on Delivery (COD) Method -->
                                                    <li class="wc_payment_method payment_method_bacs">
                                                        <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked" data-order_button_text="" style="display: none;">

                                                        <label for="payment_method_bacs">
                                                            ক্যাশঅন ডেলিভারি 	</label>
                                                                <div class="payment_box payment_method_bacs">
                                                                <p>Pay with cash upon delivery.</p>
                                                            </div>
                                                    </li>
                                                    <!-- Add more payment methods as needed -->
                                                </ul>

                                                <!-- Terms and Conditions -->
                                                <div class="form-row place-order">
                                                    <!-- Place Order Button -->
                                                    <button type="submit"
                                                        class="btn btn-warning w-100 mt-3 py-2 text-white mobile_btn"
                                                        style="background-color: #D01D3D;"
                                                        value="অর্ডার করুন">অর্ডার করুন</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- News Letter section end -->


        <!-- Vendors JS -->

        {{-- <script src="{{ asset('landingpage') }}/js/vendor/jquery-3.6.0.min.js"></script> --}}
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <!-- Plugins JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script src="{{ asset('landingpage/js/plugins/slick.min.js') }}"></script>

        <!-- Your existing HTML code -->

        <script>
            $(document).ready(function() {
                $('input[name="radio_btn"]').on('change', function() {
                    var productName = $(this).closest('tr').find('input[name="product_name"]').val();
                    var quantity = $(this).closest('tr').find('input[name="quantity"]').val();
                    var price = $(this).closest('tr').find('input[name="price"]').val();
                    var imageUrl = $(this).closest('tr').find('input[name="image"]').val();
                    updateOrderSection(productName, quantity, price, imageUrl);
                });

                function updateOrderSection(productName, quantity, price, imageUrl) {
                $('.woocommerce-checkout-review-order-table tbody').html(`
                    <tr class="cart_item">
                        <td class="product-name">
                            <div class="wcf-product-image">
                                <div class="wcf-product-thumbnail">
                                    <img width="80" height="80" src="${imageUrl}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="">
                                </div>
                                <div class="wcf-product-name">${productName} x <strong class="product-quantity">${quantity}</strong></div>
                            </div>
                        </td>
                        <td class="product-total">
                            <span class="woocommerce-Price-amount amount"><bdi>${price}<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span>
                        </td>
                    </tr>
                `);

                $('input[name="sub_total"]').val(price);
                updateTotal();
            }
            $('input[name="shipping_cost"]').on('change', function () {
                updateTotal();
            });

            function updateTotal() {
                    var subTotal = parseInt($('input[name="sub_total"]').val());
                    var shippingCost = parseInt($('input[name="shipping_cost"]:checked').val());
                    var total = subTotal + shippingCost;

                    $('input[name="total"]').val(total);
                    $('.cart-subtotal .woocommerce-Price-amount').html(`<bdi>${subTotal}<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi>`);
                    $('.order-total .woocommerce-Price-amount').html(`<bdi>${total}<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi>`);
                }

                // Event handler for radio button change
                $('input[name="radio_btn"]').on('change', function() {
                    var productName = $(this).data('product-name');
                    var quantity = $(this).data('quantity');
                    var price = $(this).data('price');
                    var imageUrl = $(this).data('image');
                    updateOrderSection(productName, quantity, price, imageUrl);
                });
            });
        </script>

        <script type="text/javascript">
            $('.autoplay').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                responsive: [
                    {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    },
                    },
                    {
                    breakpoint: 1008,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    },
                    },
                    {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                    },
                ],
            });
        </script>

        @if (session('success'))
            {
            <script>
                Swal.fire({
                    icon: "success",
                    title: "Success...",
                    text: "Your order have been success",
                });
            </script>
            }
        @endif
        @if (session('error'))
            {
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something went wrong!",
                    footer: '<a href="#">Why do I have this issue?</a>'
                });
            </script>
            }
        @endif

</body>

</html>
