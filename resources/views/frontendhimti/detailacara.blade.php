@extends('frontendhimti.template')

@section('content')
<header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
      <div class="container">
        <div class="navbar-brand-wrapper d-flex w-100">
          <img src="template-frontend/assets/images/HIMTI.png" alt="" width="75" height="75">
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="mdi mdi-menu navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
          <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
            <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
              <div class="navbar-collapse-logo">
                <img src="template-frontend/images/Group2.svg" alt="">
              </div>
              <button class="navbar-toggler close-button" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
              </button>
            </li>
                <li class="nav-item">             
                <a class="nav-link" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/sharing">Sharing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tutorial">Tutorial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#header-section">Acara</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/klinik">Klinik</a>
              </li>
            <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                <a href="https://web.whatsapp.com/">
                    <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Contact Us</button>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="content-wrapper">
    <div class="container">
      <section class="digital-marketing-service" id="digital-marketing-section">
        <div class="section-title" data-aos="fade-up">
          <h2>HIMTI</h2>
          <p>Detail Acara</p>
        </div>
        @foreach ($acara as $row)
        <div class="row grid-margin">
          <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-5 text-center flex-item grid-margin" data-aos="fade-right">
              <img src="{{ asset ('fotokategori/'.$row->image)}}" alt="" height="336" width="306" class="img-fluid">
            </div>
            <div class="col-5 col-lg-5 flex-item grid-margin" data-aos="fade-left">
              <h4 class="m-0"><b>{{ $row->title }}</b></h4>
              <br>
              <h5>{{ $row->deskripsi }}</h5>
              <div class="col-lg-9 col-xl-8 p-0"> 
                <p class="py-4 m-0 text-muted"> </p>
                <p class="pb-2 font-weight-medium text-muted">
                    <b>{{ tanggal_indonesia($row->created_at) }}</b>
                    <br> 
                    <b>Jam : 13.00 s/d Selesai
                    <br>
                    Materi : {{ $row->kategori->kategori }}</p></b>
              </div>
              <a href="/dtacara" class="btn btn-primary"><-Back</a>
            </div>
            @endforeach
          </div>
      </section>
      <section class="contact-details" id="contact-details-section">
        <div class="col-12 col-md-12 col-lg-12 grid-margin text-center">
          <img src="template-frontend/assets/images/HIMTI.png" height="75" width="75" alt="" class="pb-2">
          <p class="text-muted">himti.umt11@gmail.com</p>
          <p class="text-muted">Nanda Aulia Utama +62888-1488-721</p>
          <a href="https://www.facebook.com/HIMTI-UMT-487475981358484"><span class="mdi mdi-facebook"></span></a>
          <a href="https://twitter.com/adiiwinarnoo"><span class="mdi mdi-twitter"></span></a>
          <a href="https://www.instagram.com/himti.umt/"><span class="mdi mdi-instagram"></span></a>
          <a href="https://www.linkedin.com/in/adi-winarno-8b2332217/"><span class="mdi mdi-linkedin"></span></a>
        </div>
      </section>
      <footer class="border-top">
        <p class="text-center text-muted pt-4">Copyright © 2021<a href="#" class="px-1">Kelompok Belajar Web Development HIMTI-UMT</a>.
        </p>
      </footer>
    </div>
  </div>
@endsection