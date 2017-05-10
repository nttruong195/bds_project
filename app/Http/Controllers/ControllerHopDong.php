<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\HopDong;


class ControllerHopDong extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $HopDong= HopDong::all();
        return $HopDong;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $HopDong = new HopDong;
        $HopDong->KhachHang = $request->input("KhachHang");
        $HopDong->TaiKhoan = $request->input("TaiKhoan");
        $HopDong->SanPham = $request->input("SanPham");
        $HopDong->NgayKy = $request->input("NgayKy");
        $HopDong->NgayBanGiao = $request->input("NgayBanGiao");
        $HopDong->KieuThanhToan = $request->input("KieuThanhToan");
        $HopDong->LaiSuat = $request->input("LaiSuat");
        $HopDong->DatCoc = $request->input("DatCoc");
        $HopDong->GiaTri = $request->input("GiaTri");
        $HopDong->UuDai = $request->input("UuDai");
        $HopDong->GhiChu = $request->input("GhiChu");
        $HopDong->DotTraTien = $request->input("DotTraTien");
        $HopDong->TrangThai = $request->input("TrangThai");
        $HopDong->save();
        return Response($HopDong,201); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       // $HopDong = HopDong::where('MaHopDong', $id)->first();
        $HopDong = HopDong::find($id);
        return $HopDong;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        echo "edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $HopDong = HopDong::find($id);
        $HopDong->KhachHang = $request->input("KhachHang");
        $HopDong->TaiKhoan = $request->input("TaiKhoan");
        $HopDong->SanPham = $request->input("SanPham");
        $HopDong->NgayKy = $request->input("NgayKy");
        $HopDong->NgayBanGiao = $request->input("NgayBanGiao");
        $HopDong->KieuThanhToan = $request->input("KieuThanhToan");
        $HopDong->LaiSuat = $request->input("LaiSuat");
        $HopDong->DatCoc = $request->input("DatCoc");
        $HopDong->GiaTri = $request->input("GiaTri");
        $HopDong->UuDai = $request->input("UuDai");
        $HopDong->GhiChu = $request->input("GhiChu");
        $HopDong->DotTraTien = $request->input("DotTraTien");
        $HopDong->TrangThai = $request->input("TrangThai");
        $HopDong->save();
        return Response($HopDong,201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $HopDong = HopDong::find($id);
        $HopDong->delete();
        return Response($HopDong,201);
    }
}
