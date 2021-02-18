<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Profil::all();
        // dd($data);
        return view('profil.index', compact('data'));
        // return view('profil.index', ['profil' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Profil::create($request->all());
        return redirect()->route('profil.index')->with('success', 'Data berhasil ditambahkan!');
        $request->save();
        $request->validate([
            'alamat' => 'required',
            'fb' => 'required',
            'instagram' => 'required',
            'telepon' => 'required',
            'deskripsi_konten' => 'required',
            'status' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);

        try {
            $in = [
                'alamat' => $request->alamat,
                'fb' => $request->fb,
                'instagram' => $request->instagram,
                'telepon' => $request->telepon,
                'deskripsi_konten' => $request->deskripsi_konten,
                'status' => $request->status,
                'created_by' => $request->created_by,
                'updated_by' => $request->updated_by,
            ];
            Profil::create($in);
            return redirect('/profil');
        } catch (\Throwable $th) {
            return redirect('/profil/create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(Profil $profil)
    {
        return view('profil.edit', compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profil $profil)
    {
        $request->validate([
            'alamat' => 'required',
            'fb' => 'required',
            'instagram' => 'required',
            'telepon' => 'required',
            'deskripsi_konten' => 'required',
            'status' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',
        ]);

        try {
            $in = [
                'alamat' => $request->alamat,
                'fb' => $request->fb,
                'instagram' => $request->instagram,
                'telepon' => $request->telepon,
                'deskripsi_konten' => $request->deskripsi_konten,
                'status' => $request->status,
                'created_by' => $request->created_by,
                'updated_by' => $request->updated_by,
            ];
            Profil::where('id', $profil->id)->update($in);
            return redirect('/profil');
        } catch (\Throwable $th) {
            return $th;
            // return redirect('/profil/'.$profil->id.'/edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        try {
            Profil::where('id', $profil->id)->delete();
            return redirect('/profil');
        } catch (\Throwable $th) {
            return $th;
        }
    }
}
