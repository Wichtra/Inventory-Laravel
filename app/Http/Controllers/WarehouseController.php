<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index()
    {
        $warehouses = Warehouse::all();
        return response()->json($warehouses);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'warehouse_name' => 'required|string|max:255',
            'location' => 'required|string',
        ]);

        $warehouse = Warehouse::create($validatedData);
        return response()->json($warehouse, 201);
    }

    public function show($id)
    {
        $warehouse = Warehouse::findOrFail($id);
        return response()->json($warehouse);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'warehouse_name' => 'sometimes|required|string|max:255',
            'location' => 'sometimes|required|string',
        ]);

        $warehouse = Warehouse::findOrFail($id);
        $warehouse->update($validatedData);
        return response()->json($warehouse);
    }

    public function destroy($id)
    {
        $warehouse = Warehouse::findOrFail($id);
        $warehouse->delete();
        return response()->json(null, 204);
    }
}
