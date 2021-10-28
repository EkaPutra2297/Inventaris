<?php

namespace App\Http\Controllers;

use App\Models\suppliers;
use Illuminate\Http\Request;
use App\Http\Requests\suppliersRequest;
class xController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = suppliers :: all();
        
        return view('suppliers.index', compact(
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
        $model = new suppliers;
        return view('suppliers.create', compact(
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
        // ini validation nya yang bikin eror cobak lihat tutorialnya lagi or pake cara lain
        $this->validate($request,[
            'Nama' => 'required',
            'No_HP_WA'=> 'required',
            'Alamat'=> 'required'
        ]);
        //cobak kamu cek lagi validasi mu itu yang bikin eror ini cara validasi laravel 5-7 kalo gak salah
        //cara yang kamu pake kayaknya cara baru deh

        // echo 'store';
        $model = new suppliers;
        $model->Nama = $request->Nama;
        $model->No_HP_WA = $request->No_HP_WA;
        $model->Alamat=$request->Alamat;
        // dd($model);
        $model->save();

        return redirect('x')->with('success', "Data Berhasil Di Simpan");

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
        $model = suppliers::find($id);
        return view('suppliers.edit', compact(
            'model'
        ));
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
            'Nama' => 'required',
            'No_HP_WA'=> 'required',
            'Alamat'=> 'required'
        ]);
        
        $model = suppliers::find($id);
        $model->Nama = $request->Nama;
        $model->No_HP_WA = $request->No_HP_WA;
        $model->Alamat=$request->Alamat;
        $model->save();

        return redirect('x')->with('success', "Data Berhasil Di Perbaharui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = suppliers::find($id);
        $model-> delete();
        return redirect('x');
    }
}
