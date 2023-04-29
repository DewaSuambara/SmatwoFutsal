<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePembinaRequest;
use App\Models\Pembina;
use Illuminate\Http\Request;

class PembinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pembina.index',[
            'pembinas' =>Pembina::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembina.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePembinaRequest $request)
    {
        $request->validated();

        Pembina::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'hp' => $request->hp
        ]);

        return to_route('pembina.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembina $pembina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembina $pembina)
    {
        return view('pembina.edit', compact('pembina'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreatePembinaRequest $request, Pembina $pembina)
    {
        $request->validated();

        $pembina->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'hp' => $request->hp
        ]);

        return to_route('pembina.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembina $pembina)
    {
        $pembina->delete();

        return back();
    }
}
