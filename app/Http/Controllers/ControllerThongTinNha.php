<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ThongTinNha;

class ControllerThongTinNha extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ThongTinNha= ThongTinNha::all();
        return $ThongTinNha;
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
        $ThongTinNha = new ThongTinNha;
        $ThongTinNha->TenLoaiNha = $request->input("TenLoaiNha");
        $ThongTinNha->MoTa = $request->input("MoTa");
        $ThongTinNha->save();
        return Response($ThongTinNha,201); 
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
       // $ThongTinNha = ThongTinNha::where('MaThongTinNha', $id)->first();
        $ThongTinNha = ThongTinNha::find($id);
        return $ThongTinNha;
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
        $ThongTinNha = ThongTinNha::find($id);
        $ThongTinNha->TenLoaiNha = $request->input("TenLoaiNha");
        $ThongTinNha->MoTa = $request->input("MoTa");
        $ThongTinNha->save();
        return Response($ThongTinNha,201);
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
        $ThongTinNha = ThongTinNha::find($id);
        $ThongTinNha->delete();
        return Response($ThongTinNha,201);
    }
}
