@extends('home.layout')
@section('title','Trang Chủ')
@section('content')

<!--/ slider star /-->
@include('home.slider');
<!--/ slider end /-->

<!--/ Services Star /-->
<section class="section-services section-t8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a">TẤT CẢ CÁC DỊCH VỤ</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card-box-c foo">
          <div class="card-header-c d-flex">
            <div class="card-box-ico">
              <span class="fa fa-gamepad"></span>
            </div>
            <div class="card-title-c align-self-center">
              <h2 class="title-c">Phong cách sống</h2>
            </div>
          </div>
          <div class="card-body-c">
            <p class="content-c">
              
            </p>
          </div>
          <div class="card-footer-c">
            <a href="#" class="link-c link-icon">Xem Thêm
              <span class="ion-ios-arrow-forward"></span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-box-c foo">
          <div class="card-header-c d-flex">
            <div class="card-box-ico">
              <span class="fa fa-usd"></span>
            </div>
            <div class="card-title-c align-self-center">
              <h2 class="title-c">Cho Thuê</h2>
            </div>
          </div>
          <div class="card-body-c">
            <p class="content-c">
             
            </p>
          </div>
          <div class="card-footer-c">
            <a href="#" class="link-c link-icon">Xem Thêm
              <span class="ion-ios-arrow-forward"></span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-box-c foo">
          <div class="card-header-c d-flex">
            <div class="card-box-ico">
              <span class="fa fa-home"></span>
            </div>
            <div class="card-title-c align-self-center">
              <h2 class="title-c">Trao Đổi</h2>
            </div>
          </div>
          <div class="card-body-c">
            <p class="content-c">
             
            </p>
          </div>
          <div class="card-footer-c">
            <a href="#" class="link-c link-icon">Xem Thêm
              <span class="ion-ios-arrow-forward"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Services End /-->

<!--/ Property Star /-->
@include('home.cardui')

<!--/ Property End /-->

<!--/ Agents Star /-->
@include('home.userstar')
<!--/ Agents End /-->

<!--/ News Star /-->
@include('home.oldproduct')
<!--/ News End /-->

<!--/ Testimonials Star /-->
<section class="section-testimonials section-t8 nav-arrow-a">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a">Đánh Giá</h2>
          </div>
        </div>
      </div>
    </div>
    <div id="testimonial-carousel" class="owl-carousel owl-arrow">
      <div class="carousel-item-a">
        <div class="testimonials-box">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="testimonial-img">
                <img src="img/testimonial-1.jpg" alt="" class="img-fluid">
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="testimonial-ico">
                <span class="ion-ios-quote"></span>
              </div>
              <div class="testimonials-content">
                <p class="testimonial-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                  debitis hic ber quibusdam
                  voluptatibus officia expedita corpori.
                </p>
              </div>
              <div class="testimonial-author-box">
                <img src="img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
                <h5 class="testimonial-author">Albert & Erika</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a">
        <div class="testimonials-box">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="testimonial-img">
                <img src="img/testimonial-2.jpg" alt="" class="img-fluid">
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="testimonial-ico">
                <span class="ion-ios-quote"></span>
              </div>
              <div class="testimonials-content">
                <p class="testimonial-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                  debitis hic ber quibusdam
                  voluptatibus officia expedita corpori.
                </p>
              </div>
              <div class="testimonial-author-box">
                <img src="img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar">
                <h5 class="testimonial-author">Pablo & Emma</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection