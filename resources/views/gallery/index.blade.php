@extends('layouts.app')


@section('content')
    <!-- HERO -->
    <section class="gallery-hero">


        <div class="container">


            <div class="gallery-hero-content">


                <h1>
                    گالری تصاویر
                </h1>


                <p>
                    لحظات ماندگار آکادمی نقش آزاد
                </p>


                <div class="breadcrumb-box">

                    <a href="/">
                        خانه
                    </a>

                    <span>
                        /
                    </span>

                    <span>
                        گالری
                    </span>

                </div>


            </div>


        </div>


    </section>


    <!-- ALBUMS -->
    <section class="albums-section">

        <div class="container">

            <div class="row g-4">

                @foreach ($albums as $album)
                    <div class="col-lg-4 col-md-6">

                        <div class="album-card">

                            <div class="album-image">

                                <img src="{{ asset('storage/' . $album->cover_image) }}">

                                <div class="album-overlay">

                                    <div>

                                        <h3>
                                            {{ $album->title }}
                                        </h3>

                                        <span>

                                            <i class="bi bi-images"></i>

                                            {{ $album->images_count }}

                                            تصویر

                                        </span>

                                    </div>

                                </div>

                            </div>

                            <div class="album-content">

                                <p>

                                    {{ Str::limit($album->description, 120) }}

                                </p>


                                <div class="album-footer">

                                    <span>

                                        <i class="bi bi-calendar3"></i>

                                        {{ $album->created_at->format('Y/m/d') }}

                                    </span>


                                    <a href="{{ route('gallery.show', $album->id) }}">

                                        مشاهده آلبوم

                                        <i class="bi bi-arrow-left"></i>

                                    </a </div>

                                </div>

                            </div>

                        </div>
                @endforeach

            </div>

        </div>

    </section>
@endsection
