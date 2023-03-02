<?php

namespace App\Http\Controllers;
use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    
    public function index()
    {
        //
        $biodata = Biodata::all();
        return view('biodata.index', compact('biodata'));
    }

    
    public function create()
    {
        //
        $biodata = Biodata::all();
        return view('biodata.create', compact('biodata'));
    }

    
    public function store(Request $request)
    {
        //

        // $validated = $request->validate([
        //     'nama' => 'required',
        //     'email' => 'required',
        //     'no_hp' => 'required',
        //     'tgl_lahir' => 'required',
        //     'kampus' => 'required',
        //     'prodi' => 'required',
        //     'kelas' => 'required',
        //     'status' => 'required',
        //     'rekomendasi' => 'required',
            
        // ]);

    //    $biodata = new Biodata();
    //    $biodata->nama = $request->nama;
    //    $biodata->email = $request->email;
    //    $biodata->no_hp = $request->no_hp;
    //    $biodata->tgl_lahir = $request->tgl_lahir;
    //    $biodata->kampus = $request->kampus;
    //    $biodata->prodi = $request->prodi;
    //    $biodata->kelas = $request->kelas;
    //    $biodata->status = $request->status;
    //    $biodata->rekomendasi = $request->rekomendasi;
    //    $biodata->id_prodi = $request->id_prodi;
       
    //    $biodata->save();
    //     return redirect()->route('biodata.index')
    //         ->with('success', 'Data berhasil dibuat!');
    }

    

    
    public function show($id)
    {
        //
        $biodata = Biodata::all();
        return view('biodata.show', compact('biodata'));
    }

    
    public function edit($id)
    {
        //
        $biodata = Biodata::all();
        return view('biodata.edit', compact('biodata'));
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
