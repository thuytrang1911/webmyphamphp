<?php

namespace App\Http\Controllers\api;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\hd_nhap;
use App\Models\cthd_nhap;
use \Datetime;

class apihdnhapcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return hd_nhap::with('nv','ncc')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $db = new hd_nhap();
        $db->id_ncc = $request->id_ncc;
        $db->id_nv=$request->id_nv;
        $db->ngay_nhap=$request->ngay_nhap;
        $db->tong_tien=$request->tong_tien;
        $db->ht_thanh_toan=$request->ht_thanh_toan;
        $db->note=$request->note;
        $db->created_at = new Datetime();
        $db->save();

        // $details = $request->details;
        // foreach($details as $detail) {
        //     $item = new cthd_nhap();
        //     $item->id_hdn = $db->id;
        //     $item->id_sp = $detail['id'];
        //     $item->so_luong = $detail['quantity'];
        //     $item->don_gia = $detail['unit_price'];
        //     $item->thanh_tien = $item->so_luong * $item->don_gia;
        //     $item->save();
        // }
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return hd_nhap::findOrFail($id);
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
        $db = hd_nhap::find($id);
        $db->id_ncc = $request->id_ncc;
        $db->id_nv=$request->id_nv;
        $db->ngay_nhap=$request->ngay_nhap;
        $db->tong_tien=$request->tong_tien;
        $db->ht_thanh_toan=$request->ht_thanh_toan;
        $db->note=$request->note;
        $db->updated_at = new Datetime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        hd_nhap::findOrFail($id)->delete();
        return "Deleted";
    }
    public function LayCTHDNhap($id)
    {  
        return DB:: select ("CALL XemChiTietHDNhap($id)");
    }
}
