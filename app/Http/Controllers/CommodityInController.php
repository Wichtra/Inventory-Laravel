<?php

namespace App\Http\Controllers;

use App\Models\CommodityIn;
use Illuminate\Http\Request;

class CommodityInController extends Controller
{
    public function index()
    {
        $commodityIns = CommodityIn::all();
        return response()->json($commodityIns);
    }

    public function store(Request $request)
    {
        $commodityIn = CommodityIn::create($request->all());
        return response()->json($commodityIn, 201);
    }

    public function show($id)
    {
        $commodityIn = CommodityIn::find($id);
        if (is_null($commodityIn)) {
            return response()->json(['message' => 'CommodityIn not found'], 404);
        }
        return response()->json($commodityIn);
    }

    public function update(Request $request, $id)
    {
        $commodityIn = CommodityIn::find($id);
        if (is_null($commodityIn)) {
            return response()->json(['message' => 'CommodityIn not found'], 404);
        }
        $commodityIn->update($request->all());
        return response()->json($commodityIn);
    }

    public function destroy($id)
    {
        $commodityIn = CommodityIn::find($id);
        if (is_null($commodityIn)) {
            return response()->json(['message' => 'CommodityIn not found'], 404);
        }
        $commodityIn->delete();
        return response()->json(null, 204);
    }
}
