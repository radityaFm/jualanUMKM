@extends('navbar')

@section('content')

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
    <title>UMKM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        padding-top: 60px;
        overflow-x: hidden;
        backdrop-filter: 10px;
      }

      /* About us */
      .about-main .about-desc {
        width: 100%;
        font-size: 1rem;
        text-align: justify;
        margin: 0;
        display: block;
        text-indent: 20px;
      }
      .about-main img {
        height: 430px;
        object-fit: cover;
      }
      .about-desc {
    position: relative;
    max-height: 60px; /* Default collapsed height */
    overflow: hidden;
    transition: max-height 0.5s ease;
    text-indent: 1.5px;
    margin: 20px;
  }

.about-desc.expanded {
  max-height: 1000px;
  transition: max-height 0.5s ease;
}

.read-more-link {
  color: rgb(gray, #555, gray);
  cursor: pointer;
  font-weight: bold;
  font-family: roboto;
}

.more-text {
  display: inline; /* Set inline display by default to prevent cutting off */
}
    .show-more {
        display: inline; /* Show the additional text */
    }
      /* Carousel */
      .carousel {
        width: 100%;
      }

      .carousel-inner img {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        width: 100%;
        object-fit: cover;
      }
      /*galery*/
      .polaroid {
      position: relative;
      overflow: hidden;
      border-radius: 10px;
      border: 1px solid transparent; /* Transparent border by default */
      background-color: #ffffff; /* Default background color */
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1); /* Default shadow */
      transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease, border-color 0.3s ease;
      width: 100%; /* Ensures full width */
      max-width: 100%; /* Maintain responsiveness */
      aspect-ratio: 16 / 9; /* Maintains aspect ratio */
    }

    .polaroid img {
      width: 100%;
      height: 100%;
      object-fit: cover; /* Ensures the image covers the container without stretching */
      transition: transform 0.3s ease;
    }

    .polaroid:hover {
      transform: scale(1.05); /* Slight scaling effect */
      background-color: #f0f0f0; /* Change background color on hover */
      border-color: #000; /* Change border color on hover */
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Increase shadow on hover */
    }

    .polaroid:hover img {
      transform: scale(1); /* Zoom in the image slightly on hover */
    }

      .galeri {
        font-style: sans-serif;
        font-weight: 500;
        font-size: 30px;
      }
      .caption {
        padding: 10px;
        text-align: center;
        font-size: 1.2em;
        font-weight: bold;
        color: #333;
      }
      /* Nav-tabs */
      .nav-tabs .nav-link {
        border: 1px solid transparent;
        border-radius: 0;
        color: #000; /* Warna teks default */
        background-color: transparent; /* Background default */
        transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
      }

      .nav-tabs .nav-link:hover {
        color: lime; /* Warna teks saat hover */
        background-color: #2e2e2e; /* Background abu-abu gelap */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5); /* Shadow saat hover */
      }

      .nav-tabs .nav-link.active {
        color: lime; /* Warna teks saat aktif */
        background-color: #2e2e2e; /* Background saat aktif */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5); /* Shadow saat aktif */
        transition-duration: 200;
      }
      .card {
        transform: scale(0.95); /* Initial scale to make the zoom effect noticeable */
        transition: transform 0.3s ease, opacity 0.3s ease; /* Smooth transition for hover effect */
        opacity: 0; /* Initially invisible */
      }

      .tab-pane .card {
        opacity: 1; /* Fully visible when inside an active tab */
      }

      .tab-pane.active .card {
        transform: scale(1); /* Reset the scale to normal when the tab is active */
      }

      .tab-pane.active .card:hover {
        transform: scale(1); /* Slight zoom on hover */
        animation: zoom 0.3s ease; /* Add animation to card only */
      }

      .menu-item img {
        width: 100%;
        height: auto;
      }

      .menu img {
        height: 300px;
        object-fit: cover;
      }

      .menu-item h5 {
        margin-top: 10px;
      }

      .desc {
        font-size: 1rem;
      }
      .card-img-top{
        border-radius: 5px;
      }
      /* /*card* */
