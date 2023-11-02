<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __("main.meta_title") }}</title>

    <meta name="description" content="{{ __("main.meta_description") }}"/>
    <meta name="keywords" content="Рассрочка в Узбекистане, Рассрочка в Ташкенте, Alif Nasiya, Uzum Nasiya, Paymart, Intend, Anor Bank, Zmarket, рассрочка AllGood Nasiya, muddatli to'lov, Omonat, Amonat, TBC, APEX, кредит, Kredit."/>
    <meta name="robots" content="INDEX, FOLLOW, MAX-IMAGE-PREVIEW:LARGE, MAX-SNIPPET:-1, MAX-VIDEO-PREVIEW:-1"/>
    
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/OrzuBanners/FaviconOrzu_Havas.ico') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <!-- ==== FONTS ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ==== ENDFONTS ===== -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">


    <!-- ==== ICONS ===== -->
    <script src="https://kit.fontawesome.com/c4c779c735.js" crossorigin="anonymous"></script>
    <!-- ==== ENDICONS ===== -->

    <!-- ==== SWIPER ===== -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- ==== ENDSWIPER ===== -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4KBCY9PFBD"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-4KBCY9PFBD');
    </script>

</head>

<body>


    <!-- ==== NAV ===== -->
    <nav class="navb">
        <div class="container">
            <div class="d-flex">
                <div class="menu">
                    <i class="fa-solid fa-bars"></i>
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('assets/images/orzuhavas.png') }}" width="150" alt="">
                    </a>
                </div>
                <div class="menu_section d-flex w-100">

                    <div class="links">
                        <ul class="link__main">
                            <li><a href="{{ route('shops') }}">@lang('main.header1')</a></li>
                            <li><a href="{{ route('anasiyashowfull') }}">@lang('main.news')</a></li>
                            <li><a href="https://merchant.allgood.uz/">@lang('main.header2')</a></li>
                        </ul>
                        <ul class="link__regster">
                            <li><a href="tel:+998932674455"><i class="bi bi-telephone-fill"></i> +998 93 267 44 55</a></li>
                            @if (app()->getLocale() == 'uz')
                                <li><a href="{{ route('lang', ['lang'=>'ru']) }}"> <i class="bi bi-globe"></i> @lang('main.header6')</a></li>
                            @else
                                <li><a href="{{ route('lang', ['lang'=>'uz']) }}"> <i class="bi bi-globe"></i> @lang('main.header5')</a></li>
                            @endif
                            <li><a href="https://merchant.allgood.uz/">@lang('main.header3')</a></li>
                            <li><a href="https://merchant.allgood.uz/">@lang('main.header4')</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <a href="tel:+998940163313" class="d-block d-sm-none mr-5 CTAphone">
            <i class="bi bi-telephone-fill p-2" style="font-size: 30px; background-color: rgb(232, 230, 230); border-radius: 10%; color: rgb(57, 57, 57);"></i>
        </a>
    </nav>
    <!-- ==== ENDNAV ===== -->
    @yield('content')



    <!-- ====== FOOTER ====== -->
    <footer class="container">
        <div class="d-flex justify-content-between pt-5 pb-5">
            <div class="social d-flex gap-4">
                <a href="https://t.me/allgood_scmanager" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                <a href="https://www.instagram.com/allgood.uz" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <div class="foo_txt d-flex">
                <b class="foo_year"></b>&nbsp; <p class="pr-2">Orzu-Havas</p>
                &nbsp; &nbsp;
                <a href="#">
                    <i class="fa-solid fa-file" style="color: #999;"></i>
                    <u>@lang('main.footer1')</u>
                </a>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
        var year = new Date();
        document.querySelector('.foo_year').innerHTML = year.getFullYear();
    </script>
    <!-- ====== ENDFOOTER ====== -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(function(){
            $('.menu').on('click', function(){
                $('.CTAphone').toggleClass('d-none', 'd-block');
            });
        });
    </script>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Include Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
          var mySwiper = new Swiper('.swiper', {
            effect: 'slide',
            speed: 600,
            loop: true, // Loop the slider
            autoplay: {
              delay: 5000, // 3 seconds
            },
            pagination: {
              el: '.swiper-pagination',
              clickable: true, // Allow pagination bullets to be clickable
            },
            // Add other Swiper options here if needed
          });
        });
      </script>
      @yield('scripts')
    <!-- ==== SWIPER ===== -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <!-- ==== ENDSWIPER ===== -->
</body>

</html>
