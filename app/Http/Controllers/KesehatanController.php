<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKesehatanRequest;
use App\Models\Kesehatan;
use Illuminate\Http\Request;

class KesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kesehatan.index', [
            'kesehatans' => Kesehatan::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kesehatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateKesehatanRequest $request)
    {
        $request->validated();

        Kesehatan::create([
            'nim' => $request->nim,
            'nama_anggota' => $request->nama_anggota,
            'kelas' => $request->kelas,
            'hp' => $request->hp
        ]);

        return to_route('kesehatan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kesehatan $kesehatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kesehatan $kesehatan)
    {
        return view('kesehatan.edit', compact('kesehatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateKesehatanRequest $request, Kesehatan $kesehatan)
    {
        $request->validated();

        $kesehatan->update([
            'nim' => $request->nim,
            'nama_anggota' => $request->nama_anggota,
            'kelas' => $request->kelas,
            'hp' => $request->hp
        ]);

        return to_route('kesehatan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kesehatan $kesehatan)
    {
        $kesehatan->delete();

        return back();
    }
}
