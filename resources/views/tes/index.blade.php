@extends('komponen.master')
@section('konten')
<div class="wrapper content">
    <div
      id="carouselExampleControls"
      class="carousel slide"
      data-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            class="d-block w-100"
            src="images/food/gudeg.jfif"
            alt="First slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="images/food/burger.jfif"
            alt="Second slide"
          />
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="..." alt="Third slide" />
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleControls"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleControls"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- section conr=ten 2 -->

    <div class="section-2">
      <a href="#">
        <h5 class="pt-5 text-white">Rilis terbaru</h5>
      </a>
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="..." alt="Card image cap" />
        </div>
        <div class="card">
          <img
            class="card-img-top"
            src="images/team/1.jpg"
            alt="Card image cap"
          />
        </div>
        <div class="card">
          <img
            class="card-img-top"
            src="images/team/2.jpg"
            alt="Card image cap"
          />
        </div>
        <div class="card">
          <img
            class="card-img-top"
            src="images/team/2.jpg"
            alt="Card image cap"
          />
        </div>
        <div class="card">
          <img
            class="card-img-top"
            src="images/team/2.jpg"
            alt="Card image cap"
          />
        </div>
        <div class="card">
          <img
            class="card-img-top"
            src="images/team/2.jpg"
            alt="Card image cap"
          />
        </div>
      </div>
      <a href="#">
        <h5 class="pt-5 text-white">Sedang tren</h5>
      </a>
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="..." alt="Card image cap" />
        </div>
        <div class="card">
          <img
            class="card-img-top"
            src="images/team/1.jpg"
            alt="Card image cap"
          />
        </div>
        <div class="card">
          <img
            class="card-img-top"
            src="images/team/1.jpg"
            alt="Card image cap"
          />
        </div>
        <div class="card">
          <img
            class="card-img-top"
            src="images/team/1.jpg"
            alt="Card image cap"
          />
        </div>
        <div class="card">
          <img
            class="card-img-top"
            src="images/team/1.jpg"
            alt="Card image cap"
          />
        </div>
        <div class="card">
          <img
            class="card-img-top"
            src="images/team/2.jpg"
            alt="Card image cap"
          />
        </div>
      </div>

      <a href="#">
        <h5 class="pt-5 text-white">Tonton Lagi</h5>
      </a>
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="..." alt="Card image cap" />
        </div>
        <div class="card">
          <img
            class="card-img-top"
            src="images/team/1.jpg"
            alt="Card image cap"
          />
        </div>
        <div class="card">
          <img
            class="card-img-top"
            src="images/team/1.jpg"
            alt="Card image cap"
          />
        </div>
        <div class="card">
          <img
            class="card-img-top"
            src="images/team/1.jpg"
            alt="Card image cap"
          />
        </div>
        <div class="card">
          <img
            class="card-img-top"
            src="images/team/1.jpg"
            alt="Card image cap"
          />
        </div>
        <div class="card">
          <img
            class="card-img-top"
            src="images/team/2.jpg"
            alt="Card image cap"
          />
        </div>
      </div>
    </div>
  </div>
@endsection