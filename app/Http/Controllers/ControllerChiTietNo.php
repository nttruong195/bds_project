<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\No;

class ControllerChiTietNo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $No= No::all();
        return $No;
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
        
        $No = new No;
        $No->DotTra = $request->input("DotTra");
        $No->NgayTra = $request->input("NgayTra");
        $No->Tien = $request->input("Tien");
        $No->TrangThai = $request->input("TrangThai");
        $No->save();
        return Response($No,201); 

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
       // $No = No::where('MaNo', $id)->first();
        $No = No::find($id);
        return $No;
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
        $No = No::find($id);
        $No->TrangThai = $request->input("TrangThai");
        $No->save();
        return Response($No,201);
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
    }
}
