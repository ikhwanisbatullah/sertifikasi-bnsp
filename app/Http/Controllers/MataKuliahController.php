<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MataKuliah;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matakuliah = MataKuliah::all();
        return view("matakuliah.index", compact('matakuliah'));
    }

    public function create_view() {
        return view("matakuliah.create");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $matkul = MataKuliah::create($request->all());

        if ($matkul) {
            return redirect("/matkul");
        } else {
            return dd($matkul);
        }
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matakuliah = MataKuliah::find($id);

        if ($matakuliah) {
            return view("matakuliah.edit", compact("matakuliah"));
        } else {
            return dd($matakuliah);
        }
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
    public function update(Request $request)
    {
        $matkul = MataKuliah::find($request->id);
        $matkul->kode_matkul = $request->kode_matkul;
        $matkul->nama_matkul = $request->nama_matkul;
        
        $matkul->save();

        if ($matkul) {
            return redirect("/matkul");
        } else {
            return dd($matkul);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matkul = MataKuliah::find($id);

        $matkul->delete();

        if ($matkul) {
            return redirect("/matkul");
        } else {
            return dd($matkul);
        }
    }
}
