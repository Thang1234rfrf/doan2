@extends('ADMIN.layout')
@section('title','Danh Sách Nhân Viên')
@section('content')

<div class="content-wrapper">
    <div class="page-heading">
        <h1 class="page-title">Quản Lý Nhân Viên</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                
        </ol>
    </div>
    
     <div>

        <a href="{{ route('danhsachnhanvien.create')}}">  <button class="btn btn-success" >Thêm Mới</button>
        </a>
     </div>
    
      
    
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Danh Sách Nhân Viên</div>
        </div>
        <div class="ibox-body">
            
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
            <div class="table-responsive">
                <a style="display: none;">{{ $i=1}}</a>
                <table class="table">
                
                      
                  
                    <thead>
                        <tr>
                            <th width="50px"></th>
                            <th>Mã Nhân Viên</th>
                            <th>Họ Và Tên</th>
                            <th>Giới Tính</th>
                            <th>Ngày sinh</th>
                            <th>CMND</th>
                            <th>Ảnh</th>
                            <th>Địa Chỉ</th>
                            <th>NgayThem</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nhanvien as $Ql)
                        <tr>
                          
                           <td>{{$i++}}</td>
                           <td>{{$Ql->MaNv}}</td>
                           <td>{{$Ql->HoVaTen}}</td>
                           <td>{{$Ql->GioiTinh}}</td>
                           <td>{{$Ql->NgaySinh}}</td>
                           <td>{{$Ql->CMND}}</td>
                           <td> <img style="width:150px ; height:150px ;" src="{{ url('images/nhanvien')}}{{"/"}}{{$Ql->Anh}}" alt=""></td>
                           <td>{{$Ql->DiaChi}}</td>
                           <td>{{$Ql->NgayThem}}</td>
                           
                    
                
                        <td>
                            {{-- <a href="{{ route('danhsachnhanvien.create')}}">  <button class="btn btn-success" >Thêm Mới</button>  --}}
                            <a href="danhsachnhanvien/{{$Ql['MaNv']}}/edit">  <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                            {{-- <button class="btn btn-defaultbtn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button> --}}
                            <form action="danhsachnhanvien/{{$Ql['MaNv']}}" method="post">
                                
                                @csrf
                                @method('DELETE')
                            <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                              
                              </form>
                        </td>
                        
                        </tr>
                      
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    

@endsection