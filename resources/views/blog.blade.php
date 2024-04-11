@extends('layouts.front')

@section('title')

    <title>شركة وايت الرياض 0575322403</title>
@endsection

@section('content')

    <section class="banner-area relative">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        شركة وايت الرياض - وايت شفط وتسليك مجاري بالرياض
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
                @if(isset($articles))
                    @foreach($articles as $article)

                        <!-- Start Single Blog -->
                            <article class="single-blog mb-3">
                                <!-- blog image -->
                                @if(isset($article->image))
                                    <div class="blog-img">
                                        <a href="{{route('articles.show', $article->slug)}}">
                                            <img src="{{ asset('assets/Articles/img/'. $article->image) }}"
                                                 class="img-fluid"
                                                 alt="شركة وايت الرياض - وايت صرف صحي بالرياض">
                                        </a>
                                        <!-- blog info date & writter -->

                                    </div>
                            @endif

                            <!-- blog header -->
                                <div class="blog-content">
                                    <h2 class="my-3">
                                        {{ $article->title }}
                                    </h2>
                                    <div>{!! $article->description !!}</div>
                                </div>
                            </article>
                            <!-- End Single Blog -->

                        @endforeach

                    @endif
                </div>

            </div>


        </div>
    </section>




@endsection
