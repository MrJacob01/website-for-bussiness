@extends('layouts.app')

@section('title', 'Slug')

@section('content')

<main>

<section class="rs-postbox-area section-space">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-8 col-lg-8">
                <div class="rs-postbox-wrapper">
                
                    <h2>{{ $subcategory->name }}</h2> <!-- Subcategory Name -->

                    @foreach($subcategory->contents as $content)
                        <article class="rs-postbox-item">
                            <div class="rs-postbox-thumb">
                                <a href="#">
                                    <img src="{{ $content->path ?? asset('images\gallery\gallery-thumb-01.png') }}" alt="Content Image">
                                </a>
                                <div class="rs-postbox-tag">
                                    <a href="#">{{ $subcategory->name }}</a>
                                </div>
                            </div>

                            <div class="rs-postbox-content">
                                <div class="rs-postbox-meta-list">
                                    <div class="rs-postbox-meta-item">
                                        <span class="rs-meta-text"><a class="meta-author" href="#">YQFM</a></span>
                                    </div>
                                    <div class="rs-postbox-meta-item">
                                        <span class="rs-postbox-meta-text">
                                            <a href="#">{{ $content->created_at->format('F d, Y') }}</a>
                                        </span>
                                    </div>
                                </div>

                                <h3 class="rs-postbox-title">
                                    <a href="#">{{ $content->title }}</a>
                                </h3>

                                <div class="rs-postbox-text">
                                    <p>{{ Str::limit(strip_tags($content->text), 1000) }}</p> <!-- Limit text to 200 characters -->
                                </div>

                                <div class="rs-postbox-btn">
                                    <a class="rs-btn has-theme-orange has-icon has-bg" href="#">
                                        Continue Reading
                                        <span class="icon-box">
                                            <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                <path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29 1.41,1.41 10-10A1,1,0,0,0,31.71,15.29Z"></path>
                                            </svg>
                                            <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                                <path d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29 1.41,1.41 10-10A1,1,0,0,0,31.71,15.29Z"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>


</main>
@endsection