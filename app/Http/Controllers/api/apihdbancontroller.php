<?php

namespace App\Http\Controllers\api;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\hd_ban;
use App\Models\cthd_ban;
use \Datetime;

class apihdbancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return hd_ban::with('kh')->get();
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
        $db = new hd_ban();
        $db->id_kh = $request->id_kh;
        $db->dia_chi_nhan=$request->dia_chi_nhan;
        $db->ngay_dat=new Datetime();
        $db->tong_tien=$request->tong_tien;
        $db->ghi_chu=$request->ghi_chu;
        $db->ht_thanh_toan="online";
        
        $db->created_at = new Datetime();
        $db->save();

        $details = $request->details;
        foreach($details as $detail) {
            $item = new cthd_ban();
            $item->id_hdb = $db->id;
            $item->id_sp = $detail['id'];
            $item->so_luong = $detail['quantity'];
            $item->don_gia = $detail['unit_price'];
            $item->thanh_tien = $item->so_luong * $item->don_gia;
            $item->save();
        }
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
        return hd_ban::findOrFail($id);
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
        $db = hd_ban::find($id);
        $db->id_kh = $request->id_kh;
        $db->dia_chi_nhan=$request->dia_chi_nhan;
        $db->ngay_dat=$request->ngay_dat;
        $db->tong_tien=$request->tong_tien;
        $db->ghi_chu=$request->ghi_chu;
        $db->ht_thanh_toan=$request->ht_thanh_toan;
        
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
        hd_ban::findOrFail($id)->delete();
        return "Deleted";
    }
    public function LayCTHDBan($id)
    {  
        return DB:: select ("CALL XemChiTietHDBan($id)");
    }
}
