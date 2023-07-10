@extends('layouts.template')

@section('judul')
Home
@endsection

@section('hero')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Kami menyediakan jasa Rental Mobil</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Untuk daerah kota Tegal</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Lanjutkan</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{asset('tema/img/rental-mobil.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
@endsection

@section('main')


<main id="main">
<!-- ======= About Section ======= -->
<section id="about" class="about">

  <div class="container" data-aos="fade-up">
    <div class="row gx-0">

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h2>TENTANG KAMI</h2>
          <p>
            Zii Rent Car Tegal adalah penyedia jasa sewa mobil di Tegal. Bagi Anda yang sedang berlibur di Tegal dan membutuhkan sewa mobil, Zii Rent Car siap memberikan armada terbaik untuk Anda. Atau bagi Anda yang membutuhkan rental mobil lepas kunci, Zii Rent Car juga bisa menyediakan. Dengan syarat yang mudah dan harga terjangkau, dapatkan garansi pelayanan terbaik dari Zii Rent Car.
          </p>
          <div class="text-center text-lg-start">

            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{asset('tema/img/rent-car.png')}}" class="img-fluid" alt="">
      </div>

    </div>
  </div>

</section><!-- End About Section -->

<!-- ======= Values Section ======= -->
<section id="values" class="values">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Zii Rental Mobil</h2>
      <p>LAYANAN KAMI</p>
    </header>

    <div class="row">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="box">
          <img src="{{asset('tema/img/uang-icon.png')}}" class="img-fluid" alt="">
          <h3>HARGA MURAH</h3>
          <p>Harga yang kami berikan merupakan harga yang terjangkau di berbagai kalangan dan tentunya dapat menyesuaikan budget anda.</p>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
        <div class="box">
          <img src="{{asset('tema/img/icon-car.png')}}" class="img-fluid" alt="">
          <h3>LENGKAP</h3>
          <p>Armada yang kami miliki sangat bervariasi dan lengkap memudahkan Anda untuk memilih armada sesuai dengan kebutuhan..</p>
        </div>
      </div>

      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
        <div class="box">
          <img src="{{asset('tema/img/terawat.png')}}" class="img-fluid" alt="">
          <h3>TERAWAT</h3>
          <p>Armada kami merupakan armada yang terawat dan bersih, sehingga Anda tidak perlu khawatir dengan kebersihan dan kenyamanan saat berkendara.</p>
        </div>
      </div>
      
      <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
        <div class="box">
          <img src="{{asset('tema/img/aman.png')}}" class="img-fluid" alt="">
          <h3>AMAN</h3>
          <p>
            Rasa aman akan Anda rasakan selama perjalanan karena armada kami memiliki dokumen yang lengkap dan tentunya pajak yang dibayar tepat waktu.</p>
        </div>
      </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
          <div class="box">
            <img src="{{asset('tema/img/contact.png')}}" class="img-fluid" alt="">
            <h3>FASILITAS</h3>
            <p>kami menyediakan fasilitas yang lengkap dan aman untuk para penyewa mobil kami
              dan jika anda mengalami kendala pada saat akan menyewa mobil , anda bisa langsung menghubungi kami.
            </p>
      </div>
    </div>

    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
      <div class="box">
        <img src="{{asset('tema/img/lokasi.png')}}" class="img-fluid" alt="">
        <h3>LOKASI</h3>
        <p>Kami menyewakan mobil untuk lokasi yang terdekat dari konsumen dan kami menyediakan diskon sebesar 40% untuk konsumen yang baru pertama menyewa mobil pada Kami ,Lokasi kami add di Kota Tegal</p>
      </div>
    </div>

  </div>

</section><!-- End Values Section -->


<!-- ======= Review Konsumen ======= -->
<section id="counts" class="counts">
  <div class="container" data-aos="fade-up">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-emoji-smile"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Konsumen yang suka</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Rating</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-headset" style="color: #15be56;"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Pelayanan</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-people" style="color: #bb0852;"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p></p>
          </div>
        </div>
      </div>

    </div>

  </div>

</section><!-- End Review konsumen -->  

<!-- ======= Testimonial Konsumen ======= -->
<section id="testimonials" class="testimonials">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <p>TESTIMONI</p>
      <br>
      <h2>Beberapa Pelanggan yang telah merasakan kepuasan layanan kami</h2>
    </header>

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Terima kasih zii rental mobil , sudah menyediakan website
              rekomendasi rental mobil ini 
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('tema/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Pengusaha</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Sering kesulitan kalau mau sewa mobil yg cocokk untuk perjalanan bareng keluarga,
              untung ada website rekomendasi mobil dari zii rental mobil, Terimakasih
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('tema/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Mahasiswa</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Untung ada website rekomendasi rentak mobil ini, jadi lebih mudah untuk mencari spesifikasi mobil
              yang cocok untuk dipakai dengan keluarga, Terima Kasih Zii Rental Mobil
            </p>
            <div class="profile mt-auto">
              <img src="{{asset('tema/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- End Testimonials Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <p>HUBUNGI KAMI</p>
    </header>

    <div class="row gy-4">

      <div class="col-lg-6">

        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p>Jln.Teuku Umar<br>Tegal, No. 187-203</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-telephone"></i>
              <h3>Telephone</h3>
              <p>+6285998028730</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p>ziirentalmobil12@gmail.com</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-clock"></i>
              <h3>Jam Buka</h3>
              <p>Senin - Jumat<br>9:00 - 19.00</p>
              <br>
              <p> Sabtu - Minggu<br>08.00 - 22.00</p>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-6">
        <form action="forms/contact.php" method="post" class="php-email-form">
          <div class="row gy-4">
           <img src="{{asset('tema/img/rental-mobil.png')}}" alt="">
           
@endsection