/* Bottom border color with transition */
.card {
    height: 95%; /* Adjust height to show bottom border color */
    border: none; /* Remove default borders */
    box-shadow: 0 10px 10px rgba(94, 93, 93, 0.2);
    transition: box-shadow 0.4s ease-in-out, transform 0.4s ease-in-out; /* Smooth transition */
    position: relative; /* For the color bottom */
    margin-bottom: 20px; /* Smaller margin between cards */
    padding: 15px; /* Adjust padding to fit the reduced height */
    transform: scale(1); /* Default transform scale */
    overflow: hidden; /* Ensure content doesn’t overflow */
    transition: transform 0.3s ease; /* Smooth transition for image scaling */
}

/* Bottom border color with transition */
.card::after {
    bottom: 0;
    left: 0;
    right: 0;
    height: 5px; /* Height of the blue bottom border */
    background-color: #007bff; /* Blue color */
    transition: transform 0.3s ease-in-out, height 0.4s ease-in-out; /* Smooth transition */
}

/* Hover effect for the card */
.card:hover {
    box-shadow: 0 12px 18px rgba(0, 0, 0, 0.3);
    transform: scale(1); /* Smooth scaling effect on hover */
}

/* Hover effect for the bottom border */
.card:hover::after {
    transform: scaleX(1.1); /* Slightly increase width on hover */
    height: 7px; /* Increase height of the bottom border on hover */
}

/* Animation for the card */
@keyframes zoom {
    0% { transform: scale(1); }
    100% { transform: scale(1.05); }
}

.card.animate {
    animation: zoom 0.3s ease-in-out;
}

/* Styling for card-body */
.card-body {
    padding: 15px; /* Padding inside the card body */
    background-color: #ffffff; /* Background color of the card body */
    transition: transform 0.4s ease-in-out; /* Smooth transition for transform */
}

.card-body:hover {
    transform: scale(1.05); /* No additional transform on hover for card-body */
}
/* Image styling */
.img-fluid {
    width: 100px; /* Adjust size as necessary */
    height: 100px; /* Match width for a perfect circle */
    object-fit: cover;
    display: block;
    margin: 0 auto; /* Center image */
    border-radius: 50%; /* Ensure a circular shape */
    border: 5px solid #fff; /* White border around the image */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Slight shadow for the image */
}

.card:hover .card-testi {
    transform: scale(1.05); /* Slight zoom effect on hover */
}

