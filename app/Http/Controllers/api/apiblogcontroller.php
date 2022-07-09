<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog;
use \Datetime;

class apiblogcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return blog::all();
        return blog::with('nv')->get();
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
        $db = new blog();
        $db->tieu_de = $request->tieu_de;
        $db->noi_dung=$request->noi_dung;
        $db->anh=$request->anh;
        $db->id_nv=$request->id_nv;
        
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
        return blog::findOrFail($id);
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
        $db = blog::find($id);
        $db->tieu_de = $request->tieu_de;
        $db->noi_dung=$request->noi_dung;
        $db->anh=$request->anh;
        $db->id_nv=$request->id_nv;
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
        blog::findOrFail($id)->delete();
        return "Deleted";
    }
}
