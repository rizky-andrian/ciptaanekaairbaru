@extends('layouts.front')

@section('konten')
    <style>

        .marquee,
        .marquee-reverse {
            display: flex;
            gap: 20px;
            align-items: center;
            margin-bottom: 50px;
            overflow: hidden;
            white-space: nowrap;
        }

        .marquee-item {
            text-align: center;
            display: inline-block;
        }

        .marquee-item img {
            width: 230px;
            height: auto;
            display: block;
            margin: 0 auto 10px;
        }

        .marquee-item p {
            font-size: 12px;
            color: #575757;
            margin-top: 5px;
        }

        .marquee-reverse {
            flex-direction: row-reverse;
        }



        @keyframes marquee-left {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(-100%);
            }
        }

        .marquee {
            animation: marquee-left 15s linear infinite;
        }

        @keyframes marquee-right {
            from {
                transform: translateX(-100%);
            }

            to {
                transform: translateX(100%);
            }
        }

        .marquee-reverse {
            animation: marquee-right 15s linear infinite;
        }
    </style>
    {{-- Slider Components --}}
    <div class="m-5">
        @include('components.slider')
    </div>
    {{-- End Slider Components --}}
    {{-- Intro Section --}}
    <section class="w-full bg-slate-100 max-w-screen-lg mx-auto relative rounded-br-panel1 p-3">
        <div class="max-w-screen-lg mx-auto py-8 text-gray-800 ">
            <div class="m-8 flex flex-col gap-5">
                <div>
                    <h2 class="text-3xl text-gray-700">{{ $intro->title }}</h2>
                    <span class="text-xl text-primary italic ">Trusted partner and authorized distributor for the
                        best
                        brand
                        and product in Water Technologies
                    </span>
                </div>
                <p class=" text-gray-900 text-lg text-justify "> {!! $intro->content !!}</p>
            </div>
        </div>
        <div class="absolute flex justify-end -top-16 w-full collapse md:visible">
            <img class="max-h-40 -mr-24 drop-shadow-lg" src="./assets/img/caa-logo.png" alt="">
        </div>
        <div class="absolute -top-6  flex justify-start w-full ">
            <h1 class="py-2 px-10 bg-caa-primary text-xl text-gray-100">Introduction</h1>
        </div>
    </section>
    {{-- END  Intro Section --}}
    {{-- History Of 12 Years of CAA --}}
    <div class="mb-4">
        @include('components.history')
    </div>
    {{-- End History of Caa --}}
    {{-- Why Choose Us --}}
    <div class="mb-4">
        @include('components.why-choose-us')
    </div>
    {{-- End Why Choose Us --}}

    {{-- Product Explore --}}
    <div class="mb-4">
        @include('components.produk-kategori-card')
    </div>
    {{-- End Product Explore --}}

    {{-- Latest News --}}
    <div class="mb-4">
        @include('components.news-card')
    </div>
    {{-- End Latest News --}}
    {{-- Customer Card --}}
    <div class="mb-4">
        @include('components.customer-card')
    </div>
    {{-- End Customer Card --}}

    {{-- Download Center Section --}}
    <div class="mb-4">
        @include('components.download-center-card')
    </div>
    {{-- END  Download Center Section --}}
@endsection