/* Ensure smooth appearance for text and captions */
.caption {
    padding: 10px;
    text-align: center;
    font-size: 1.2em;
    font-weight: bold;
    color: #333;
}
      /**/
      FAQ .faq-image {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 8px;
      }

      .accordion {
        max-height: 400px;
        overflow-y: auto;
      }
      .img {
        max-width: 100%; /* Adjust size to be larger */
        height: auto;
      }
      .FAQ img {
        max-width: 100%; /* Adjust size to be larger */
        height: auto;
      }
      #FAQ {
        display: flex;
        flex-wrap: wrap;
      }

      /* Ensure image is responsive and centered */
      #FAQ .col-lg-6 img {
        max-width: 100%;
        height: auto;
      }
      /* Footer */
      .footer {
        background-color: #343a40;
        color: white;
        padding: 40px 0;
        overflow-y:hidden;
      }

      .footer a {
        color: white;
        text-decoration: none;
      }

      .footer a:hover {
        color: #ffc107;
        border-radius: 10px;
      }

      .footer .footer-about .sitename {
        font-size: 24px;
        font-weight: bold;
      }

      .footer .social-links a {
        margin-right: 15px;
        color: white;
      }

      .footer .social-links a:hover {
        color: #ffc107;
      }

      .footer .footer-newsletter input[type='email'] {
        width: calc(100% - 100px);
        padding: 10px;
        border: none;
        border-radius: 5px 0 0 5px;
        margin-right: -4px;
      }

      .footer .footer-newsletter input[type='submit'] {
        padding: 10px;
        border: none;
        border-radius: 0 5px 5px 0;
        background-color: #ffc107;
        color: black;
        cursor: pointer;
      }

      .footer .footer-newsletter input[type='submit']:hover {
        background-color: #e0a800;
      }

      .footer .copyright {
        margin-top: 30px;
      }
      /*parallax*/
      .parallax {
        background-image: url('image/banner.png');
        height: 100%;
        width: 100%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        margin-bottom: 500px;
      }
      /* Responsive styles */
   /* Untuk perangkat dengan lebar maksimum 575px (ponsel kecil) */
   @media (min-width: 425px) (max-width:575px) {
  .desc {
    font-size: 10px;
  }

  .nav-tabs {
    flex-wrap: wrap;
    justify-content: space-around;
    border-bottom: none;
  }

  .nav-tabs .nav-item {
    flex-grow: 1;
    text-align: center;
    margin-bottom: 5px;
  }

  .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-radius: 0;
    color: #000; /* Warna teks default */
    background-color: transparent; /* Background default */
    transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
  }

  .nav-tabs .nav-link:hover {
    color: lime; /* Warna teks saat hover */
    background-color: #2e2e2e; /* Background abu-abu gelap */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5); /* Shadow saat hover */
  }

  .nav-tabs .nav-link.active {
    border-color: #dee2e6 #dee2e6 #fff;
    color: lime; /* Warna teks saat aktif */
    background-color: #2e2e2e; /* Background saat aktif */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5); /* Shadow saat aktif */
    transition-duration: 200ms;
  }

  .faq-image {
    max-height: 200px; /* Adjust max height for small phones */
  }

  .accordion {
    max-height: 200px;
  }

  .parallax {
    background-image: url('image/banner.png');
    height: 100%;
    width: 100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    margin: 0; /* Menghilangkan margin */
    padding: 0; /* Menghilangkan padding */
  }

  .image {
    margin: 0; /* Menghilangkan margin */
    padding: 0; /* Menghilangkan padding */
    object-fit: cover;
  }

  .navbar-toggler {
    color: #fff; /* Warna teks putih */
    background-color: #fff; /* Warna latar belakang putih */
    border: 1px solid #fff; /* Warna border putih, jika perlu */
  }

  /* Styling untuk navbar agar foto di kiri dan navigation di kanan */
  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px; /* Adjust padding as needed */
  }

  .navbar .navbar-brand {
    margin-right: auto; /* Membuat logo berada di kiri */
  }

  .navbar .navbar-nav {
    margin-left: auto; /* Membuat navbar navigation berada di kanan */
  }
  .about {
    display: block;
    margin-left: auto;
    margin-right: auto;
    max-width: 80%; /* Sesuaikan dengan ukuran yang diinginkan */
    max-width: 80%;
    background-repeat: no-repeat;
        background-size: cover;
        border-radius: 15px;
      }
   }

