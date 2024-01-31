@extends('layouts.main')
@section('container')
<!-- <h1 class="mb-3 text-center">{{ $title }}</h1> -->

<!-- <div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/posts">
      @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
        <button class="btn btn-primary" type="submit">Search</button>
      </div>
    </form>
  </div>
</div> -->

<!-- <style>
  .card {
    margin-bottom: 20px;
    /* Adjust the margin as needed */
  }

  .product-steps {
    margin-top: 10px;
    /* Adjust the margin as needed */
  }
</style> -->

<div class="container">
  <div class="row">
    <div class="col-md-4 mb-3">
      <div class="card border-0 rounded-0 shadow" style="width: 18rem;">
        <!-- Product Image and Details -->
        <img src="..." class="card-img-top rounded-0" alt="...">
        <div class="card-body mt-3 mb-3">
          <div class="row">
            <div class="col-10">
              <h4 class="card-title">Product title</h4>
              <p class="card-text">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                (123)
              </p>
            </div>
            <div class="col-2">
              <i class="bi bi-bookmark-plus fs-2"></i>
            </div>
          </div>
        </div>

        <!-- Product Steps -->
        <div class="product-steps">
          <h5>Steps:</h5>
          <ol>
            <li>Step 1: Your first step description goes here.</li>
            <li>Step 2: Your second step description goes here.</li>
            <!-- Add more steps as needed -->
          </ol>
        </div>

        <!-- Product Price and Add to Cart -->
        <div class="row align-items-center text-center g-0">
          <div class="col-4">
            <h5>$129</h5>
          </div>
          <div class="col-8">
            <a href="#" class="btn btn-dark w-100 p-3 rounded-0 text-warning">ADD TO CART</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Add another product with steps similarly -->
    <!-- ... -->

    <div class="col-md-4 mb-3">
      <div class="card border-0 rounded-0 shadow" style="width: 18rem;">
        <!-- Product Image and Details -->
        <img src="..." class="card-img-top rounded-0" alt="...">
        <div class="card-body mt-3 mb-3">
          <div class="row">
            <div class="col-10">
              <h4 class="card-title">Product title</h4>
              <p class="card-text">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                (123)
              </p>
            </div>
            <div class="col-2">
              <i class="bi bi-bookmark-plus fs-2"></i>
            </div>
          </div>
        </div>

        <!-- Product Steps -->
        <div class="product-steps">
          <h5>Steps:</h5>
          <ol>
            <li>Step 1: Your first step description goes here.</li>
            <li>Step 2: Your second step description goes here.</li>
            <!-- Add more steps as needed -->
          </ol>
        </div>

        <!-- Product Price and Add to Cart -->
        <div class="row align-items-center text-center g-0">
          <div class="col-4">
            <h5>$129</h5>
          </div>
          <div class="col-8">
            <a href="#" class="btn btn-dark w-100 p-3 rounded-0 text-warning">ADD TO CART</a>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>




@if ($posts->count())
<div class="card mb-3">
  {{-- harusnya if yg bawah disini --}}
  @if ($posts[0]->image)
  <div style="max-height: 400px; overflow:hidden;">
    <img src="{{ asset('storage/'. $posts[0]->image) }}" alt="{{ $posts[0]->category->name}}" class="card-img-top">
  </div>
  @else
  <img src="https://source.unsplash.com/1200x400?{{$posts[0]->category->name}}" class="card-img-top" alt="{{$posts[0]->category->name}}">
  @endif
  <div class="card-body text-center">
    <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
    <p><small class="text-muted">
        By: <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
      </small></p>
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
    <a href="/posts/{{ $posts[0]->slug }}" class="d-blok mt-3 text-decoration-none btn btn-primary">Read More</a>
  </div>
</div>
<div class="container">
  <div class="row">
    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4 mb-3">
      <div class="card">
        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.6)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
        @if ($post->image)
        <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name}}" class="img-fluid">
        @else
        <img src="https://source.unsplash.com/500x400?{{$post->category->name}}" class="card-img-top" alt="{{$post->category->name}}">
        @endif
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p><small class="text-muted">
              By: <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
            </small></p>
          <p class="card-text">{!! $post->excerpt !!}</p>
          <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>


@else
<p class="text-center fs-4">Not Post Found.</p>
@endif
<div class="d-flex justify-content-center">
  {{ $posts->links() }}
</div>

@endsection