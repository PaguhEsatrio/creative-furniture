	<nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
		<div class="container">
			<a class="navbar-brand" href="/" style="color: #9c5518;"><i class="fa-solid fa-shop me-2"></i> CreaFurn ID</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
				<div class="input-group">
					<form action="/produk">
						@if (request('category'))
						<input type="hidden" name="category" value="{{ request('category') }}">
						@endif
						<div class="input-group">
							<input type="text" class="form-control border-warning" style="color:#e4865e" placeholder="Search..." name="search" value="{{ request('search') }}">
							<button class="btn btn-warning text-white" type="submit">Search</button>
						</div>
					</form>
					
				</div>
			</div>
			<div class=" collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ms-auto ">
					<li class="nav-item">
						<a class="nav-link mx-3" aria-current="page" href="/">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ ($active === "categories" ? 'active' : '') }} mx-3" href="/categories">Categories</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ ($active === "posts" ? 'active' : '') }} mx-3" href="/produk">Product</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-3" href="https://heylink.me/Creativefurniture.id">Contact</a>
					</li>
				</ul>
			</div>
			<div class="ms-auto d-none d-lg-block">
				<div class="input-group">
					<form action="/produk">
						@if (request('category'))
						<input type="hidden" name="category" value="{{ request('category') }}">
						@endif
						<div class="input-group">
							<input type="text" class="form-control border-warning" style="color:#e4865e" placeholder="Search..." name="search" value="{{ request('search') }}">
							<button class="btn btn-warning text-white" type="submit">Search</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</nav>