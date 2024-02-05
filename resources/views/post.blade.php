@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">

        <div class="mt-4 mb-1">
            <p> <a href="/produk" class="text-decoration-none" style="color:#e4865e">Category</a>
                -
                <a href="/produk?category={{ $post->category->slug }}" style="color:#e4865e" class="text-decoration-none">{{ $post->category->name }}</a>
            </p>
            <h1 style="color:#e4865e">{{ $post->title }}</h1>
        </div>

        <div class="container">

            <div class="row workingspace">
                <div class="col-lg-6">
                    @if ($post->image)
                    <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name}}" class="gallery-item img-fluid">
                    @else
                    <img src="https://source.unsplash.com/1200x1000?{{ $post->category->name }}" class="gallery-item img-fluid" alt="{{ $post->category->name }}">
                    @endif
                </div>

                <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @if ($post->image)
                                <img src="{{ asset('storage/'. $post->image) }}" class="modal-img img-fluid" alt="modal img" style="max-width: 100%;">
                                @else
                                <img src="https://source.unsplash.com/1200x1000?{{ $post->category->name }}" class="modal-img img-fluid" alt="{{ $post->category->name }}">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    {!! $post->body !!}
                </div>
            </div>

        </div>
    </div>
</div>

@endsection