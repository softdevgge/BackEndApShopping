<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    protected $primaryKey = 'codigo';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all items
        $items = Item::all();
        //return JSON response with the items
        return response()->json($items);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'descripcion' => 'required|string',
            'precio' => 'required|decimal:0,2',
        ]);

        $Item = Item::create($validatedData);

        return response()->json($Item, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $Item)
    {
        // return JSON response with the Item        

        return response()->json($Item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $Item)
    {
        $validatedData = $request->validate([
            'descripcion' => 'required|string',
            'precio' => 'required|decimal:0,2',
        ]);

        $Item->update($validatedData);

        return response()->json($Item, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $Item)
    {
        $Item->delete();

        return response()->json(null, 204);
    }
}
