<?php

namespace App\Http\Controllers;

use App\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soal = Soal::latest()->paginate(5);

        return view('soal.index', compact('soal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('soal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'profil_id' => 'required'
        ]);

        Soal::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'profil_id' => $request->profil_id,

        ]);

        return redirect()->route('soal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function show(Soal $soal)
    {
        return view('soal.show', compact('soal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function edit(Soal $soal)
    {
        return view('soal.edit', compact('soal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Soal $soal)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'profil_id' => 'required'
        ]);

        $soal->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'profil_id' => $request->profil_id,
        ]);

        return redirect()->route('soal.show', compact('soal'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Soal $soal)
    {
        $soal->delete();

        return redirect()->route('soal.index');
    }
}
