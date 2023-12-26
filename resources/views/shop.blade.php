@extends('layout/navbar')
@section('container')

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
            <div class="btn-box2">
              <a href="{{ url('/edit/' . $b->id) }}" class="btn1">
                Edit
              </a>
              <a href="#" class="btn2" onclick="
              event.preventDefault();
              if (confirm('Do you want to remove this?')) {
                document.getElementById('delete-row-{{ $b->id }}').submit();
              }">
                Hapus
              </a>
              <form id="delete-row-{{ $b->id }}" action="{{ route('destroy', ['id' => $b->id]) }}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                @csrf
            </form>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="btn-box">
        <a href="{{route('tambah')}}">
          Tambah Barang
        </a>
      </div>
    </div>
  </section>
@endsection