@extends('layout/navbar')
@section('container')

<section class="slider_section">
  <div class="slider_container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-7">
                <div class="detail-box">
                  <h1>
                    Selamat datang di <br>
                    Sportos
                  </h1>
                  <p>
                    Temukan kebutuhan perlengkapan olahraga terbaik dan terbaru hanya di sini. 
                    Kami menyediakan berbagai macam barang olahraga berkualitas tinggi untuk mendukung gaya hidup aktif dan sehat Anda. 
                    kami memiliki semua yang Anda butuhkan untuk mencapai performa terbaik Anda.
                  </p>
                  {{-- <a href="">
                    Contact Us
                  </a> --}}
                </div>
              </div>
              <div class="col-md-5 ">
                <div class="img-box">
                  <img src="images/atlet.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Produk Terbaru
        </h2>
      </div>
      <div class="row">
        @foreach ($barangs as $b)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="/images/{{($b->gambar)}}" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  {{$b->nama}}
                </h6>
                <h6>
                  Price
                  <span>
                    {{$b->harga}}
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        @endforeach
        
      </div>
      <div class="btn-box">
        <a href="{{ route('shop') }}">
          Lihat Produk
        </a>
      </div>
    </div>
  </section>
@endsection