<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TAFROZ</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('public/icon')}}/logo.png" rel="icon">
  <link href="{{url('public/icon')}}/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('public/landingpage')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{url('public/landingpage')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{url('public/landingpage')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{url('public/landingpage')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{url('public/landingpage')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{url('public/landingpage')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <!-- Template Main CSS File -->
  <link href="{{url('public/landingpage')}}/assets/css/style.css" rel="stylesheet">

  <style>
    body,
    html {
      margin: 0;
      padding: 0;
      width: 100%;
      overflow-x: hidden;
    }



    .news .news-item {
      background: green;
      box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
      padding: 20px;
      border-radius: 10px;
      transition: all 0.3s;
      text-align: center;
    }

    .news .news-item img {
      max-width: 60%;
      max-height: 60%;
      border-radius: 10px;
      margin-bottom: 15px;
    }

    .news .news-item .title {
      font-size: 18px;
      font-weight: 600;
      margin: 0;
    }

    .title {
      font-weight: bold;
      margin-top: 5px;
    }

    .news .news-item .title a {
      color: #333;
      text-decoration: none;
    }

    .news .news-item .title a:hover {
      color: green;
    }

    .swiper-pagination {
      bottom: 10px !important;
    }

    .news .btn {
      background-color: green;
      border: none;
      color: #fff;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 5px;
    }

    .news .btn:hover {
      background-color: darkgreen;
    }

    .card {
      border-radius: 10px;
      /* Membuat ujung card menjadi lebih bulat */
      overflow: hidden;
      /* Menyembunyikan konten yang melebihi batas card */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border: 1.5px solid green;
      background-color: white;
      color: green;
      font-weight: bold;
      padding: 10px;
      /* Menambahkan bayangan lembut */
    }

    .card-img-top {
      border-top-left-radius: 15px;
      /* Membuat ujung atas gambar card menjadi lebih bulat */
      border-top-right-radius: 15px;
    }

    .footer {
      background-color: green;
      /* Warna hijau */
      color: white;
      padding: 20px;
    }

    .contact-info p {
      margin: 5px 0;
    }

    .map iframe {
      width: 100%;
      height: 200px;
      /* Menyesuaikan tinggi peta */
      border: none;
    }

    .card-custom {
      background-color: white;
      border-radius: 10px;
      padding: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }

    .card-custom .icon {
      margin-left: 5px;
    }

    .card-custom.active .dropdown-content {
      display: block;
    }

    .dropdown-content {
      display: none;
      /* position: absolute; */
      background-color: white;
      width: 100%;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
      padding: 15px;
      /* Sesuaikan padding dengan kebutuhan */
      border-radius: 10px;
    }

    .dropdown-content p {
      color: green;
      margin: 0;
      /* Hapus margin default agar tidak ada spasi di sekitar teks */
    }

    .btn-custom {
      border-radius: 10px;
      border: 1px solid green;
      background-color: white;
      color: green;
      font-weight: bold;
      padding: 10px;
      transition: background-color 0.3s;
      /* Efek transisi untuk smooth hover */
    }

    .btn-custom:hover {
      background-color: green;
      /* Mengubah warna latar belakang saat dihover */
      color: white;
      /* Mengubah warna teks saat dihover */
    }

    h6 {
      color: green;
    }

    .row.s {
      padding-left: 50px;
      padding-right: 50px;
    }

    @media (max-width: 600px) {
      .row.s {
        padding: 0px;
        margin-top: -40px;
      }
    }

    .ikon {
      background-color: green;
      border-radius: 20px;
      display: inline-block;
      width: 35px;
      height: 35px;
      padding: 0;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <!-- <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

    <div class="containers d-flex align-items-center">

    <div class="logo me-auto">
        <img src="{{url('public/logo')}}/LOGO YAFO aja.png" alt="">
        <a href="#" style="color: green;">
          YAFO AGRO INDONESIA</a>

      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#">Beranda</a></li>
          <li><a class="nav-link scrollto" href="{{url('landingpage-profil')}}">Profil</a></li>
          <li><a class="nav-link scrollto" href="{{url('detail-berita')}}">Berita dan Artikel</a></li>

        </ul>

      </nav>

      <div class="header-social-links d-flex align-items-center">
        <a href="{{url('login')}}">
          <button class="btn btn-success" style="background-color: #FDBB26;color:green">MASUK</button>
        </a>
      </div>
    </div>
    
      <i class="bi bi-list mobile-nav-toggle"></i>

    </div>
  </header> -->



  <section id="about" class="about">
    <div class="container">

      <div class="row s">

        <div class="col-lg-6 d-flex flex-column justify-contents-center">
          <div class="content pt-4 pt-lg-0">
            <img src="{{url('public/icon')}}/logo.png" alt="" height="100px" width="60px">

            <h3>
              <p><span class="font-weight-bold" style="color: black;">MAKANAN </span>
                <span class="font-weight-bold" style="color: green;">SEHAT</span>
              </p>
            </h3>
            <h3>
              <p>
                <span class="font-weight-bold" style="color: green;">PENGGANTI</span>
                <span class="font-weight-bold" style="color: black;">NASI </span>
              </p>
            </h3>

            <p class="fst-italic">
            <h4 style="color: green; text-align:justify;font-family: 'Times New Roman', Times, serif;font-size:large ">


              <p>
                Tafroz organic & healthy makanan sehat yang mampu
                menjaga tubuh dari berbagai penyakit dan praktis.
                Adanya peluang yang besar dalam usaha ini,
                kemudian menjadikan berbisnis frozen food healthy
                akan membuat peluang pasar yang besar.

              </p>
            </h4>


            </p>

          </div>
          <br>
          <button class="btn-custom ">Kenapa harus Tafroz ? </button>
          <br>
        </div>
        <div class="col-lg-6 rounded">
          <center>
            <img src="{{url('public/icon')}}/3.png" alt="" width="90%" height="100%">

          </center>
        </div>
      </div>

    </div>
  </section>

  <section id="about" class="about">
    <div class="container">
      <div class="row s">
        <div class="col-lg-6 d-flex flex-column justify-contents-center">
          <center>
            <img src="{{url('public/icon')}}/2.png" alt="" width="70%" height="100%">

          </center>

        </div>

        <div class="col-lg-6 rounded">

          <div class="content pt-4 pt-lg-0">

            <center>
              <h3>
                <p><span class="font-weight-bold" style="color: black;">Apakah anda mengalami </span>
                </p>
              </h3>
              <h3>
                <p>
                  <span class="font-weight-bold" style="color: green;">MASALAH</span>
                  <span class="font-weight-bold" style="color: black;">ini ?</span>

                </p>
              </h3>
            </center>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="card p-1 mb-1">
                  <div class="d-flex">
                    <div class="ikon p-1" style="">
                      <img src="{{url('public/icon')}}/Vector (3).png" alt="Icon 1" height="25px" width="25px">
                    </div>
                    <div class="p-1">
                      <h6>
                        Sering merasa lelah padahal tidak melakukan aktivitas fisik?
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card p-1 mb-1">
                  <div class="d-flex">
                    <div class="ikon p-1">
                      <img src="{{url('public/icon')}}/Vector (4).png" alt="Icon 1" height="25px" width="25px">
                    </div>
                    <div class="p-1">
                      <h6>
                        Sering merasa haus padahal sudah minum cukup air ?

                      </h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card p-1 mb-1">
                  <div class="d-flex">
                    <div class="ikon p-1">
                      <img src="{{url('public/icon')}}/Vector (5).png" alt="Icon 1" height="25px" width="25px">
                    </div>
                    <div class="p-1">
                      <h6>
                        Berat badan turun tanpa sebab yang jelas?

                      </h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card p-1 mb-1">
                  <div class="d-flex">
                    <div class="ikon p-1">
                      <img src="{{url('public/icon')}}/Vector (6).png" alt="Icon 1" height="25px" width="25px">
                    </div>
                    <div class="p-1">
                      <h6>
                        Luka lama atau sulit sembuh?
                      </h6>
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

  <!-- ======= News Section ======= -->
  <section id="news" class="news">
    <div class="container mt-4">
      <div class="section-title">
        <h2 style="color: black;font-weight:bold">FAKTA TENTANG</h2>
        <h3 style="color: green;font-weight:bold">DIABETES</h3>

        <div class="row s">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="news-item">
              <img src="{{url('public/icon')}}/4.png" class="img-fluid" alt="">


            </div>
            <h6 class="title" style="color: green;">
              Bukan Hanya Terjadi pada Orang Tua

            </h6>
            <p class="" style="color: green;">
              Salah satu anggapan yang umum adalah bahwa diabetes hanya terjadi pada orang tua atau mereka yang berusia lanjut.
              Namun, kenyataannya, penyakit ini dapat terjadi pada siapa pun, termasuk anak-anak dan remaja.

            </p>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="news-item">
              <img src="{{url('public/icon')}}/4.png" class="img-fluid" alt="">


            </div>
            <h6 class="title" style="color: green;">
              Diabetes Tipe 1 Bukan Disebabkan oleh Pola Makan atau Gaya Hidup
            </h6>
            <p class="" style="color: green;">
              Diabetes tipe 1 terjadi ketika sistem kekebalan tubuh secara keliru menyerang dan menghancurkan
              sel-sel pankreas yang memproduksi insulin. Hal ini karena faktor genetik dan imunologi berperan dalam perkembangan
              penyakit ini,
              bukan semata-mata karena faktor perilaku atau pola makan.
            </p>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="news-item">
              <img src="{{url('public/icon')}}/4.png" class="img-fluid" alt="">

            </div>
            <h6 class="title" style="color: green;"> Memengaruhi Berbagai Organ Tubuh</h6>

            <p class="" style="color: green;">

              Penyakit ini bisa menyebabkan kerusakan pada mata (retinopati diabetik), ginjal (nefropati diabetik),
              saraf (neuropati diabetik), dan jantung (penyakit jantung koroner). Karenanya,
              penting bagi penderita untuk menjaga pengelolaan yang baik dan rutin mengunjungi dokter untuk memantau kondisi mereka.

            </p>
          </div>

        </div>

      </div>
  </section><!-- End News Section -->


  <section id="about" class="about">
    <div class="container">
      <div class="row s">
        <div class="col-lg-6 d-flex flex-column justify-contents-center">
          <div class="content pt-4 pt-lg-0">
            <h4>
              <p><span class="font-weight-bold" style="color: black;">Mengapa anda harus </span>
              </p>
            </h4>
            <h4>
              <p>
                <span class="font-weight-bold" style="color: black;">mengkonsumsi</span>

                <span class="font-weight-bold" style="color: green;">Tafroz ? </span>

              </p>
            </h4>

          </div>

          <h4>
            <p>

              <span class="font-weight-bold" style="color: green;">Satu satunya talas organic dan healthy yang
                memiliki berbagai manfaat untuk kesehatan tubuh</span>

            </p>
          </h4>

          <div class="row">
            <div class="d-flex">
              <div class="p-1">
                <img src="{{url('public/icon')}}/centang.jpg" height="20px" width="20px">
              </div>
              <div class="p-1 mt-1">
                <h6>
                  Mengontrol Gula Darah
                </h6>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="d-flex">
              <div class="p-1">
                <img src="{{url('public/icon')}}/centang.jpg" height="20px" width="20px">
              </div>
              <div class="p-1 mt-1">
                <h6>
                  Mengurangi Resiko Penyakit Jantung

                </h6>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="d-flex">
              <div class="p-1">
                <img src="{{url('public/icon')}}/centang.jpg" height="20px" width="20px">
              </div>
              <div class="p-1 mt-1">
                <h6>
                  Menyehatkan Usus

                </h6>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="d-flex">
              <div class="p-1">
                <img src="{{url('public/icon')}}/centang.jpg" height="20px" width="20px">
              </div>
              <div class="p-1 mt-1">
                <h6>
                  Membantu Menurunkan Berat Badan
                </h6>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="d-flex">
              <div class="p-1">
                <img src="{{url('public/icon')}}/centang.jpg" height="20px" width="20px">
              </div>
              <div class="p-1 mt-1">
                <h6>
                  Menjaga Kesehatan Otot

                </h6>
              </div>
            </div>
          </div>



        </div>

        <div class="col-lg-6 rounded">
          <center>
            <img src="{{url('public/icon')}}/4.png" alt="" width="70%" height="100%">

          </center>
        </div>
      </div>

    </div>
  </section>
  <!-- ======= Footer ======= -->
  <!-- <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="contact-info">
          <p><i class="bi bi-envelope"></i> </p>
          
            <p><i class="bi bi-map"></i> </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="contact-info">
            <p>IKUTI KAMI</p>
            <p>
              <a href="https://www.tiktok.com/@yafoagro_indonesia" style="color: blue;">
                <i class="bi bi-tiktok"></i> @yafoagro_indonesia</a>
            </p>
            <p>
            <a href="https://www.instagram.com/yafoagroindonesia" style="color: blue;">
            <i class="bi bi-instagram"></i> @yafoagroindonesia</a>
            </p>
            <p>
            <a href="https://yafoagro.com/" style="color: blue;">
            <i class="bi bi-globe"></i> yafoagro.com</a>
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="map">
            <h5 style="font-weight: bold;">
            Lokasi

            </h5>
         
          </div>
        </div>
      </div>
    </div>
  </footer> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('public/landingpage')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{url('public/landingpage')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('public/landingpage')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{url('public/landingpage')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{url('public/landingpage')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{url('public/landingpage')}}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{url('public/landingpage')}}/assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>


</body>

</body>

</html>