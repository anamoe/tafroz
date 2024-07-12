<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TAFROZ</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('public/icon/logo.png') }}" rel="icon">
  <link href="{{ asset('public/icon/logo.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('landingpage/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <!-- Template Main CSS File -->
  <link href="{{asset('landingpage/assets/css/style.css')}}" rel="stylesheet">

  <style>
    body,
    html {
      margin: 0;
      padding: 0;
      width: 100%;
      overflow-x: hidden;
    }

    .card-container img {
      margin-right: 20px;
    }

    .news-item img {
      width: 100%;
      height: auto;
      /* Menjaga rasio aspek gambar */
      max-height: 200px;
      /* Atur tinggi maksimum sesuai keinginan */
      object-fit: cover;
      border-radius: 10px;
      /* Agar gambar terpotong dengan rapi jika melebihi ukuran container */
    }

    .news-item {
      border-radius: 10px;
      background-color: #4ECB71;
      padding: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      /* Untuk memastikan gambar tidak keluar dari container */
      margin-bottom: 10px;
      /* Menambahkan margin bawah untuk memberikan ruang antar item */
    }

    .col-lg-4,
    .col-md-4 {
      padding: 10px;
      /* Menambahkan padding untuk memberikan ruang antar kolom */
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
      color: #4ECB71;
    }



    .card {
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border: 1.5px solid #4ECB71;
      background-color: #F8FFEE;
      color: #4ECB71;
      font-weight: bold;
      padding: 10px;
    }




    .btn-custom {
      border-radius: 10px;
      border: 1px solid #4ECB71;
      background-color: #F8FFEE;
      color: #4ECB71;
      font-weight: bold;
      padding: 10px;
      transition: background-color 0.3s;
    }

    .btn-custom:hover {
      background-color: #4ECB71;
      color: #F8FFEE;
    }

    h6 {
      color: #4ECB71;
    }

    .row.s {
      padding-left: 30px;
      padding-right: 30px;
      padding-top: 30px;
    }

    .card-custom {
      background-color: #F8FFEE;
      border-radius: 10px;
      padding: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      /* height: 50px; */
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
      background-color: #F8FFEE;
      width: 100%;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
      padding: 15px;
      /* Sesuaikan padding dengan kebutuhan */
      border-radius: 10px;
    }

    .dropdown-content p {
      color: #4ECB71;
      margin: 0;
      /* Hapus margin default agar tidak ada spasi di sekitar teks */
    }

    .city-list {
      margin-top: 10px;
      padding-left: 20px;
      display: none;
    }

    .city-item {
      padding: 8px;
      border-bottom: 1px solid #ccc;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .store-item {
      padding: 10px;
      border-bottom: 1px solid #ccc;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .city-item:hover {
      background-color: #f0f0f0;
    }

    @media (max-width: 600px) {
      .row.s {
        padding: 0px;
        margin-top: -40px;
      }

      .diabetes {
        margin-bottom: 40px;
      }
    }

    .ikon {
      background-color: #4ECB71;
      border-radius: 20px;
      display: inline-block;
      width: 35px;
      height: 35px;
      padding: 0;
    }
        /* Tambahkan style ini ke file CSS Anda */
    .distributor-card {
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .distributor-card .card-title {
      font-size: 16px;
      font-weight: bold;
    }

    .distributor-card .card-text {
      font-size: 14px;
    }

    .distributor-card .btn {
      background-color: #28a745;
      color: #fff;
      border-radius: 5px;
      text-transform: uppercase;
    }

    .distributor-card .btn:hover {
      background-color: #218838;
      color: #fff;
    }

  </style>
</head>

<body>

  <section id="about" class="about">
    <div class="container">

      <div class="row s">
        <div class="col-lg-6 d-flex flex-column justify-contents-center">
          <div class="content pt-4 pt-lg-0">
            <img src="{{ asset('public/icon/logo.png') }}" alt="" height="80px" width="60px">
            <h3>
              <p><span class="font-weight-bold" style="color: black;">MAKANAN </span>
                <span class="font-weight-bold" style="color: #4ECB71;">SEHAT</span>
              </p>
            </h3>
            <h3>
              <p>
                <span class="font-weight-bold" style="color: #4ECB71;">PENGGANTI</span>
                <span class="font-weight-bold" style="color: black;">NASI </span>
              </p>
            </h3>

            <p class="fst-italic">
            <h4 style="color: #4ECB71; text-align:justify;font-family: 'Times New Roman', Times, serif;font-size:large ">

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
        <div class="col-lg-6 rounded" style="margin-top: -100px;">
          <center>
            <img src="{{ asset('public/icon/3.png') }}" alt="" width="120%" height="100%" data-aos="fade-up">
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
            <img src="{{ asset('public/icon/2.png') }}" alt="" width="70%" height="100%" data-aos="fade-up">
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
                  <span class="font-weight-bold" style="color: #4ECB71;">MASALAH</span>
                  <span class="font-weight-bold" style="color: black;">ini ?</span>

                </p>
              </h3>
            </center>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-md-12 mb-2">
                <div class="card p-1 mb-1">
                  <div class="d-flex">
                    <div class="ikon p-1" style="">
                      <img src="{{ asset('public/icon/Vector (3).png') }}" alt="Icon 1" height="25px" width="25px">
                    </div>
                    <div class="p-1">
                      <h6>
                        Sering merasa lelah padahal tidak melakukan aktivitas fisik?
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="card p-1 mb-1">
                  <div class="d-flex">
                    <div class="ikon p-1">
                      <img src="{{ asset('public/icon/Vector (4).png') }}" alt="Icon 1" height="25px" width="25px">
                    </div>
                    <div class="p-1">
                      <h6>
                        Sering merasa haus padahal sudah minum cukup air ?

                      </h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="card p-1 mb-1">
                  <div class="d-flex">
                    <div class="ikon p-1">
                      <img src="{{ asset('public/icon/Vector (5).png') }} alt="Icon 1" height="25px" width="25px">
                    </div>
                    <div class="p-1">
                      <h6>
                        Berat badan turun tanpa sebab yang jelas?

                      </h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-2">
                <div class="card p-1 mb-1">
                  <div class="d-flex">
                    <div class="ikon p-1">
                      <img src="{{ asset('public/icon/Vector (5).png') }}" alt="Icon 1" height="25px" width="25px">
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
    <div class="container">
      <div class="section-title">
        <div class="diabetes">
          <h2 style="color: black;font-weight:bold">FAKTA TENTANG</h2>
          <h3 style="color: #4ECB71;font-weight:bold">DIABETES</h3>
        </div>

        <div class="row s text-center">
          <div class="col-lg-4 col-md-4 mb-2">
            <div class="news-item">
              <img src="{{ asset('public/icon/7.png') }}" class="img-fluid" alt="" data-aos="fade-up">
            </div>
            <h6 class="title" style="color: #4ECB71;">
              Bukan Hanya Terjadi pada Orang Tua
            </h6>
            <p class="" style="color: #4ECB71;">
              Salah satu anggapan yang umum adalah bahwa diabetes hanya terjadi pada orang tua atau mereka yang berusia lanjut.
              Namun, kenyataannya, penyakit ini dapat terjadi pada siapa pun, termasuk anak-anak dan remaja.

            </p>
          </div>
          <div class="col-lg-4 col-md-4 mb-2">
            <div class="news-item">
              <img src="{{ asset('public/icon/6.png') }}" class="img-fluid" alt="" data-aos="fade-up">
            </div>
            <h6 class="title" style="color: #4ECB71;">
              Diabetes Tipe 1 Bukan Disebabkan oleh Pola Makan atau Gaya Hidup
            </h6>
            <p class="" style="color: #4ECB71;">
              Diabetes tipe 1 terjadi ketika sistem kekebalan tubuh secara keliru menyerang dan menghancurkan
              sel-sel pankreas yang memproduksi insulin. Hal ini karena faktor genetik dan imunologi berperan dalam perkembangan
              penyakit ini,
              bukan semata-mata karena faktor perilaku atau pola makan.
            </p>
          </div>
          <div class="col-lg-4 col-md-4 mb-2">
            <div class="news-item">
              <img src="{{ asset('public/icon/8.png') }}" class="img-fluid" alt="" data-aos="fade-up">
            </div>
            <h6 class="title" style="color: #4ECB71;"> Memengaruhi Berbagai Organ Tubuh</h6>

            <p class="" style="color: #4ECB71;">

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

                <span class="font-weight-bold" style="color: #4ECB71;">Tafroz ? </span>

              </p>
            </h4>

          </div>

          <h4>
            <p>

              <span class="font-weight-bold" style="color: #4ECB71;">Satu satunya talas organic dan healthy yang
                memiliki berbagai manfaat untuk kesehatan tubuh</span>

            </p>
          </h4>

          <div class="row">
            <div class="d-flex">
              <div class="p-1">
                <img src="{{ asset('public/icon/centang.jpg') }}" height="20px" width="20px">
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
                <img src="{{ asset('public/icon/centang.jpg') }}" height="20px" width="20px">
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
                <img src="{{ asset('public/icon/centang.jpg') }}" height="20px" width="20px">
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
                <img src="{{ asset('public/icon/centang.jpg') }}" height="20px" width="20px">
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
                <img src="{{ asset('public/icon/centang.jpg') }}" height="20px" width="20px">
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
            <img src="{{ asset('public/icon/4.png') }}" alt="" width="70%" height="100%" data-aos="fade-up">

          </center>
        </div>
      </div>

    </div>
  </section>


  <section class="section-jingga text-center py-5" style="background-color: #4ECB71;">
    <h3 style="font-weight:bold; color:#4ECB71">BELI DI SINI</h3>
    <div class="container mt-5">
      <div class="card-container">
        <img src="{{asset('public/icon/Group 7.png')}}" alt="WhatsApp" height="60px" width="150px">
        <img src="{{asset('public/icon/9.png')}}" alt="WhatsApp" height="60px" width="150px">
        <img src="{{asset('public/icon/10.png')}}" alt="WhatsApp" height="60px" width="150px">
        <img src="{{asset('public/icon/Group 8.png')}}" alt="WhatsApp" height="60px" width="150px">
      </div>
    </div>
    <div class="class mt-5" style="color: #F8FFEE;">
      <h5>Dapatkan Ongkir Murah atau COD Di distributor</h5>
      <h5>Terdekat Di kota Anda</h5>
    </div>
    <div class="class mt-5" style="color: #F8FFEE;">
      <h5>Cari distributor Tafroz dengan alamat</h5>
      <h5>terdekat</h5>
    </div>
    <div class="class mt-5" style="color: #F8FFEE;">
      <h5>Klik "BELI DISINI"</h5>
    </div>
    <div class="container">
      <center>
        <div class="container">
          <div class="form-group mb-5 mt-5 m-1 w-75">
            <form action="" method="GET" class="d-flex">
              <input type="text" class="form-control" id="searchProvinceInput" placeholder="Cari Kota/provinsi">
            </form>
          </div>
        </div>
      </center>
      <div id="provinceList">
        @foreach ($provinsi as $province)
            <div class="province-item" data-province-id="{{ $province['id'] }}">
                {{-- <a href="" class="btn btn-success m-1 w-100">{{ $province['name'] }}</a> --}}
                <button class="btn mb-1 mt-1 " style="width: 100%;background-color:#F8FFEE;color:#4ECB71;font-weight:bold">{{ $province['name'] }}</button>
            </div>
            <div class="cities-list" id="cities-list-{{ $province['id'] }}">
                <ul class="mb-1 mt-1 w-100">
                    <!-- Cities will be added dynamically here -->
                </ul>
            </div>
        @endforeach
    </div>
    
  </div>  

  </section>

  <a href="#" style="background-color: #4ECB71;" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset ('landingpage/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset ('landingpage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('landingpage/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset ('landingpage/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset ('landingpage/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset ('landingpage/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset ('landingpage/assets/js/main.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
    $(document).ready(function() {
  const searchInput = document.getElementById('searchProvinceInput');

  // Handler for input event on search field
  searchInput.addEventListener('input', function() {
    const query = searchInput.value.trim().toLowerCase();
    const provinceItems = document.getElementsByClassName('province-item');
    const cityItems = document.getElementsByClassName('city-item');

    // Filter provinces based on the query
    Array.from(provinceItems).forEach(function(provinceItem) {
      const provinceName = provinceItem.querySelector('button').innerText.toLowerCase();
      let matchFound = false;

      // Check if province name matches the query
      if (provinceName.includes(query)) {
        provinceItem.style.display = 'block';
        matchFound = true;
      } else {
        // Check if any city in the province matches the query
        const cities = provinceItem.querySelectorAll('.city-item');
        cities.forEach(function(cityItem) {
          const cityName = cityItem.innerText.toLowerCase();
          if (cityName.includes(query)) {
            cityItem.style.display = 'block';
            matchFound = true;
          } else {
            cityItem.style.display = 'none';
          }
        });

        provinceItem.style.display = matchFound ? 'block' : 'none';
      }
    });

    // Filter cities based on the query
    Array.from(cityItems).forEach(function(cityItem) {
      const cityName = cityItem.innerText.toLowerCase();
      if (cityName.includes(query)) {
        cityItem.style.display = 'block';
      } else {
        cityItem.style.display = 'none';
      }
    });
  });

  // Handler untuk klik pada provinsi
  $(document).on('click', '.province-item', function() {
    var provinceId = $(this).data('province-id');
    console.log('Province clicked:', provinceId);
    fetchCities(provinceId);

    // Menyembunyikan semua kota kecuali yang terkait dengan provinsi yang diklik
    $('.cities-list').not($(this).next('.cities-list')).hide();

    // Toggle (menyembunyikan/menampilkan) kota dari provinsi yang dipilih
    $(this).next('.cities-list').toggle();
  });

  // Handler untuk klik pada kota
  $(document).on('click', '.city-item', function() {
    var kotaId = $(this).data('kota-id');
    console.log('City clicked:', kotaId);

    // Menyembunyikan semua distributor cards kecuali yang terkait dengan kota yang diklik
    $('.distributor-cards').not($(this).next('.distributor-cards')).hide();
    // Toggle (menyembunyikan/menampilkan) distributor cards dari kota yang dipilih
    $(this).next('.distributor-cards').toggle();
    fetchDistributors(kotaId, $(this));
  });

  // Fungsi untuk mengambil kota berdasarkan ID provinsi
  async function fetchCities(provinceId) {
    const url = `http://localhost/tafroz/get-cities?province_id=${provinceId}`;
    console.log('Fetching cities for province:', provinceId);

    try {
      const response = await fetch(url);
      if (!response.ok) {
        throw new Error('Failed to fetch cities');
      }
      const cities = await response.json();
      console.log('Cities fetched:', cities);
      const citiesUl = document.getElementById('cities-list-' + provinceId).querySelector('ul');
      citiesUl.innerHTML = ''; // Clear previous cities

      cities.forEach(city => {
        const li = document.createElement('li');
        li.textContent = city.name;
        li.classList.add('city-item');
        li.setAttribute('data-kota-id', city.id); // Tambahkan data-kota-id
        li.style.backgroundColor = '#F8FFEE'; // Menambahkan background 
        li.style.color = '#4ECB71'; // Menambahkan background 
        li.style.marginBottom = '2px'; // Menambahkan margin bottom 5px
        li.style.borderRadius = '5px'; // Menambahkan sudut melengkung (rounded)
        citiesUl.appendChild(li);
      });

    } catch (error) {
      console.error('Error fetching cities:', error);
      const citiesUl = document.getElementById('cities-list-' + provinceId).querySelector('ul');
      citiesUl.innerHTML = '<li>Error fetching cities</li>';
    }
  }

  // Fungsi untuk mengambil distributor berdasarkan ID kota
  async function fetchDistributors(kotaId, parentDiv) {
    const url = `http://localhost/tafroz/get-distributors-by-city?kota_id=${kotaId}`;
    console.log('Fetching distributors for city:', kotaId);

    try {
      const response = await fetch(url);
      if (!response.ok) {
        throw new Error('Failed to fetch distributors');
      }
      const distributors = await response.json();
      console.log('Distributors fetched:', distributors);
      displayDistributors(distributors, parentDiv);

    } catch (error) {
      console.error('Error fetching distributors:', error);
      // Handle error
    }
  }

  // Fungsi untuk menampilkan distributor
  function displayDistributors(distributors, parentDiv) {
    // Clear previous distributor cards
    const distributorCards = parentDiv.next('.distributor-cards');
    if (distributorCards.length === 0) {
      parentDiv.after('<div class="distributor-cards row"></div>');
    }
    parentDiv.next('.distributor-cards').empty();

    // Append new distributor cards
    distributors.forEach(distributor => {
      const cardHtml = `
      <div class="col-md-4">
        <div class="card distributor-card mb-2 mt-2 me-1 ms-1">
          <div class="card-body text-start">
            <h5 class="card-title">${distributor.nama_lengkap}<img src="https://cdn.icon-icons.com/icons2/1708/PNG/512/3986735-online-shop-store-store-icon_112335.png" alt="" width="30px" style="float:right"></h5>
            <small>${distributor.alamat_lengkap}</small>
            <div class="mb-2">
            </div>
            <small class="mb-3"> ${distributor.no_wa}</small>
            <br>
            <button class="btn btn-success mt-3">BELI DISINI</button>
          </div>
        </div>
      </div>
      `;
      parentDiv.next('.distributor-cards').append(cardHtml);
    });
  }
});

  </script>
</body>
</html>