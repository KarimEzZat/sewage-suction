@extends('layouts.front')

@section('title')

    <title>{{ isset($article) ? $article->title : 'المدونة' }}شركة وايت الرياض 0575322403 - </title>
@endsection

@section('content')

    <section class="banner-area relative">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        {{ isset($article) ? $article->title : 'المقالات' }}
                    </h1>
                    <p class="link-nav">
                            <span class="box transition">
                                <a href="{{route('welcome')}}">الرئيسيه </a>
                            </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-area section-gap">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                @if(isset($article))

                    <!--Start Single Blog -->
                        <div class="single-blog mb-3">
                            <div class="blog-img mb-3">
                                <img src="{{ asset('assets/Articles/img/'. $article->image) }}" class="img-fluid"
                                     alt="شركة وايت الرياض - وايت شفط صرف صحي بالرياض">
                                <!--blog info date & writter -->
                            </div>
                            <!--blog header -->
                            <div class="blog-content">

                                <div>{!! $article->description  !!}</div>
                            </div>
                        </div>
                        <!--End Single Blog -->
                    @endif
                </div>
            </div>

        </div>
    </section>

@endsection
