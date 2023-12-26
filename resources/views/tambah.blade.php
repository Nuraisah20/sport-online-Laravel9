@extends('layout/navbar')
@section('container')
<section class="contact_section layout_padding">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
            Tambah Data
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-md-6 col-lg-5 px-0">
          <form method="post" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
              <div class="alert alert-danger">
                <div class="alert-title"><h4>Whoops!</h4></div>
                    There are some problems with your input.
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div> 
            @endif   
            
            @if (session('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if (session('error'))
              <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <div>
              <label for="nama">Nama Barang </label>
              <input type="text" name="nama" placeholder="Nama Barang" />
            </div>
            <div>
                <label for="deskripsi">Deskripsi</label>
              <input type="text" name="deskripsi" class="message-box" placeholder="Deskripsi" />
            </div>
            <div>
              <label for="harga">Harga </label>
              <input type="text" name="harga" placeholder="Harga" />
            </div>
            <div>
              <label for="gambar">Gambar</label>
              <input type="file" name="gambar" placeholder="Gambar" />
            </div>
            <div class="d-flex ">
              <button type="submit">
                Kirim
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection