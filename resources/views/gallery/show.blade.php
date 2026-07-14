@extends('layouts.app')


@section('content')
    <section class="album-detail-hero">


        <div class="container">


            <h1>

                {{ $album->title }}

            </h1>


            <p>

                {{ $album->description }}

            </p>


        </div>


    </section>





    <section class="album-gallery">


        <div class="container">


            <div class="row g-4">


                @foreach ($album->images as $image)
                    <div class="col-lg-4 col-md-6">


                        <a href="{{ asset('storage/' . $image->image_path) }}" class="gallery-item" data-lightbox="album">


                            <img src="{{ asset('storage/' . $image->image_path) }}" alt="">


                        </a>


                    </div>
                @endforeach



            </div>


        </div>


    </section>
@endsection
