<?php

namespace App\Http\Controllers;

use App\Models\Commodity;
use Illuminate\Http\Request;

class CommodityController extends Controller
{
    public function index()
    {
        $commodities = Commodity::all();
        return response()->json($commodities);
    }

    public function store(Request $request)
    {
        $commodity = Commodity::create($request->all());
        return response()->json($commodity, 201);
    }

    public function show($id)
    {
        $commodity = Commodity::find($id);
        if (is_null($commodity)) {
            return response()->json(['message' => 'Commodity not found'], 404);
        }
        return response()->json($commodity);
    }

    public function update(Request $request, $id)
    {
        $commodity = Commodity::find($id);
        if (is_null($commodity)) {
            return response()->json(['message' => 'Commodity not found'], 404);
        }
        $commodity->update($request->all());
        return response()->json($commodity);
    }

    public function destroy($id)
    {
        $commodity = Commodity::find($id);
        if (is_null($commodity)) {
            return response()->json(['message' => 'Commodity not found'], 404);
        }
        $commodity->delete();
        return response()->json(null, 204);
    }
}
