<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SanPham;

class ControllerSanPham extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $SanPham= SanPham::all();
        return $SanPham;
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
            "SoNha" => 'required',
            "Anh" => 'required',
            "LoaiSP" => 'required',
            "DuAn" => 'required',
            "GiaBan" => 'required',
            "TinhTrang" => 'required',
           "MoTa" => 'required'
        ],
        [
            'required'=>':attribute Không được để trống'
            //'min'=>':attribute Không được nhỏ hơn :min',
            //'max'=>':attribute Không được lớn hơn :max',
        ]
        );
        if($validate->fails()){
            return 0;
            //return response()->json($validate->messages(), 200);
        }
        $SanPham = new SanPham;
        $SanPham->SoNha = $request->input("SoNha");
        $SanPham->Anh = $request->input("Anh");
        $SanPham->LoaiSP = $request->input("LoaiSP");
        $SanPham->DuAn = $request->input("DuAn");
        $SanPham->GiaBan = $request->input("GiaBan");
        $SanPham->TinhTrang = $request->input("TinhTrang");
        $SanPham->MoTa = $request->input("MoTa");
        $SanPham->save();
        return Response($SanPham,201); 
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
       // $SanPham = SanPham::where('MaSanPham', $id)->first();
        $SanPham = SanPham::find($id);
        return $SanPham;
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
            "SoNha" => 'required',
            "Anh" => 'required',
            "LoaiSP" => 'required',
            "DuAn" => 'required',
            "GiaBan" => 'required',
            "TinhTrang" => 'required',
           "MoTa" => 'required'
        ],
        [
            'required'=>':attribute Không được để trống'
            //'min'=>':attribute Không được nhỏ hơn :min',
            //'max'=>':attribute Không được lớn hơn :max',
        ]
        );
        if($validate->fails()){
            return 0;
            //return response()->json($validate->messages(), 200);
        }
        $SanPham = SanPham::find($id);
        $SanPham->SoNha = $request->input("SoNha");
        $SanPham->Anh = $request->input("Anh");
        $SanPham->LoaiSP = $request->input("LoaiSP");
        $SanPham->DuAn = $request->input("DuAn");
        $SanPham->GiaBan = $request->input("GiaBan");
        $SanPham->TinhTrang = $request->input("TinhTrang");
        $SanPham->MoTa = $request->input("MoTa");
        $SanPham->save();
        return Response($SanPham,201);
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
        $SanPham = SanPham::find($id);
        $SanPham->delete();
        return Response($SanPham,201);
    }
}
