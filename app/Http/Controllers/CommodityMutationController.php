<?php

namespace App\Http\Controllers;

use App\Models\CommodityMutation;
use Illuminate\Http\Request;

class CommodityMutationController extends Controller
{
    public function index()
    {
        $mutations = CommodityMutation::all();
        return response()->json($mutations);
    }

    public function show($id)
    {
        $mutation = CommodityMutation::find($id);
        return response()->json($mutation);
    }

    public function create()
    {
        // return a view to create a new commodity mutation
    }

    public function store(Request $request)
    {
        $mutation = CommodityMutation::create($request->all());
        return response()->json($mutation);
    }

    public function edit($id)
    {
        // return a view to edit the commodity mutation
    }

    public function update(Request $request, $id)
    {
        $mutation = CommodityMutation::find($id);
        $mutation->update($request->all());
        return response()->json($mutation);
    }

    public function destroy($id)
    {
        $mutation = CommodityMutation::find($id);
        $mutation->delete();
        return response()->json('Commodity mutation deleted successfully');
    }
}
