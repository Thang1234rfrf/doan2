<section class="section-property section-t8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a">Sản Phẩm Nổi Bật</h2>
          </div>
          <div class="title-link">
            <a href="property-grid.php">Tất cả
              <span class="ion-ios-arrow-forward"></span>
            </a>
          </div>
        </div>
      </div>
    </div>

  <div id="property-carousel" class="owl-carousel owl-theme">
    @foreach ($nhanvien as $nv)
    <div class="carousel-item-b">
      <div class="card-box-a card-shadow">
        <div class="img-box-a">
          <img  src="{{ url('images/nhanvien')}}{{"/"}}{{$nv->Anh}}" alt="">
        </div>
        <div class="card-overlay">
          <div class="card-overlay-a-content">
            <div class="card-header-a">
              <h2 class="card-title-a">
              {{$nv->HoVaTen}}
              </h2>
            </div>
            <div class="card-body-a">
              <div class="price-box d-flex">
                <span class="price-a">SALE | 500.000.xxx</span>
              </div>
              <a href="#" class="link-a">Click để xem
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
            <div class="card-footer-a">
              <ul class="card-info d-flex justify-content-around">
                <li>
                  <h4 class="card-info-title">Diện tích</h4>
                  <span>340m
                    <sup>2</sup>
                  </span>
                </li>
                <li>
                  <h4 class="card-info-title">Nhà Tắm</h4>
                  <span>2</span>
                </li>
                <li>
                  <h4 class="card-info-title">Phòng Ngủ</h4>
                  <span>4</span>
                </li>
                <li>
                  <h4 class="card-info-title">Nhà Để Xe</h4>
                  <span>1</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  </div>
</section>