/* Untuk perangkat dengan lebar maksimum 768px (ponsel besar dan tablet kecil) */
@media (max-width: 768px) {
  .navbar-nav {
    display: flex;
    justify-content: center;
    width: 100%;
    text-align: right;
    font-size: 20px;
  }

  .nav-link {
    margin: 10px 20px;
  }

  .desc {
    font-size: 10px;
  }

  .faq-image {
    max-height: 250px; /* Adjust max height for large phones */
  }

  .accordion {
    max-height: 250px;
  }

  #FAQ {
    flex-direction: column;
    align-items: center;
  }

  #FAQ .col-lg-6 {
    text-align: center;
  }

  #FAQ .col-lg-6 img {
    max-width: 90%;
  }

  .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .col-md-6,
  .col-md-4 {
    flex: 0 0 100%;
    max-width: 100%;
  }

  .parallax {
    background-attachment: scroll; /* Disable parallax for mobile devices */
    margin: 0; /* Menghilangkan margin */
    padding: 0; /* Menghilangkan padding */
  }
  
  .navbar-toggler {
    color: #fff; /* Warna teks putih */
    background-color: #fff; /* Warna latar belakang putih */
    border: 1px solid #fff; /* Warna border putih, jika perlu */
  }
}
@media (max-width: 1024px) {
  .navbar-nav {
    display: flex;
    justify-content: end;
    width: 100%;
  }

  .nav-link {
    margin: 10px 15px;
  }

  .desc {
    font-size: 10px;
  }

  .faq-image {
    max-height: 300px; /* Adjust max height for tablets */
  }
  .about {
    display: block;
    margin-left: auto;
    margin-right: auto;
    max-width: 210%; /* Sesuaikan dengan ukuran yang diinginkan */
    max-height:100%;
    background-repeat: no-repeat;
        background-size: cover;
        border-radius: 15px;
      }
 
}

