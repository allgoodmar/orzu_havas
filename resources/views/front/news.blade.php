@extends('layouts.myapp')
@section('title', 'Shops')
@section('content')
    <!-- === FILTER === -->
    <div class="container mt-5 pt-2">

        <section class="mt-5">
            <div class="filter_content gap-3 w-100">
                <h3>@lang('main.news')</h3>
            </div>
        </section>



        <!-- === CONTENT === -->
        <section class="mt-4">

            <div class="row">
                @foreach ($posts as $item)
                <div class="col-md-4 mx-0 mb-3 carousel-cell rounded__xl text-center">
                    <a href="{{ route('anasiyashowone', ['id' => $item->id]) }}">
                        <div class="background__img bg_1">
                            <img src="{{ asset('storage/'.$item->cover_photo) }}" alt="banner">
                        </div>
                    </a>
                    <a href="{{ route('anasiyashowone', ['id' => $item->id]) }}" class="mt-4" style="font-size: 18px!important; color: rgb(37, 37, 69)!important;">
                        {{ Illuminate\Support\Str::limit(strip_tags($item->title), $limit = 50, $end = '...') }}
                    </a>
                </div>
                @endforeach
            </div>

        </section>
        <!-- === ENDCONTENT === -->
    </div>
@endsection
