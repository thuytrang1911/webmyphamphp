<?php

namespace App\Http\Controllers\api;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sanpham;
use \Datetime;
class apisanphamcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return sanpham::all();
        return sanpham::with('dong','th','nhacc')->get();
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
        $db = new sanpham();
        $db->ten_sp = $request->ten_sp;
        $db->id_dong = $request->id_dong;
        $db->id_thuonghieu = $request->id_thuonghieu;
        $db->id_ncc=$request->id_ncc;
        $db->gia=$request->gia;
        $db->kieu_dang=$request->kieu_dang;
        $db->dung_luong=$request->dung_luong;
        $db->mau_sac=$request->mau_sac;
        $db->mui_huong=$request->mui_huong;
        $db->anh=$request->anh;
        $db->anh1=$request->anh1;
        $db->anh2=$request->anh2;
        $db->mo_ta=$request->mo_ta;
        $db->created_at = new Datetime();
        $db->save();
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
        return sanpham::findOrFail($id);
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
        $db = sanpham::find($id);
        $db->ten_sp = $request->ten_sp;
        $db->id_dong = $request->id_dong;
        $db->id_thuonghieu = $request->id_thuonghieu;
        $db->id_ncc = $request->id_ncc;
        $db->gia=$request->gia;
        $db->kieu_dang=$request->kieu_dang;
        $db->dung_luong=$request->dung_luong;
        $db->mau_sac=$request->mau_sac;
        $db->mui_huong=$request->mui_huong;
        $db->anh=$request->anh;
        $db->anh1=$request->anh1;
        $db->anh2=$request->anh2;
        $db->mo_ta=$request->mo_ta;
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
        sanpham::findOrFail($id)->delete();
        return "Deleted";
    }
    public function getSPThuongHieu($id){
        $sp_dong=sanpham::where('id_thuonghieu', $id)->get();
        return $sp_dong;
    }

    public function getSPDong($id){
        $sp_dong=sanpham::where('id_dong', $id)->get();
        return $sp_dong;
    }

    public function listSPMoi()
    {
        return DB::select("CALL SANPHAMMOI()");
    }

    public function listSPBanChay()
    { 
        return DB::select("CALL SANPHAMBANCHAY()");
    }

    public function listDong($id)
    { 
        return DB::select("CALL LAYDONG($id)");
    }
    public function listTH($id)
    { 
        return DB::select("CALL LAYTHUONGHIEU($id)");
    }
}