/* Untuk perangkat dengan lebar minimum 769px dan maksimum 1024px (tablet besar dan perangkat desktop kecil) */
@media (min-width: 769px) and (max-width: 1440px) {
  .navbar-nav {
    display: flex;
    justify-content: end;
    width: 100%;
  }

  .nav-link {
    margin: 10px 15px;
  }

  .desc {
    font-size: 10px;
  }

  .faq-image {
    max-height: 300px; /* Adjust max height for tablets */
  }

  .accordion {
    max-height: 300px;
  }

  #FAQ {
    flex-direction: column;
    align-items: center;
  }

  #FAQ .col-lg-6 {
    text-align: center;
  }

  #FAQ .col-lg-6 img {
    max-width: 90%;
  }

  .col-md-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }

  .col-md-4 {
    flex: 0 0 33.3333%;
    max-width: 33.3333%;
  }

  .col-md-6,
  .col-lg-4 {
    flex: 0 0 auto;
  }

  .parallax {
    margin: 0; 
    padding: 0;
  }

  .navbar-toggler {
    color: #fff; /* Warna teks putih */
    background-color: #fff; /* Warna latar belakang putih */
    border: 1px solid #fff; /* Warna border putih, jika perlu */
  }
}
    </style>
  </head>
  <body>
    <div data-bs-spy="scroll" data-bs-target="#navbar-example" data-offset="40" data-bs-smooth-scroll="true">
    
      <div class="parallax my-2" id="parallax">
        <div class="row d-flex align-items-center justify-content-center" style="height: 100vh;">
          <div class="col-lg-6 justify-content-center text-center my-5">
            <p class="fs-2" style=" background-color: rgba(222, 226, 230, 0.6); font-family:monospace; font-weight: 900; opacity: 60px; margin: 0px 50px 0px; border-radius: 10px;box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3); font-size: large;">"Segarkan harimu dengan lezatnya Susu Jeli dan Yogurt, kenikmatan ganda dalam setiap gigitan dan tegukan!"</p>
          </div>
        </div>
      </div>
      </div>

      <div class="my-5 mt-4" data-spy="scroll" data-target="#navbar-example" data-offset="40" style="margin-top: 50px">
        <div id="carouselExample" class="carousel slide mt-5 mb-4">
          <div class="carousel-inner">
            <div class="carousel-item active"></div>
          </div>
        </div>
        <section class="bg-light py-5 py-xl-8" id="about">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                <h2 class="fs-5 mb-3 text-secondary text-uppercase text-center" style="margin-bottom: 10px">About us</h2>
                <p class="display-5 my-2 text-center fs-2">Kombinasi Sempurna dari Kesehatan dan Kenikmatan</p>
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle" />
              </div>
            </div>
          </div>
          <div class="container overflow-hidden about-main">
            <div class="row gy-4 gy-md-0 gx-xxl-5">
                <div class="col-12 col-md-6 card-border">
                      <div class="col-12 col-md-6">
                   <img src="image/about1.png" alt="" data-aos="fade-in" class="about">
                </div>    
                </div>       
                <div class="col-12 col-md-6 my-auto" data-aos="fade-in">
                  <div class="about-deskripsi">
                    <p class="about-desc fs-6 my-4" id="aboutDesc">
                      UMKM Susu Jeli adalah usaha kecil menengah yang fokus pada produksi minuman susu dengan inovasi jeli sehat. Kami berdedikasi untuk menyediakan produk susu yang tidak hanya lezat, tetapi juga bergizi dan menyegarkan.
                      Menggunakan bahan-bahan alami dan berkualitas tinggi, kami memastikan setiap produk Susu Jeli aman untuk dikonsumsi. Visi kami adalah menjadi pilihan utama konsumen dalam kategori minuman sehat dan menyegarkan. Susu Jeli
                      hadir dengan berbagai varian rasa yang menarik, cocok untuk segala usia. Kami percaya bahwa kesehatan adalah kunci, oleh karena itu, setiap produk kami bebas dari bahan pengawet dan pewarna buatan.
                      <span class="more-text">
                        UMKM Susu Jeli tidak hanya peduli dengan kualitas produk, tetapi juga kesejahteraan komunitas sekitar kami. Kami selalu memastikan bahwa setiap produk Susu Jeli dikemas dengan penuh kasih dan perhatian. Dalam setiap
                        kemasan Susu Jeli, terkandung komitmen kami untuk memberikan yang terbaik bagi konsumen. Kami berterima kasih atas dukungan konsumen yang telah menjadikan UMKM Susu Jeli sebagai bagian dari kehidupan sehari-hari mereka.
                      </span>
                    </p>
                    <span class="read-more-link" id="readMoreLink" onclick="toggleText()">Read More</span>
                  </div>
                </div>
            </div>
        </div>
        </section>
        <div class="container mt-5" id="galeri">
          <h2 class="galeri text-center mb-4 mt-5">Galery</h2>
          <div class="row" data-aos="fade-in">
            <div class="col-md-6 col-sm-12">
              <div class="polaroid">
              <img src="image/galeri1.png" alt="Foto 1">
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="polaroid">
                <img src="image/galeri2.png" alt="Foto 2" />
              </div>
            </div>
          </div>
          <div class="row mt-5" data-aos="fade-in">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="polaroid">
                <img src="image/yogurt1.png" alt="Foto 3" />
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="polaroid">
                <img src="image/yogurt2.jpeg" alt="Foto 4" />
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="polaroid">
                <img src="image/yogurt3.jpeg" alt="Foto 5" />
              </div>
            </div>
          </div>
        </div>
        <section id="product">
          <div class="container mt-5 my-3">
            <ul class="nav nav-tabs" id="menuTabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Menu Makanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Menu Minuman</a>
              </li>
            </ul>
            <div class="tab-content menu" id="menuTabsContent">
              <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <div class="container menu-section mb-2 mt-4">
                  <h4 style="font-weight: 600">Menu - menu yang tersedia:</h4>
                  <div class="row mb-4" data-aos="fade-in">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                      <div class="card" data-name="Sujel Vanila" data-price="Rp 10.000" data-desc="Jeli dengan susu rasa vanila" data-image="image/jeli0.jpg" data-bs-toggle="modal" data-bs-target="#productModal">
                        <img src="image/galeri3.png" class="card-img-top" alt="Sujel Vanila" />
                        <div class="card-body">
                          <h5 class="card-title">Sujel Vanila</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                      <div class="card" data-name="Sujel Komplit" data-price="Rp 15.000" data-desc="Jeli susu rasa vanila topping boda" data-image="image/jeli1.jpg" data-bs-toggle="modal" data-bs-target="#productModal">
                        <img src="image/galeri2.png" class="card-img-top" alt="Sujel Komplit" />
                        <div class="card-body">
                          <h5 class="card-title">Sujel Komplit</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                      <div class="card" data-name="Jeli Cokelat" data-price="Rp 12.000" data-desc="Jeli cokelat dengan susu rasa coklat" data-image="image/jeli2.jpg" data-bs-toggle="modal" data-bs-target="#productModal">
                        <img src="image/galeri5.png" class="card-img-top" alt="Jeli Cokelat" />
                        <div class="card-body">
                          <h5 class="card-title">Jeli Cokelat</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <div class="container menu-section mb-2 mt-4">
                  <div class="row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                      <div class="card" data-name="Yogurt 1" data-price="Rp 8.000" data-desc="Yogurt dengan rasa vanilla yang lembut" data-image="image/yogurt1.jpg" data-bs-toggle="modal" data-bs-target="#productModal">
                        <img src="image/yogurt3.jpeg" class="card-img-top" alt="Yogurt 1" />
                        <div class="card-body">
                          <h5 class="card-title">Yogurt 1</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                      <div class="card" data-name="Yogurt 2" data-price="Rp 9.000" data-desc="Yogurt dengan rasa stroberi yang segar" data-image="image/yogurt2.jpg" data-bs-toggle="modal" data-bs-target="#productModal">
                        <img src="image/yogurt4.jpeg" class="card-img-top" alt="Yogurt 2" />
                        <div class="card-body">
                          <h5 class="card-title ">Yogurt 2</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                      <div class="card" data-name="Yogurt 3" data-price="Rp 10.000" data-desc="Yogurt dengan campuran rasa buah tropis" data-image="image/yogurt3.jpg" data-bs-toggle="modal" data-bs-target="#productModal">
                        <img src="image/yogurt1.png" class="card-img-top" alt="Yogurt 3" />
                        <div class="card-body">
                          <h5 class="card-title">Yogurt 3</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="productModalLabel">Deskripsi Produk</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <h5 id="modalProductTitle"></h5>
                  <p id="modalProductPrice"></p>
                  <p id="modalProductDesc"></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="bg-light py-3 py-md-5" id="faq">
          <div class="container">
            <div class="row gy-5 gy-lg-0 align-items-center">
              <div class="FAQ col-12 col-lg-6 d-flex justify-content-center">
                <img class="img rounded h-50 w-50" loading="lazy" src="image/faq1.png" alt="How can we help you?" data-aos="fade-in" style="width: 150px; height: 100px" />
              </div>
              <div class="col-12 col-lg-6">
                <div class="row justify-content-xl-end" data-aos="fade-in">
                  <div class="col-12 col-xl-11">
                    <h2 class="h1 mb-3">Bagaimana kami bisa membantu mu?</h2>
                    <p class="lead fs-4 text-secondary mb-5">Kami harap jika kamu memmili pertanyaan , dimohon kamu dapat menanyakan di call center kami atau dapat juga melalui contact lewat email</p>
                    <div class="accordion accordion-flush" id="accordionExample" style="background-color: gray">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Apa saja produk yang dijual oleh UMKM Mbak G?</button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>Kami menjual berbagai macam produk seperti :</p>
                            <ul>
                              <li>Jeli susu</li>
                              <li>Yogurt</li>
                              <li>salad jeli</li>
                              <li>kacang goreng</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How Does Payment System Work?</button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            A payment system is a way to transfer money from one person or organization to another. It is a complex process that involves many different parties, including banks, credit card companies, and merchants.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How Do I Cancel My Account?</button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>To cancel your account, please follow these steps:</p>
                            <ul>
                              <li>Go to our website and sign in to your account.</li>
                              <li>Click on your profile picture in the top right corner of the page and select "Account Settings."</li>
                              <li>Scroll to the bottom of the page and click on "Cancel Account."</li>
                              <li>Enter your password and click on "Cancel Account."</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="bg-light py-5 py-xl-8" id="testimoni">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                <h2 class="fs-6 text-secondary mb-2 text-uppercase text-center">Happy Customers</h2>
                <p class="display-5 mb-4 mb-md-5 text-center fs-2">kepuasan klien adalah prioritas kami, mari lihat pendapat para Customers mengenai kami.</p>
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle" />
              </div>
            </div>
          </div>
          <div class="container overflow-hidden">
            <div class="row gy-4 gy-md-0 gx-xxl-5">
              <div class="col-12 col-md-4">
                <div class="card border-0 border-bottom border-primary" data-aos="fade-in">
                  <div class="card-body p-4 p-xxl-5">
                    <figure>
                      <img class="img-fluid rounded rounded-circle mb-4 border border-5" loading="lazy" src="image/testi1.png" alt="Luna John" />
                      <figcaption>
                        <div class="bsb-ratings text-warning mb-3" data-bsb-star="5" data-bsb-star-off="0"></div>
                        <blockquote class="bsb-blockquote-icon mb-4 fs-5">pelayanan sangat cepat, rasa nya segar dan tidak membuat batuk</blockquote>
                        <h4 class="mb-2">Customer 1</h4>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="card border-0 border-bottom border-primary" data-aos="fade-in">
                  <div class="card-body p-4 p-xxl-5">
                    <figure>
                      <img class="img-fluid rounded rounded-circle mb-4 border border-5" loading="lazy" src="image/testi1.png" alt="Mark Smith" />
                      <figcaption>
                        <div class="bsb-ratings text-warning mb-3" data-bsb-star="4" data-bsb-star-off="1"></div>
                        <blockquote class="bsb-blockquote-icon mb-4 fs-4">walaupun murah tetapi rasanya tidak murahan.</blockquote>
                        <h4 class="mb-2">Customer 2</h4>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="card border-0 border-bottom border-primary" data-aos="fade-in">
                  <div class="card-body p-4 p-xxl-5">
                    <figure>
                      <img class="img-fluid rounded rounded-circle mb-4 border border-5" loading="lazy" src="image/testi1.png" alt="Luke Reeves" />
                      <figcaption>
                        <div class="bsb-ratings text-warning mb-3" data-bsb-star="5" data-bsb-star-off="0"></div>
                        <blockquote class="bsb-blockquote-icon mb-4 fs-5">brand yang sangat bagus, pengemasan aman dan penjual sangat ramah</blockquote>
                        <h4 class="mb-2">Customer 3</h4>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>        
        <h2 class="fs-6 text-secondary mb-2 text-uppercase text-center">Happy Customers</h2>
        <p class="display-5 mb-4 mb-md-5 text-center fs-3 tw-400">Silahkan beri kami kritik dan saran disini</p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle" />
        <div class="row mt-3 mb-4">
          <div class="col-12 col-md-3"></div>
          <div class="col-12 col-md-6">
            <div class="feedback-form mt-4">
              <form class="fw-bold" id="feedbackFormElement" data-aos="fade-in">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="Nama" />
                </div>
                <div class="mb-3">
                  <label for="kritik" class="form-label">Kritik</label>
                  <textarea class="form-control" id="kritik" rows="3" placeholder="Kritik"></textarea>
                </div>
                <div class="mb-3">
                  <label for="saran" class="form-label">Saran</label>
                  <textarea class="form-control" id="saran" rows="3" placeholder="Saran"></textarea>
                </div>
                <div class="mb-3">
                  <label for="pesan" class="form-label">Pesan</label>
                  <textarea class="form-control" id="pesan" rows="3" placeholder="Pesan"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Feedback</button>
              </form>
            </div>
          </div>
          <div class="col-12 col-md-3"></div>
        </div>
      </div>
    </div>
    <footer id="footer" class="footer position-relative light-background">
      <div class="container footer-top">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center fs-3" style="text-decoration: none; color: white">
              <span class="sitename fs-1">QuickStart</span>
            </a>
            <div class="footer-contact pt-3">
              <p class="mb-1 fs-5"><strong>Phone:</strong> <span>+62 000-000-000</span></p>
              <p class="mb-1 fs-5"><strong>Email:</strong> <span>@gmai.com</span></p>
              <p class="mb-1 fs-5"> Lets find out!</p>
              
          </div>
            <div class="social-links d-flex mt-4">
              <a href=""><i class="bi bi-twitter-x">
                <img src="" alt="">
              </i></a>
              <a href=""><i class="bi bi-facebook">
                <img src="" alt="">
              </i></a>
              <a href=""><i class="bi bi-instagram">
                <img src="" alt="">
              </i></a>
              <a href=""><i class="bi bi-linkedin">
                <img src="" alt="">
              </i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links"></div>

          <div class="col-lg-2 col-md-3 footer-links"></div>

          <div class="col-lg-4 col-md-12 footer-newsletter my-auto mx-auto d-flex flex-column align-items-left">
    <iframe
      class="map"
      src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d8766.925079314353!2d110.41350367545591!3d-7.027570053745184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMDEnNDQuOCJTIDExMMKwMjUnMzkuOCJF!5e1!3m2!1sen!2sid!4v1721807800851!5m2!1sen!2sid"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
      style="width: 100%; height: 190px; border: 0; margin-top:30px;"
    ></iframe>
    <p class="my-2 fs-5 fw-600 mt-3">Jalan Jangli Krajan Barat III</p>
    <p class="mb-5 fs-5 fw-600">Semarang, 50274</p>
