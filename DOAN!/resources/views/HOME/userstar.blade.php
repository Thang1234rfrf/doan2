<section class="section-agents section-t8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a">Người Nổi Bật</h2>
          </div>
          <div class="title-link">
            <a href="agents-grid.php">Tất cả 
              <span class="ion-ios-arrow-forward"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach ($nguoidung as $data)
      <div class="col-md-4"> 
        <div class="card-box-d">
          <div class="card-img-d">
            <img src="images\home\nhadep01.jpg" alt="" class="img-d img-fluid">
          </div>
          <div class="card-overlay card-overlay-hover">
            <div class="card-header-d">
              <div class="card-title-d align-self-center">
                <h3 class="title-d">
                 {{$data->hovaten}}
                </h3>
              </div>
            </div>
            <div class="card-body-d">
              <p class="content-d color-text-a">
                 Danh muc: 
              </p>
              <div class="info-agents color-a">
                <p>
                  <strong>Phone: </strong> {{$data->sodienthoai}}</p> 
                <p>
                  <strong>Email: </strong> {{$data->email}}</p>
              </div>
            </div>
            <div class="card-footer-d">
              <div class="socials-footer d-flex justify-content-center">
             <ul class="list-inline">
             <a href="`"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
            </svg></a>
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