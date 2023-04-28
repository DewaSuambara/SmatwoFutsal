<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pemain.index', [
            'pemains' => Pemain::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemain.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pemain = $request->validate([
            'nim' => 'required',
            'kelas' => 'required',
            'nama_murid' => 'required',
            'hp' => 'required'
        ]);

        Pemain::create([
            'nim' => $request->nim,
            'kelas' => $request->kelas,
            'nama_murid' => $request->nama_murid,
            'hp' => $request->hp
        ]);

        return redirect()->route('pemain.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pemain $pemain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemain $pemain)
    {
        return  view('pemain.edit', compact('pemain'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pemain $pemain)
    {
        $request->validate([
            'nim' => 'required',
            'kelas' => 'required',
            'nama_murid' => 'required',
            'hp' => 'required'
        ]);

        $pemain->update([
            'nim' => $request->nim,
            'kelas' => $request->kelas,
            'nama_murid' => $request->nama_murid,
            'hp' => $request->hp
        ]);

        return redirect()->route('pemain.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemain $pemain)
    {
        $pemain->delete();

        return redirect()->route('pemain.index');
    }
}
