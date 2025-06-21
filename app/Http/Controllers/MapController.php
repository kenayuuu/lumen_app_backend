<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;

class MapController extends Controller
{
    public function index()
    {
        $data = Map::all();
        return response()->json(['data' => $data]);
    }

    public function show($id)
    {
        $map = Map::find($id);
        if (!$map) return response()->json(['message' => 'Data tidak ditemukan'], 404);
        return response()->json($map);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'tipe' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $map = Map::create($request->all());
        return response()->json($map, 201);
    }

    public function update(Request $request, $id)
    {
        $map = Map::find($id);
        if (!$map) return response()->json(['message' => 'Data tidak ditemukan'], 404);

        $map->update($request->all());
        return response()->json($map);
    }

    public function destroy($id)
    {
        $map = Map::find($id);
        if (!$map) return response()->json(['message' => 'Data tidak ditemukan'], 404);

        $map->delete();
        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
