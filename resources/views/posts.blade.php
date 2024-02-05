@extends('layouts.main')
@section('container')

<div class="mt-4 ">
  <h1 class="text-center" style="color:#e4865e" >{{ $title }}</h1>
</div>

@if ($posts->count())
<div class="container">
  <div class="row">

    @foreach ($posts as $post)
    <div class="col-md-4 mt-4 mb-4">
      <div class="card border-0 rounded-0 shadow"> <!-- Tambahkan style untuk tinggi -->
        <!-- Product Image and Details -->
        @if ($post->image)
        <img src="{{ asset('storage/'. $post->image) }}" class="card-img-top rounded-0" alt="{{ $post->category->name }}">
        @else
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
        @endif
        <div class="card-body mt-3 mb-3">
          <div class="row">
            <div class="col-10">
              <h4 class="card-title">{{ $post->title }}</h4>
            </div>
            <div class="col-2">
              <i class="bi bi-bookmark-plus fs-2"></i>
            </div>
          </div>
        </div>
        <!-- Product Price and Add to Cart -->
        <div class="row align-items-center text-center g-0">
          <div class="col-12">
            <a href="/produk/{{ $post->slug }}" class="btn w-100 p-3 rounded-0" style="background-color: #e4865e; color:white;">DETAIL</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</div>

@else
<p class="text-center fs-4">No Posts Found.</p>
@endif

<div class="d-flex justify-content-center">
  {{ $posts->links() }}
</div>
@endsection