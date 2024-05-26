<?php

namespace App\Http\Controllers;

use App\Models\Konfirmasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\JsonResponse;

class KonfirmasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Konfirmasi::all();
        return view('admin.konfirmasi.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Konfirmasi::create([
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'konfirmasi' => $request->konfirmasi,
        ]);
    
        return response()->json(['message' => 'Konfirmasi Berhasil dicatat'], 201);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Konfirmasi::where('id', $id)->first();
        return view('admin.konfirmasi.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, $id)
    {

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Konfitmasi::where('id', $id)->delete();
        return redirect()->route('konfirmasi.index');
    }
}
