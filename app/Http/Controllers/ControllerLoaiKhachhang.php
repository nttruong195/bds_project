<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\LoaiKhachHang;

class ControllerLoaiKhachHang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $LoaiKhachHang= LoaiKhachHang::all();
        return $LoaiKhachHang;
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
         $validate= Validator::make($request->all(),[
            "TenLoaiKH" => 'required',
             "MoTa" => 'required'
        ],
        [
            'required'=>':attribute Không được để trống'
            //'min'=>':attribute Không được nhỏ hơn :min',
            //'max'=>':attribute Không được lớn hơn :max',
        ],
        [
            "TenLoaiKH" => 'Tên loại khách hàng',
             "MoTa" => 'Mô tả'
        ]
        );
        if($validate->fails()){
            return 0;
            //return response()->json($validate->messages(), 200);
        }
        $LoaiKhachHang = new LoaiKhachHang;
        $LoaiKhachHang->TenLoaiKH = $request->input("TenLoaiKH");
        $LoaiKhachHang->MoTa = $request->input("MoTa");
        $LoaiKhachHang->save();
        return Response($LoaiKhachHang,201); 
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
       // $LoaiKhachHang = LoaiKhachHang::where('MaLoaiKhachHang', $id)->first();
        $LoaiKhachHang = LoaiKhachHang::find($id);
        return $LoaiKhachHang;
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
        $validate= Validator::make($request->all(),[
            "TenLoaiKH" => 'required',
            "MoTa" => 'required'
        ],
        [
            'required'=>':attribute Không được để trống'
            //'min'=>':attribute Không được nhỏ hơn :min',
            //'max'=>':attribute Không được lớn hơn :max',
        ],
        [
            "TenLoaiKH" => 'Tên loại khách hàng',
             "MoTa" => 'Mô tả'
        ]
        );
        if($validate->fails()){
            return 0;
            //return response()->json($validate->messages(), 200);
        }
        $LoaiKhachHang = LoaiKhachHang::find($id);
        $LoaiKhachHang->TenLoaiKH = $request->input("TenLoaiKH");
        $LoaiKhachHang->MoTa = $request->input("MoTa");
        $LoaiKhachHang->save();
        return Response($LoaiKhachHang,201);
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
        $LoaiKhachHang = LoaiKhachHang::find($id);
        $LoaiKhachHang->delete();
        return Response($LoaiKhachHang,201);
    }
}
