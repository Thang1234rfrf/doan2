<section class="section-news section-t8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a">Dự Án Sắp Hoàn Thành</h2>
          </div>
          <div class="title-link">
            <a href="blog-grid.html">Xem Thêm
              <span class="ion-ios-arrow-forward"></span>
            </a>
          </div>
        </div>
      </div>
    </div>


<div id="new-carousel" class="owl-carousel owl-theme">    
 
  @foreach ($nhanvien as $nv1)
      
  <div class="carousel-item-c">
    <div class="card-box-b card-shadow news-box">
      <div class="img-box-b">
        <img style=" object-fit: cover;" src="{{ url('images/nhanvien')}}{{"/"}}{{$nv1->Anh}}"  alt="" class="img-b img-fluid">
        
      </div>
      <div class="card-overlay">
        <div class="card-header-b">
          <div class="card-category-b">
            <a href="#" class="category-b">Travel</a>
          </div>
          <div class="card-title-b">
            <h2 class="title-2">
            {{$nv1->HoVaTen}}
            </h2>
          </div>
          <div class="card-date">
            <span class="date-b">18 Sep. 2017</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
 
</div>

   
  </div>
</section>