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
                <div class="col-md-12 mx-0 mb-3 text-center mx-auto">
                    <div class="row">
                        <div class="col-md-6 mx-auto text-center">
                            <img src="{{ asset('storage/'.$post->cover_photo) }}" class="img-fluid">
                        </div>
                    </div>
                    <span class="text-muted"> <i class="fa fa-calendar"></i> {{ $post->created_at }}</span>
                    <h3>{{ $post->title }}</h3>

                    {!! $post->body !!}
                </div>
            </div>

        </section>
        <!-- === ENDCONTENT === -->
    </div>
@endsection
