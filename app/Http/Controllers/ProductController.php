<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activeProducts = Product::active()->get();
        return view('modules.products.index', compact('activeProducts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $activeProducts = Product::active()->get();
        return view('modules.products.create', compact('activeProducts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'custom_key' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'credit_type' => 'required|in:simple,revolvente,bullet,arrendamiento',
            'interest_rate' => 'required|numeric|min:0|max:100',
            'interest_type' => 'required|in:fixed,variable',
            'term_type' => 'required|in:daily,weekly,monthly',
            'min_term' => 'required|integer|min:1',
            'max_term' => 'required|integer|min:1|gte:min_term',
            'min_amount' => 'required|numeric|min:0',
            'max_amount' => 'required|numeric|min:0|gte:min_amount',
            'special_conditions' => 'nullable|string',
        ]);

        Product::create($validated);
        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
