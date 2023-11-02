@extends('layouts.myapp')
@section('title', 'Shops')
@section('content')
    <!-- === FILTER === -->
    <div class="container-fluid mt-5 pt-2">
        <section class="mt-5">

            <div class="filter_content gap-3 w-100">
                <div class="d-flex justify-content-between gap-3 w-100">
                    <button class="btn mian_bg  shadow-none">
                        @lang('main.shop1')
                    </button>
                    <input type="text" class=" form-control shadow-none" placeholder="@lang('main.shop2')">
                </div>

                <!-- <div class="as_tabs">
                    <button class="btn mian_bg  shadow-none">
                        Barchasi
                    </button>
                    <button class="btn border shadow-none">
                        Onlayn
                    </button>
                    <button class="btn border shadow-none">
                        Offlayn
                    </button>
                </div>

                <div class="detail_filter w-100">
                    <input type="text" class="form-control shadow-none" placeholder="Shahar">
                    <input type="text" class="form-control shadow-none" placeholder="Tuman" disabled>

                    <select class="form-select shadow-none" aria-label="Default select example">
                        <option selected>Toifalar</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <input type="text" class="form-control shadow-none" placeholder="Qidirish">
                </div> -->

            </div>

        </section>

        <!-- === ENDFILTER === -->

        <!-- === CONTENT === -->
        <section class="mt-4">

            <div class="contents">
                <a href="javascript:;" class="content">
                    <img class="img-fluid"
                        src="{{ asset('assets/images/brands/brands/7saber.png') }}"
                        alt="">
                    <h2 class="brands">7Saber</h2>
                    <p>@lang('main.shop_info_7saber')</p>
                </a>
                <a href="javascript:;" class="content">
                    <img class="img-fluid"
                        src="{{ asset('assets/images/brands/brands/Elmakon.png') }}"
                        alt="">
                    <h2 class="brands">Elmakon</h2>
                    <p>@lang('main.shop_info')</p>
                </a>
                <a href="javascript:;" class="content">
                    <img class="img-fluid"
                        src="{{ asset('assets/images/brands/brands/mi.png') }}"
                        alt="">
                    <h2 class="brands">Mi</h2>
                    <p>@lang('main.shop_info')</p>
                </a>
                <a href="javascript:;" class="content">
                    <img class="img-fluid"
                        src="{{ asset('assets/images/brands/brands/radius.png') }}"
                        alt="">
                    <h2 class="brands">Radius</h2>
                    <p>@lang('main.shop_info')</p>
                </a>
                <a href="javascript:;" class="content">
                    <img class="img-fluid"
                        src="{{ asset('assets/images/brands/brands/TashkentCityMall.png') }}"
                        alt="">
                    <h2 class="brands">TashkentCityMall</h2>
                    <p>@lang('main.shop_info')</p>
                </a>
                <a href="javascript:;" class="content">
                    <img class="img-fluid"
                        src="{{ asset('assets/images/brands/brands/Vivo.png') }}"
                        alt="">
                    <h2 class="brands">Vivo</h2>
                    <p>@lang('main.shop_info')</p>
                </a>
                <a href="javascript:;" class="content">
                    <img class="img-fluid"
                        src="{{ asset('assets/images/brands/Allgood.png') }}"
                        alt="">
                    <h2 class="brands">AllGood</h2>
                    <p>@lang('main.shop_info')</p>
                </a>
                <a href="javascript:;" class="content">
                    <img class="img-fluid"
                        src="{{ asset('assets/images/brands/artel.png') }}"
                        alt="">
                    <h2 class="brands">Artel</h2>
                    <p>@lang('main.shop_info')</p>
                </a>
                <a href="javascript:;" class="content">
                    <img class="img-fluid"
                        src="{{ asset('assets/images/brands/bellstore.png') }}"
                        alt="">
                    <h2 class="brands">BellStore</h2>
                    <p>@lang('main.shop_info_bellstore')</p>
                </a>
                <a href="javascript:;" class="content">
                    <img class="img-fluid"
                        src="{{ asset('assets/images/brands/DIDIT.png') }}"
                        alt="">
                    <h2 class="brands">DIDIT</h2>
                    <p>@lang('main.shop_info_didit')</p>
                </a>
                <a href="javascript:;" class="content">
                    <img class="img-fluid"
                        src="{{ asset('assets/images/brands/EDUMAX.png') }}"
                        alt="">
                    <h2 class="brands">EDUMAX</h2>
                    <p>@lang('main.shop_info_edumax')</p>
                </a>
                <a href="javascript:;" class="content">
                    <img class="img-fluid"
                        src="{{ asset('assets/images/brands/emir_credit.png') }}"
                        alt="">
                    <h2 class="brands">Emir Credit</h2>
                    <p>@lang('main.shop_info')</p>
                </a>
                <a href="javascript:;" class="content">
                    <img class="img-fluid"
                        src="{{ asset('assets/images/brands/galaxyShop.png') }}"
                        alt="">
                    <h2 class="brands">Galaxy Shop</h2>
                    <p>@lang('main.shop_info')</p>
                </a>
                <a href="javascript:;" class="content">
                    <img class="img-fluid"
                        src="{{ asset('assets/images/brands/idea.png') }}"
                        alt="">
                    <h2 class="brands">IDEA</h2>
                    <p>@lang('main.shop_info')</p>
                </a>
                <a href="javascript:;" class="content">
                    <img class="img-fluid"
                        src="{{ asset('assets/images/brands/iHoops.png') }}"
                        alt="">
                    <h2 class="brands">iHoops</h2>
                    <p>@lang('main.shop_info')</p>
                </a>
                <a href="javascript:;" class="content">
                    <img class="img-fluid"
                        src="{{ asset('assets/images/brands/texnomart.png') }}"
                        alt="">
                    <h2 class="brands">Texnomart</h2>
                    <p>@lang('main.shop_info')</p>
                </a>
            </div>

        </section>
        <!-- === ENDCONTENT === -->
    </div>
@endsection
