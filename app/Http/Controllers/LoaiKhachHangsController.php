<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KhachHang;


class LoaiKhachHangsController extends Controller
{
    //
    public function index() {
        $loaikhachhangs = DB::select("select * from LOAI_KHACHHANG order by LOAIKHACHHANG_ID asc;");
        return view('loaikhachhangs.index', [
            'loaikhachhangs' => $loaikhachhangs,
        ]);
        //dd($loaikhachhangs);
    }

    public function show($id) {
        $loaikhachhang = KhachHang::find($id);
        //dd($loaikhachhang);
        return view('loaikhachhangs.show')->with('loaikhachhang', $loaikhachhang);
    }
}
