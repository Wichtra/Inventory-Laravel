<?php

namespace App\Http\Controllers;

use App\Models\CommodityOut;
use Illuminate\Http\Request;

class CommodityOutController extends Controller
{
    public function index()
    {
        $commodityOuts = CommodityOut::all();
        return view('commodity_out.index', compact('commodityOuts'));
    }

    public function create()
    {
        return view('commodity_out.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'commodity_id' => 'required|exists:commodities,id',
            'quantity' => 'required|integer',
            'issued_date' => 'required|date',
            'warehouse_id' => 'required|exists:warehouses,id',
        ]);

        CommodityOut::create($request->all());

        return redirect()->route('commodity_out.index')
                         ->with('success', 'Commodity Out created successfully.');
    }

    public function show(CommodityOut $commodityOut)
    {
        return view('commodity_out.show', compact('commodityOut'));
    }

    public function edit(CommodityOut $commodityOut)
    {
        return view('commodity_out.edit', compact('commodityOut'));
    }

    public function update(Request $request, CommodityOut $commodityOut)
    {
        $request->validate([
            'commodity_id' => 'required|exists:commodities,id',
            'quantity' => 'required|integer',
            'issued_date' => 'required|date',
            'warehouse_id' => 'required|exists:warehouses,id',
        ]);

        $commodityOut->update($request->all());

        return redirect()->route('commodity_out.index')
                         ->with('success', 'Commodity Out updated successfully.');
    }

    public function destroy(CommodityOut $commodityOut)
    {
        $commodityOut->delete();

        return redirect()->route('commodity_out.index')
                         ->with('success', 'Commodity Out deleted successfully.');
    }
}
