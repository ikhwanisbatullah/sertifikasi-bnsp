<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use PDF;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view("mahasiswa.index", compact('mahasiswa'));
    }

    public function create_view() {
        return view("mahasiswa.create");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'nim' => 'required',
            'tahun_masuk' => 'required',
            'tgl_lahir' => 'required',
            'nama' => 'required',
            'gender' => 'required',
        ]);
        $mhs = Mahasiswa::create($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $mhs->avatar = $request->file('avatar')->getClientOriginalName();
	        $mhs->save();
         }

        if($mhs) {
            return redirect("/")->with('alert success', 'Mahasiswa berhasil ditambahkan!');;
        } else {
            return redirect("/")->with('alert danger', 'Mahasiswa gagal ditambahkan!');;
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
        $mahasiswa = Mahasiswa::find($id);

        if ($mahasiswa) {
            return view("mahasiswa.edit", compact("mahasiswa"));
        } else {
            return dd($mahasiswa);
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
        //
        $mhs = Mahasiswa::find($request->id);
        $mhs->nama = $request->nama;
        $mhs->gender = $request->gender;
        $mhs->nim = $request->nim;
        $mhs->tahun_masuk = $request->tahun_masuk;
        $mhs->tgl_lahir = $request->tgl_lahir;

        $mhs->save();

        if ($mhs) {
            return redirect("/");
        } else {
            return dd($mhs);
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
        $mhs = Mahasiswa::find($id);

        $mhs->delete();

        if ($mhs) {
            return redirect("/");
        } else {
            return dd($mhs);
        }
    }

    public function exportpdf()
    {  
        $mhs = Mahasiswa::all();
        $pdf = PDF::loadView('export.mahasiswa',['mhs' =>$mhs]);
        return $pdf->download('mahasiswa.pdf');
    }
}
