<?php

namespace App\Http\Controllers;

use App\Models\QuanLy;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\queue;

class QuanLyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nhanvien = QuanLy::all() ;
        return view('ADMIN.index',compact('nhanvien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ADMIN.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
  
    {
     

        $validateData = [
           
            'MaNv' => 'unique:nhanvien',
            'CMND' =>'digits:10',
            'HoVaTen' => 'required',
            'GioiTinh' => 'required',
            'NgaySinh' => 'required',
            'Anh' => 'required',
            'DiaChi' => 'required',
            'NgayThem' => 'required',
        ];
    
        $customMessages = [
            'required' => ' :attribute không được để trống.',
            'between' => ' :attribute phải bằng 10',
            'integer' =>  ' :attribute phải là số.',
            'digits'=> ' :attribute phải bằng 10',
            'unique' => ' :attribute đã tồn tại',
            
        ];
    
        $this->validate($request, $validateData, $customMessages);
       
        $nameImg = time().'_'.$request->file('Anh')->getClientOriginalName();
        $nhanvien = QuanLy::create([
            'MaNv' => $request->input('MaNv'),
            'HoVaTen' => $request->input('HoVaTen'),
            'GioiTinh' => $request->input('GioiTinh'),
            'NgaySinh' => $request->input('NgaySinh'),
            'CMND'=> $request->input('CMND'),
            'DiaChi'=> $request->input('DiaChi'),
            'NgayThem'=> $request->input('NgayThem'),
            'Anh'=> $nameImg,
        

         ]);
       
         $request->Anh->move(public_path('images/nhanvien'),$nameImg);
         $nhanvien->save();
       ;
         return redirect('danhsachnhanvien');
        }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuanLy  
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\  $quanLy
     * @return \Illuminate\Http\Response
     */
    public function edit($MaNv)
    {
       $nhanvien = QuanLy::find($MaNv);
        return view('ADMIN.edit', compact('nhanvien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QuanLy  $quanLy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $MaNv)
    {
       
         

    
        $nameImg = time().'_'.$request->file('Anh')->getClientOriginalName();
        $nhanvien = QuanLy::where('MaNv',$MaNv)->update([
            'MaNv' => $request->input('MaNv'),
            'HoVaTen' => $request->input('HoVaTen'),
            'GioiTinh' => $request->input('GioiTinh'),
            'NgaySinh' => $request->input('NgaySinh'),
            'CMND'=> $request->input('CMND'),
            'DiaChi'=> $request->input('DiaChi'),
            'NgayThem'=> $request->input('NgayThem'),
            'Anh'=> $nameImg,
        

         ]);
       
         $request->Anh->move(public_path('images/nhanvien'),$nameImg);
         return redirect()->route('danhsachnhanvien.index')->with('success','Cập nhật thành công');
         
    }
    


    public function destroy($MaNv)
    {
        
        $Ql = QuanLy::where('MaNv',$MaNv)->delete();
       

        return redirect()->route('danhsachnhanvien.index')
                        ->with('success','Xóa Thành công !');
        

    }
}
