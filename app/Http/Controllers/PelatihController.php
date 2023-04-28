<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePelatihRequest;
use App\Models\Pelatih;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class PelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pelatih.index',[
            'pelatihs' => Pelatih::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelatih.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePelatihRequest $request)
    {
        $request->validated();

        Pelatih::create([
            'nip' => $request->nip,
            'nama_pelatih' => $request->nama_pelatih,
            'hp' => $request->hp
        ]);

        return to_route('pelatih.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelatih $pelatih)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelatih $pelatih)
    {
        return view('pelatih.edit', compact('pelatih'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreatePelatihRequest $request, Pelatih $pelatih)
    {
        $request->validated();

        $pelatih->update([
            'nip' => $request->nip,
            'nama_pelatih' => $request->nama_pelatih,
            'hp' => $request->hp
        ]);

        return to_route('pelatih.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelatih $pelatih)
    {
        $pelatih->delete();

        return back();
    }
}
