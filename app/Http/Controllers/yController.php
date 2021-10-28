<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barangs;
class yController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = barangs::all();
        return view('barangs.yindex', compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new barangs;
        return view('barangs.ycreate', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Nama_Barang' => 'required',
            'Jumlah'=> 'required',
            'Harga'=> 'required',
            'Supplier'=> 'required'
        ]);

        $model = new barangs;
        $model->Nama_Barang = $request->Nama_Barang;
        $model->Jumlah = $request->Jumlah;
        $model->Harga=$request->Harga;
        $model->Supplier=$request->Supplier;
        $model->save();

        return redirect('y')->with('success', "Data Berhasil Di Simpan");
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = barangs::find($id);
        return view('barangs.yedit', compact(
            'model'
        ));
        //erornya dimana ya?
        //typo di index file kalo make resourch harus edit dak boleh di edit itu default
        //kalau mau costom manualin aja 
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
        $this->validate($request,[
            'Nama_Barang' => 'required',
            'Jumlah'=> 'required',
            'Harga'=> 'required',
            'Supplier'=> 'required'
        ]);
        
        $model = barangs::find($id);
        $model->Nama_Barang = $request->Nama_Barang;
        $model->Jumlah = $request->Jumlah;
        $model->Harga=$request->Harga;
        $model->Supplier=$request->Supplier;
        $model->save();

        return redirect('y')->with('success', "Data Berhasil Di Perbaharui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = barangs::find($id);
        $model-> delete();
        return redirect('y');
    }
}