</div>

        </div>
      </div>
      <div class="container copyright text-center mt-4">
        <p>© <span>2024</span><strong class="px-1 sitename">umkm mbak G</strong><span>All rights reserved</span></p>
        <div class="credits"></div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        // Select all cards
        const cards = document.querySelectorAll('.card');

        // Add click event listener to each card
        cards.forEach((card) => {
          card.addEventListener('click', function () {
            // Retrieve product data from card attributes
            const name = this.getAttribute('data-name');
            const price = this.getAttribute('data-price');
            const desc = this.getAttribute('data-desc');
            const image = this.getAttribute('data-image');

            // Set modal content
            document.getElementById('modalProductTitle').textContent = name;
            document.getElementById('modalProductPrice').textContent = price;
            document.getElementById('modalProductDesc').textContent = desc;
            document.getElementById('modalProductImage').src = image;
          });
        });
      });
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const navLinks = document.querySelectorAll('.nav-link');
        function onScroll() {
          let currentSection = '';

          // Loop through each section to determine the one currently in view
          document.querySelectorAll('section').forEach((section) => {
            const sectionTop = section.offsetTop - 60; // Adjust based on your navbar height
            if (window.scrollY >= sectionTop) {
              currentSection = section.getAttribute('id');
            }
          });

          // Remove active class from all nav-links
          navLinks.forEach((link) => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${currentSection}`) {
              link.classList.add('active');
            }
          });
        }

        // Listen for scroll events
        window.addEventListener('scroll', onScroll);
      });
      function toggleText() {
    var moreText = document.querySelector('.more-text');
    var link = document.querySelector('.read-more-link');
    var aboutDesc = document.querySelector('.about-desc');

    if (moreText.style.display === 'none' || moreText.style.display === '') {
        moreText.style.display = 'inline'; // Show the extra text
        aboutDesc.style.maxHeight = 'none'; // Allow the full text to be visible
        link.textContent = 'Read Less';
    } else {
        moreText.style.display = 'none'; // Hide the extra text
        aboutDesc.style.maxHeight = '60px'; // Limit height to hide overflow text
        link.textContent = 'Read More';
    }
}
function toggleText() {
  var desc = document.getElementById("aboutDesc");
  var readMoreLink = document.getElementById("readMoreLink");

  if (desc.classList.contains("expanded")) {
    desc.classList.remove("expanded");
    readMoreLink.innerText = "Read More";
  } else {
    desc.classList.add("expanded");
    readMoreLink.innerText = "Read Less";
  }
}
    </script>
  </body>
</html>
@endsection