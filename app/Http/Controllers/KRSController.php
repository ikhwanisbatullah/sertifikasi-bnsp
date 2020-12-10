<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\KRS;
use App\Mahasiswa;
use App\MataKuliah;
use PDF;

class KRSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $krs = KRS::all();
        return view("krs.index", compact('krs'));
    }

    public function create_view() {
        $mahasiswa = Mahasiswa::all();
        $matakuliah = MataKuliah::all();
        return view("krs.create", compact('mahasiswa', 'matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $krs = new KRS;
        
        $krs->nim = $request->nim;
        $krs->tahun_akademik = $request->tahun_akademik;
        $krs->no_frs = $request->no_frs;
        $krs->matkul = implode(", ", $request->matkul);

        $krs->save();

        if($krs) {
            return redirect("/krs")->with('alert success', 'KRS berhasil ditambahkan!');;
        } else {
            return redirect("/krs")->with('alert danger', 'KRS gagal ditambahkan!');;


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
        $mahasiswa = Mahasiswa::all();
        $krs = KRS::find($id);
        $matakuliah = MataKuliah::all();
        $matkulPrev = explode(',', $krs->matkul);

        if ($matakuliah) {
            return view("krs.edit", compact("mahasiswa", "matakuliah", "krs", "matkulPrev"));
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
        $krs = KRS::find($request->id);
        $krs->tahun_akademik = $request->tahun_akademik;
        $krs->no_frs = $request->no_frs;
        $krs->matkul = implode(", ", $request->matkul);


        $krs->save();

        if ($krs) {
            return redirect("/krs");
        } else {
            return dd($krs);
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
        $krs = KRS::find($id);

        $krs->delete();

        if ($krs) {
            return redirect("/krs");
        } else {
            return dd($mhs);
        }
    }
    public function exportpdf($id, $nim)
    {  
        $krs = KRS::where('id',$id)->get();
        //mengambil id krs pada model KRS sesuai apa yang diketik disimpan ke variabel krs
        $mhs = Mahasiswa::where('nim',$nim)->get();
        //mengambil nim  pada model Mahasiswa sesuai apa yang diketik disimpan ke variabel krs
        //$krs = KRS::all();
        //mengambil  semua data krs
        //$krs = KRS::find($request->id);
        //$pdf = PDF::loadView('pdf.invoice', $data);
        $pdf = PDF::loadView('export.krspdf',['krs' =>$krs, 'mhs' =>$mhs]);
        //menyimpan data  variabel krs dan variabel mhs disimpan ke variabel pdf
        //$pdf->loadHTML('<h1>Test</h1>');
        return $pdf->download('FRS.pdf');
    }
}
