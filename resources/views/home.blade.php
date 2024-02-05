<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $name }}</title>
    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="images/favicon.svg" type="image/svg+xml">

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Source+Sans+Pro:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body id="top">
    <!-- 
    - #HEADER
  -->
    <header class="header" data-header>
        <div class="container">

            <div class="overlay" data-overlay></div>

            <a href="/">
                <h1 class="logo">CreaFurn ID</h1>
            </a>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">
                    <a href="/" class="logo">CreaFurn ID</a>

                    <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">

                    <li class="navbar-item">
                        <a href="#home" class="navbar-link" data-navbar-link>Home</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#category" class="navbar-link" data-navbar-link>Category</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#services" class="navbar-link" data-navbar-link>Services</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#review" class="navbar-link" data-navbar-link>Review</a>
                    </li>

                    <li class="navbar-item">
                        <a href="#product" class="navbar-link" data-navbar-link>Product</a>
                    </li>
                </ul>

            </nav>

            <a href="https://heylink.me/Creativefurniture.id" class="btn">
                <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>

                <span>Contact US</span>
            </a>

            <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

        </div>
    </header>

    <main>
        <!-- 
        - #HERO
      -->
        <section class="hero">
            <div class="container">

                <div class="hero-content">

                    <h2 class="h2 hero-title">Creative Furniture ID</h2>

                    <p class="hero-subtitle">Rattan & Wood Furniture Custom</p>

                    <p class="hero-text">
                        Unleashing Artistry with Every Strand Diligently Weaving Creativity into the Very Fabric of Wood and Rattan, Stitching Together a Tapestry of Timeless Innovation and Exquisite Craftsmanship
                    </p>

                    <a href="https://heylink.me/Creativefurniture.id">
                        <button class="btn">Contact Us</button>
                    </a>

                </div>

                <figure class="hero-banner">
                    <img src="images/kursi.png" width="694" height="529" loading="lazy" alt="hero-banner" class="w-100 banner-animation">
                </figure>

            </div>
        </section>


        <!-- 
        - #ABOUT
      -->

        <section class="section about" id="home">
            <div class="container">

                <figure class="about-banner">
                    <img src="images/about-banner.png" width="700" height="532" loading="lazy" alt="about banner" class="w-100 banner-animation">
                </figure>

                <div class="about-content">

                    <h2 class="h2 section-title underline">Creative Furniture ID ?</h2>

                    <p class="about-text">
                        Discover bespoke furniture at Creative Furniture ID, where we specialize in crafting personalized pieces from premium wood and rattan in Jepara, Indonesia. Our creations blend local craftsmanship with modern design, offering unique and durable furniture tailored to your style. Elevate your living spaces with the timeless elegance of Creative Furniture ID.
                    </p>

                    <ul class="stats-list">

                        <li class="stats-card">
                            <p class="h3 stats-title">10</p>

                            <p class="stats-text">Satisfied Clients</p>
                        </li>

                        <li class="stats-card">
                            <p class="h3 stats-title">100</p>

                            <p class="stats-text">Project Lunched</p>
                        </li>

                        <li class="stats-card">
                            <p class="h3 stats-title">4</p>

                            <p class="stats-text">Years Completed</p>
                        </li>

                    </ul>

                </div>

            </div>
        </section>

        <section class="products" id="category">
            <h2 class="h2 section-title underline">Category</h2>
            @if ($categorys->count())
            <div class="all-products">
                <div class="product">
                    <img src="https://source.unsplash.com/400x400?{{$categorys[0]->name}}" class="card-img-top" alt="{{$categorys[0]->name}}">
                    <div class="product-info">
                        <h4 class="product-title">{{ $categorys[0]->name }}
                        </h4>
                        <a class="product-btn" href="/produk?category={{ $categorys[0]->slug }}">Detail</a>
                    </div>
                </div>
                @foreach ($categorys->skip(1) as $category)
                <div class="product">
                    <img src="https://source.unsplash.com/400x400?{{$category->name}}" class="card-img-top" alt="{{$category->name}}">
                    <div class="product-info">
                        <h4 class="product-title">{{ $category->name }}
                        </h4>
                        <a class="product-btn" href="/produk?category={{ $category->slug }}">Detail</a>

                    </div>
                </div>
                @endforeach
            </div>
            @else
            <p class="text-center fs-4">Not Post Found.</p>
            @endif
        </section>

        <!-- 
        - #FEATURES
      -->

        <section class="section features" id="services">
            <div class="container">

                <h2 class="h2 section-title underline">Why Us?</h2>

                <ul class="features-list">

                    <li>
                        <div class="features-card">

                            <div class="icon">
                                <ion-icon name="bulb-outline"></ion-icon>
                            </div>

                            <div class="content">
                                <h3 class="h3 title">Custom Just For You</h3>

                                <p class="text">
                                    Our products can be customized to meet the preferences and needs of each customer, providing a unique and personalized shopping experience.
                                </p>
                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="features-card">

                            <div class="icon">
                                <ion-icon name="color-palette-outline"></ion-icon>
                            </div>

                            <div class="content">
                                <h3 class="h3 title">Luxury Design</h3>

                                <p class="text">
                                    We offer products with luxurious and elegant designs, reflecting meticulous attention to detail and high-quality craftsmanship.
                                </p>
                            </div>

                        </div>
                    </li>

                </ul>

                <figure class="features-banner">
                    <img src="images/2.png" width="369" height="318" loading="lazy" alt="Features Banner" class="w-100 banner-animation">
                </figure>

                <ul class="features-list">

                    <li>
                        <div class="features-card">

                            <div class="icon">
                                <ion-icon name="cash-outline"></ion-icon>
                            </div>

                            <div class="content">
                                <h3 class="h3 title">Affordable Price</h3>

                                <p class="text">
                                    Despite the luxurious designs, we maintain affordable prices, ensuring good value for customers and accessibility to quality products.
                                </p>
                            </div>

                        </div>
                    </li>

                    <li>
                        <div class="features-card">

                            <div class="icon">
                                <ion-icon name="construct-outline"></ion-icon>
                            </div>

                            <div class="content">
                                <h3 class="h3 title">High Quality</h3>

                                <p class="text">
                                    Our products are crafted from high-quality, sturdy wood, ensuring durability and resilience, with a focus on sustainability.
                                </p>
                            </div>

                        </div>
                    </li>

                </ul>

            </div>
        </section>


        <h2 class="h2 section-title underline">Client Review</h2>
        <section class="client" id="review">
            <!-- Swiper -->
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonialBox">
                            <div class="content">
                                <p>
                                    Meja Kayu dan Rotan ini benar-benar memukau! Desainnya yang elegan dan minimalis membuatnya menjadi pusat perhatian di ruangan. Kualitas kayu dan rotan yang digunakan terasa sangat solid, memberikan perasaan kestabilan. Saya sangat puas dengan pembelian ini
                                </p>
                                <div class="details">
                                    <div class="imgBx">
                                        <img src="images/user1.png" alt="user1" />
                                    </div>
                                    <h3>Someone Famous<br /><span>Creative Designer</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonialBox">
                            <div class="content">
                                <p>
                                    Meja ini tidak hanya indah secara visual, tetapi juga sangat praktis. Permukaannya yang luas memberikan ruang yang cukup untuk meletakkan semua barang penting saya. Saya juga menghargai sentuhan kerajinan tangan yang membuat setiap meja terasa unik. Sangat direkomendasikan!
                                </p>
                                <div class="details">
                                    <div class="imgBx">
                                        <img src="images/user1.png" alt="user1" />
                                    </div>
                                    <h3>Someone Famous<br /><span>Creative Designer</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonialBox">
                            <div class="content">
                                <p>
                                    Ketika saya mencari meja yang cocok untuk ruang kerja saya, Meja Kayu dan Rotan menjadi pilihan yang sempurna. Desainnya pas dengan gaya dekorasi modern saya, dan bahan berkualitas tinggi memberikan kepercayaan akan keberlanjutan produk. Sangat bangga dengan pembelian ini
                                </p>
                                <div class="details">
                                    <div class="imgBx">
                                        <img src="images/user1.png" alt="user1" />
                                    </div>
                                    <h3>Someone Famous<br /><span>Creative Designer</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="section blog" id="product">
            <div class="container">

                <h2 class="h2 section-title underline">New Product</h2>

                <a class="section-title" href="/produk">
                    <button class="btn">See All Product</button>
                </a>


                <ul class="blog-list">

                    @if ($posts->count())
                    <li>
                        <div class="blog-card">
                            <figure class="banner">
                                @if ($posts[0]->image)
                                <a href="/produk/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                                    <img src="{{ asset('storage/'. $posts[0]->image) }}" width="750" height="350" loading="lazy" alt="{{ $posts[0]->slug }}" class="img-cover">
                                </a>
                                @else
                                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="img-cover" alt="{{ $posts[0]->category->name }}">
                                @endif
                            </figure>
                            <div class="content">
                                <h3 class="h3 title">
                                    <a href="/produk/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                                        {{ $posts[0]->title }}
                                    </a>
                                </h3>
                                <p class="text">
                                    {!! $posts[0]->excerpt !!}
                                </p>
                            </div>
                        </div>
                    </li>

                    @foreach ($posts->skip(1) as $post)
                    <li>
                        <div class="blog-card">
                            <figure class="banner">
                                @if ($post->image)
                                <a href="/produk/{{ $post->slug }}" class="text-decoration-none text-dark">
                                    <img src="{{ asset('storage/'. $post->image) }}" width="750" height="350" loading="lazy" alt="{{ $post->slug }}" class="img-cover">
                                </a>
                                @else
                                <img src="https://source.unsplash.com/750x350?{{ $post->category->name }}" class="img-cover" alt="{{ $post->category->name }}">
                                @endif
                            </figure>
                            <div class="content">
                                <h3 class="h3 title">
                                    <a href="/produk/{{ $post->slug }}" class="text-decoration-none text-dark">
                                        {{ $post->title }}
                                    </a>
                                </h3>
                                <p class="text">
                                    {!! $post->excerpt !!}
                                </p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    @else
                    <p class="text-center fs-4">No Posts Found.</p>
                    @endif

                </ul>
            </div>
        </section>


        <section>
            <h2 class="h2 section-title underline">Contact Us</h2>
            <div class="contactUs">
                <div class="title">
                </div>
                <div class="box">
                    <!-- Form -->
                    <div class="contact form">
                        <h3>Send a Message</h3>
                        <form>
                            <div class="formBox">
                                <div class="row50">
                                    <div class="inputBox">
                                        <span>Name</span>
                                        <input type="text" placeholder="Name" />
                                    </div>
                                </div>
                                <div class="row50">
                                    <div class="inputBox">
                                        <span>Email</span>
                                        <input type="email" placeholder="Email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required />
                                    </div>
                                </div>
                                <div class="row100">
                                    <div class="inputBox">
                                        <span>Message</span>
                                        <textarea placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="row100">
                                    <div class="inputBox">
                                        <input type="submit" value="Send" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Info Box -->
                    <div class="contact info">
                        <h3>Contact Info</h3>
                        <div class="infoBox">
                            <div>
                                <span>
                                    <ion-icon name="location"></ion-icon>
                                </span>
                                <p>Jepara <br />Indonesia</p>
                            </div>
                            <div>
                                <span>
                                    <ion-icon name="mail"></ion-icon>
                                </span>
                                <a href="mailto:loremipsum@email.com">loremipsum@email.com</a>
                            </div>
                            <div>
                                <span>
                                    <ion-icon name="call"></ion-icon>
                                </span>
                                <a href="tel:+919845648470">+62 984 564 8470</a>
                            </div>
                            <!-- Social Media Links -->
                            <ul class="sci">
                                <li>
                                    <a href="https://heylink.me/Creativefurniture.id">
                                        <ion-icon name="link-outline"></ion-icon>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=100064154319528"">
                                        <ion-icon name="logo-facebook"></ion-icon>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/creative_furniture.id">
                                        <ion-icon name="logo-instagram"></ion-icon>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://api.whatsapp.com/send/?phone=6281327483890&text=hai+dengan+creativefurniture">
                                        <ion-icon name="logo-whatsapp"></ion-icon>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- Map -->
                    <div class="contact map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53333.508926517265!2d110.7069153150422!3d-6.517030347680174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e71197423745411%3A0xe052620ab4baff0!2sCREATIVE%20FURNITURE!5e0!3m2!1sid!2sid!4v1705825911123!5m2!1sid!2sid" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="footer-bottom">
                <p class="copyright">
                    &copy; 2022 <a href="#" class="copyright-link">codewithsadee</a>. All Right Reserved
                </p>
            </div>
        </footer>

        <!-- 
    - #GO TO TOP
  -->
        <a href="#top" class="go-top  active" aria-label="Go To Top" data-go-top>
            <ion-icon name="arrow-up-outline"></ion-icon>
        </a>
        <!-- 
    - custom js link
  -->

        <script src="/js/script.js"></script>
        <!-- 
    - ionicon link
  -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                coverflowEffect: {
                    rotate: 0,
                    stretch: 0,
                    depth: 100,
                    modifier: 2,
                    slideShadows: true,
                },
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                },
            });
        </script>
</body>

</html>