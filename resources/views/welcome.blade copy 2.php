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
      background-color: green;
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
      color: green;
    }



    .card {
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border: 1.5px solid green;
      background-color: white;
      color: green;
      font-weight: bold;
      padding: 10px;
    }




    .btn-custom {
      border-radius: 10px;
      border: 1px solid green;
      background-color: white;
      color: green;
      font-weight: bold;
      padding: 10px;
      transition: background-color 0.3s;
    }

    .btn-custom:hover {
      background-color: green;
      color: white;
    }

    h6 {
      color: green;
    }

    .row.s {
      padding-left: 30px;
      padding-right: 30px;
      padding-top: 30px;
    }

    .card-custom {
      background-color: white;
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

    .city-list {
      margin-top: 10px;
      padding-left: 20px;
      display: none;
    }

    .city-item {
      padding: 10px;
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

  <section id="about" class="about">
    <div class="container">

      <div class="row s">
        <div class="col-lg-6 d-flex flex-column justify-contents-center">
          <div class="content pt-4 pt-lg-0">
            <img src="{{url('public/icon')}}/logo.png" alt="" height="80px" width="60px">
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
        <div class="col-lg-6 rounded" style="margin-top: -100px;">
          <center>
            <img src="{{url('public/icon')}}/3.png" alt="" width="120%" height="100%" data-aos="fade-up">
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
            <img src="{{url('public/icon')}}/2.png" alt="" width="70%" height="100%" data-aos="fade-up">
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
              <div class="col-md-12 mb-2">
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
              <div class="col-md-12 mb-2">
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
              <div class="col-md-12 mb-2">
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
              <div class="col-md-12 mb-2">
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
    <div class="container">
      <div class="section-title">
        <div class="diabetes">
          <h2 style="color: black;font-weight:bold">FAKTA TENTANG</h2>
          <h3 style="color: green;font-weight:bold">DIABETES</h3>
        </div>

        <div class="row s">
          <div class="col-lg-4 col-md-4 mb-2">
            <div class="news-item">
              <img src="{{url('public/icon')}}/7.png" class="img-fluid" alt="" data-aos="fade-up">
            </div>
            <h6 class="title" style="color: green;">
              Bukan Hanya Terjadi pada Orang Tua
            </h6>
            <p class="" style="color: green;">
              Salah satu anggapan yang umum adalah bahwa diabetes hanya terjadi pada orang tua atau mereka yang berusia lanjut.
              Namun, kenyataannya, penyakit ini dapat terjadi pada siapa pun, termasuk anak-anak dan remaja.

            </p>
          </div>
          <div class="col-lg-4 col-md-4 mb-2">
            <div class="news-item">
              <img src="{{url('public/icon')}}/6.png" class="img-fluid" alt="" data-aos="fade-up">
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
          <div class="col-lg-4 col-md-4 mb-2">
            <div class="news-item">
              <img src="{{url('public/icon')}}/8.png" class="img-fluid" alt="" data-aos="fade-up">
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
            <img src="{{url('public/icon')}}/4.png" alt="" width="70%" height="100%" data-aos="fade-up">

          </center>
        </div>
      </div>

    </div>
  </section>


  <section class="section-jingga text-center py-5" style="background-color: green;">
    <h3 style="font-weight:bold; color:greenyellow">BELI DI SINI</h3>
    <div class="container mt-5">
      <div class="card-container">
        <img src="{{url('public/icon/Group 7.png')}}" alt="WhatsApp" height="60px" width="150px">
        <img src="{{url('public/icon/9.png')}}" alt="WhatsApp" height="60px" width="150px">
        <img src="{{url('public/icon/10.png')}}" alt="WhatsApp" height="60px" width="150px">
        <img src="{{url('public/icon/Group 8.png')}}" alt="WhatsApp" height="60px" width="150px">
      </div>
    </div>
    <div class="class mt-5" style="color: white;">
      <h5>Dapatkan Ongkir Murah atau COD Di distributor</h5>
      <h5>Terdekat Di kota Anda</h5>
    </div>
    <div class="class mt-5" style="color: white;">
      <h5>Cari distributor Tafroz dengan alamat</h5>
      <h5>terdekat</h5>
    </div>
    <div class="class mt-5" style="color: white;">
      <h5>Klik "BELI DISINI"</h5>
    </div>

    @foreach($provinsi as $v)
    <div class="container mt-1 mx-auto" style="background-color: green;width:80%">
      <div class="card-custom rounded" id="dropdown{{$loop->index}}" style="background-color: white;">
        <div class="d-flex justify-content-between align-items-center">
          <span style="color: green;font-weight:bold">{{$v['name']}}</span>
          <!-- <button class="btn btn-link text-success" onclick="toggleDropdown('card1')">
            <i class="fas fa-caret-down icon"></i>
          </button> -->
          <button class="btn btn-link text-success" onclick="fetchCities({{ $v['id'] }}, 'dropdown{{$loop->index}}')">
            <i class="fas fa-caret-down icon"></i>
          </button>
        </div>
        <div id="cityList{{$loop->index}}" class="city-list" style="display: none;"></div> <!-- Unique id for city list -->
      </div>
      <!-- <div id="storeList{{$loop->index}}"></div> -->

    </div>
    @endforeach

  </section>

  <a href="#" style="background-color: green;" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script>
    function fetchCities(provinceId, dropdownId) {
      console.log('Fetching cities for province ID:', provinceId);
      $.ajax({
        url: 'http://localhost/tafroz/api/get-cities',
        method: 'POST',
        data: {
          province_id: provinceId
        },
        success: function(response) {
          console.log('Response received:', response);
          const cities = response;
          const dropdown = document.getElementById(dropdownId);

          if (dropdown) {
            dropdown.innerHTML = ''; // Kosongkan konten dropdown sebelum menambahkan data baru

            if (cities.length > 0) {
              cities.forEach(function(city) {


                const cityDiv = document.createElement('div');
                cityDiv.classList.add('city-item');
                cityDiv.style.padding = '10px';
                cityDiv.style.borderBottom = '1px solid #ccc';
                cityDiv.style.display = 'flex';
                cityDiv.style.justifyContent = 'space-between';
                cityDiv.style.alignItems = 'center';

                const cityName = document.createElement('span');
                cityName.textContent = city.name;
                cityName.style.color = 'green';
                cityDiv.appendChild(cityName);

                const closeButton = document.createElement('button');
                closeButton.textContent = 'X';
                closeButton.style.backgroundColor = 'transparent';
                closeButton.style.border = 'none';
                closeButton.style.color = 'red';
                closeButton.style.cursor = 'pointer';
                closeButton.onclick = function() {
                  dropdown.style.display = 'none';
                };
                cityDiv.appendChild(closeButton);

                cityDiv.onclick = function() {
                  console.log('Kota diklik:', city.name);
                  fetchStores(city.id, dropdownId);
                };

                dropdown.appendChild(cityDiv);
              });
            } else {
              dropdown.innerHTML = '<p style="color: green;">Tidak ada kota tersedia.</p>';
            }

            toggleDropdown(dropdownId); // Tampilkan dropdown setelah data diterima
          } else {
            console.error('Dropdown element with ID ' + dropdownId + ' not found.');
          }
        },
        error: function(xhr, status, error) {
          console.error('Error fetching cities:', error);
        }
      });
    }

    function fetchStores(cityId, storeListId) {
      console.log('Fetching stores for city ID:', cityId);
      $.ajax({
        url: 'http://localhost/tafroz/api/get-toko',
        method: 'POST',
        data: {
          kota_id: cityId
        },
        success: function(response) {
          console.log('Stores response received:', response);
          const stores = response;
          const storeList = document.getElementById(storeListId); // Use unique store list ID

          if (storeList) {
            storeList.innerHTML = ''; // Clear previous content

            if (stores.length > 0) {
              stores.forEach(function(store) {
                const storeDiv = document.createElement('div');
                storeDiv.classList.add('store-item');
                storeDiv.style.padding = '10px';
                storeDiv.style.borderBottom = '1px solid #ccc';
                storeDiv.style.display = 'flex';
                storeDiv.style.justifyContent = 'space-between';
                storeDiv.style.alignItems = 'center';

                const storeName = document.createElement('span');
                storeName.textContent = store.nama_lengkap;
                storeName.style.color = 'green';
                storeDiv.appendChild(storeName);

                storeList.appendChild(storeDiv);
              });
            } else {
              storeList.innerHTML = '<p style="color: green;">Tidak ada toko tersedia.</p>';
            }
          } else {
            console.error('Store list element with ID ' + storeListId + ' not found.');
          }
        },
        error: function(xhr, status, error) {
          console.error('Error fetching stores:', error);
        }
      });
    }


    function toggleDropdown(dropdownId) {
      var dropdown = document.getElementById(dropdownId);
      if (dropdown) {
        if (dropdown.style.display === "none" || dropdown.style.display === "") {
          dropdown.style.display = "block";
        } else {
          dropdown.style.display = "none";
        }
        console.log('Toggled dropdown for card:', dropdownId);
      } else {
        console.error('Dropdown element with ID ' + dropdownId + ' not found.');
      }
    }
  </script>
</body>

</body>

</html>