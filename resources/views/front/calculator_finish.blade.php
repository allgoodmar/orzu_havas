@extends('layouts.myapp')
@section('title', 'Finish - Orzu Havas')
@section('content')

<main class="main">

    <section class="content-header">
        <div class="container">
        </div>
    </section>

    <div class="container py-4 py-lg-5 mt-5">

        <div class="col-md-6 mx-auto p-2 shadow mt-1" style="border-radius: 24px;">
            <p>
                {!! __("main.calculator_finish_text") !!}
            </p>
        </div>

    </div>

</main>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            setTimeout(function() {
                window.location.href = 'https://allgood.uz';
            }, 10000); // 10 seconds
        });
    </script>
@endsection