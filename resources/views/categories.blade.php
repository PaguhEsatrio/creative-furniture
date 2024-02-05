@extends('layouts.main')
@section('container')

<div class="mt-4 mb-1">
    <h1 class="text-center" style="color:#e4865e">All Categories</h1>
</div>

<section class="products" id="category">

    @if ($categorys->count())
    <div class="all-products">


        <div class="product">
            <img src="https://source.unsplash.com/400x400?{{$categorys[0]->name}}" class="card-img-top" alt="{{$categorys[0]->name}}">
            <div class="product-info">
                <h4 class="product-title">{{ $categorys[0]->name }}
                </h4>
                <a class="product-btn" style="background-color: #e4865e;" href="/produk?category={{ $categorys[0]->slug }}">Detail</a>
            </div>
        </div>
        @foreach ($categorys->skip(1) as $category)
        <div class="product">
            <img src="https://source.unsplash.com/400x400?{{$category->name}}" class="card-img-top" alt="{{$category->name}}">
            <div class="product-info">
                <h4 class="product-title">{{ $category->name }}
                </h4>
                <a class="product-btn" style="background-color: #e4865e;" href="/produk?category={{ $category->slug }}">Detail</a>

            </div>
        </div>
        @endforeach
    </div>
    @else
    <p class="text-center fs-4">Not Post Found.</p>
    @endif
</section>



@endsection