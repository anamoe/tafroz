<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TAFROZ</title>
  <link href="{{url('public/icon')}}/logo.png" rel="icon">
  <link href="{{url('public/icon')}}/logo.png" rel="apple-touch-icon">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    .section-orange {
      background-color: orange;
    }

    .section-jingga {
      background-color: #d49d37;
    }

    .section-light {
      background-color: #e3d09a;
    }

    /* .btn-rounded {
      border-radius: 30px;
      box-shadow: 0px 4px 2px -2px gray;
    } */

    footer {
      background-color: #c47b31;
      color: white;
    }

    .card-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      margin-top: 20px;
    }

    .card {
      margin: 10px;
      text-align: center;
      padding: 20px;
      background-color: white;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      transition: transform 0.3s ease-in-out;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card i {
      font-size: 50px;
      margin-bottom: 10px;
    }

    @media (max-width: 768px) {
      .card {
        width: 80%;
      }
    }

    .btn-rounded {
      border-radius: 30px;
      background-color: brown;
      color: white;
      font-weight: bold;
    }

    img {
      border-radius: 10px;
    }

    .social-icon {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .responsive-embed,
    .responsive-img {
      max-width: 50%;
      margin: 0 auto;
    }

    @media (max-width: 768px) {

      .responsive-embed,
      .responsive-img {
        max-width: 100%;
      }
    }

    .centered-text {
      max-width: 50%;
      font-weight: bold;
      color:black;
    }
  </style>
</head>

<body>

  <section class="section-light text-center py-2">
    <div class="container">
      <img src="https://mganikcom.swipepages.media/2024/4/65a7458d18cfc500111b5be9/banner-lp-ig-1000.webp" alt="Product Image" class="img-fluid mb-2 responsive-img">
      <div class="embed-responsive embed-responsive-16by9 responsive-embed" style="border-radius: 10px;">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/f-Ti7C77OEs?si=1aNcoOAz9FY739NR" allowfullscreen></iframe>
      </div>
    </div>
  </section>

  <section class="section-jingga text-center py-1">
    <div class="container">
      <img src="https://mganikcom.swipepages.media/2024/4/65a7458d18cfc500111b5be9/image.webp" alt="Product Image" class="img-fluid mb-2 responsive-img">
      <center>
        <p class="centered-text">
          mGanik Metafiber

          Cegah Lonjakan Gula Darah Setelah Makan

          Suplemen serat pemblokir glukosa dengan formula SugarBlocker® yang mampu memblokir gula dari makanan secara 100% alami.
        </p>
      </center>
    </div>
    <button class="btn btn-rounded">Informasi Selengkapnya</button>
  </section>

  <section class="section-light text-center py-1">
    <div class="container">
      <img src="https://mganikcom.swipepages.media/2024/4/65a7458d18cfc500111b5be9/image.webp" alt="Product Image" class="img-fluid mb-2 responsive-img">
      <center>
        <p class="centered-text">
          mGanik Metafiber

          Cegah Lonjakan Gula Darah Setelah Makan

          Suplemen serat pemblokir glukosa dengan formula SugarBlocker® yang mampu memblokir gula dari makanan secara 100% alami.
        </p>
      </center>
    </div>
    <button class="btn btn-rounded">Informasi Selengkapnya</button>
  </section>

  <section class="section-jingga text-center py-5">
    <h3 style="color: white;font-weight:bold">BELI DI SINI</h3>
    <div class="container">
      <div class="card-container">
        <img src="{{url('public/icon/button-wa.webp')}}" alt="WhatsApp" height="80px" width="200px">
        <img src="{{url('public/icon/button-shopee.webp')}}" alt="Shopee" height="80px" width="200px">
        <img src="{{url('public/icon/button-tiktok.webp')}}" alt="TikTok" height="80px" width="200px">
        <img src="{{url('public/icon/button-tokopedia.webp')}}" alt="Tokopedia" height="80px" width="200px">
      </div>
      <button class="btn btn-rounded">Mitra Seller TAFROZ</button>
    </div>
  </section>

  <footer class="text-center py-3">
    <div class="container">
      <div class="row">
        <div class="col">
          <a href="https://instagram.com" class="btn btn-rounded"><i class="fab fa-instagram"></i></a>
          <a href="https://wa.me" class="btn btn-rounded"><i class="fab fa-whatsapp"></i></a>
          <a href="https://tiktok.com" class="btn btn-rounded"><i class="fab fa-tiktok"></i></a>
          <a href="https://youtube.com" class="btn btn-rounded"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col">
          <center>
          <p class="mb-0 centered-text">@2024 - PT. TAFROZE UNIQA JAYA</p>

          </center>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>