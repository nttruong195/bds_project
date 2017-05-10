<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DuAn;

class ControllerDuAn extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DuAn= DuAn::all();
        return $DuAn;
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
            "TenDuAn" => 'required',
            "DiaChi" => 'required',
            "TongDienTich" => 'required',
            "GiayPhep" => 'required',
            "NgayCap" => 'required',
            "SoLuongSanPham" => 'required',
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
        $DuAn = new DuAn;
        $DuAn->TenDuAn = $request->input("TenDuAn");
        $DuAn->DiaChi = $request->input("DiaChi");
        $DuAn->TongDienTich = $request->input("TongDienTich");
        $DuAn->GiayPhep = $request->input("GiayPhep");
        $DuAn->NgayCap = $request->input("NgayCap");
        $DuAn->SoLuongSanPham = $request->input("SoLuongSanPham");
        $DuAn->MoTa = $request->input("MoTa");
        $DuAn->save();
        return Response($DuAn,201); 
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
       // $DuAn = DuAn::where('MaDuAn', $id)->first();
        $DuAn = DuAn::find($id);
        return $DuAn;
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
            "TenDuAn" => 'required',
            "DiaChi" => 'required',
            "TongDienTich" => 'required',
            "GiayPhep" => 'required',
            "NgayCap" => 'required',
            "SoLuongSanPham" => 'required',
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
        $DuAn = DuAn::find($id);
        $DuAn->TenDuAn = $request->input("TenDuAn");
        $DuAn->DiaChi = $request->input("DiaChi");
        $DuAn->TongDienTich = $request->input("TongDienTich");
        $DuAn->GiayPhep = $request->input("GiayPhep");
        $DuAn->NgayCap = $request->input("NgayCap");
        $DuAn->SoLuongSanPham = $request->input("SoLuongSanPham");
        $DuAn->MoTa = $request->input("MoTa");
        $DuAn->save();
        return Response($DuAn,201);
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
        $DuAn = DuAn::find($id);
        $DuAn->delete();
        return Response($DuAn,201);
    }
}
