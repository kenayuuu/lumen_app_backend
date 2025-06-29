<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kampus;

class KampusController extends Controller
{
    public function index()
    {
        $data = Kampus::all();
        return response()->json(['data' => $data]);
    }

    public function show($id)
    {
        $map = Kampus::find($id);
        if (!$map) return response()->json(['message' => 'Data tidak ditemukan'], 404);
        return response()->json($map);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'kategori' => 'required',
            'jurusan' => 'required  ',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $map = Kampus::create($request->all());
        return response()->json($map, 201);
    }

    public function update(Request $request, $id)
    {
        $map = Kampus::find($id);
        if (!$map) return response()->json(['message' => 'Data tidak ditemukan'], 404);

        $map->update($request->all());
        return response()->json($map);
    }

    public function destroy($id)
    {
        $map = Kampus::find($id);
        if (!$map) return response()->json(['message' => 'Data tidak ditemukan'], 404);

        $map->delete();
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
