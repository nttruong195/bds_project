<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UuDai;

class ControllerUuDai extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $UuDai= UuDai::all();
        return $UuDai;
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
        $UuDai = new UuDai;
        $UuDai->TenUuDai = $request->input("TenUuDai");
        $UuDai->NgayBatDau = $request->input("NgayBatDau");
        $UuDai->NgayKetThuc = $request->input("NgayKetThuc");
        $UuDai->save();
        return Response($UuDai,201); 
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
       // $UuDai = UuDai::where('MaUuDai', $id)->first();
        $UuDai = UuDai::find($id);
        return $UuDai;
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
        $UuDai = UuDai::find($id);
        $UuDai->TenUuDai = $request->input("TenUuDai");
        $UuDai->NgayBatDau = $request->input("NgayBatDau");
        $UuDai->NgayKetThuc = $request->input("NgayKetThuc");
        $UuDai->save();
        return Response($UuDai,201);
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
        $UuDai = UuDai::find($id);
        $UuDai->delete();
        return Response($UuDai,201);
    }
}
