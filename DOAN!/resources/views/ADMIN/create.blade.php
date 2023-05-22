@extends('ADMIN.layout')
@section('title','Thêm Nhân Viên')
@section('content')
<H1>Thêm Nhân Viên</H1>

<div class="content-wrapper">
    <!-- START PAGE CONTENT-->

    <div class="page-content fade-in-up">
        
        <div class="row">
            @if ($errors->any())
  <div style="background-color: #BCEAD5; margin-left: 20px;margin-bottom: 20px; border-radius: 10px ;" >
      @foreach ($errors->all() as $error)
          <h5 style="color: rgb(8, 8, 8); size: 12px">
           {{ $error }} 
          </h5>
      @endforeach
  </div>
     
 @endif
            <div class="col-md-6" style="max-width:100% ; flex : auto">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Thêm Nhân Viên</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{ route('danhsachnhanvien.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Mã Nhân Viên</label>
                                <input class="form-control" type="text" placeholder="QL01,AD01" name="MaNv">
                            </div>
    
                            <div class="form-group">
                                <label>Họ và tên</label>
                                <input class="form-control" type="text" name="HoVaTen">
                            </div>  
                                
                                     
                    
                           <div>
                            <div class="form-group" style="float: left; width: 43%; margin-left: 15px">
                                <label for="GioiTinh">Giới Tính:</label>
                                <select name="GioiTinh" >
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                              </select>     
                                </div>
                                <div class="form-group" style="float: right; width: 55%;">
                                    <label>Ngày Sinh</label>
                                    <input class="form-control" type="date" name="NgaySinh">
                                </div>
                           </div>
                           

                            <div class="form-group">
                                <label>CMND</label>
                                <input class="form-control" type="text" name="CMND">
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input class="form-control" type="file" name="Anh" required>
                            </div>
                         
                           
                  

                            <div class="form-group">
                                <label>Địa Chỉ</label>
                                <input class="form-control" type="text" name="DiaChi">
                            </div>
                            <div class="form-group">
                                <label>Ngày Thêm</label>
                                <input class="form-control" type="date" name="NgayThem">
                            </div>


                         
                            <div class="form-group">
                                <button class="btn btn-default" type="submit">Lưu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    
    
    <!-- END PAGE CONTENT-->
    
    </div>
    </div>

@endsection