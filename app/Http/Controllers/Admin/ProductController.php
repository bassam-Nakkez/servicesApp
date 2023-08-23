<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{



    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $categories=Category::query()->latest()->get();
            $products=Product::query()->latest()->get();
            return view('page.services')->with(['products'=>$products,'categories'=>$categories]);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Product::query()->create([
                'lable'=>$request->lable,
                'price'=>$request->price,
                'priceMin'=>$request->priceMin,
                'priceIncludesTax'=>$request->priceMin,
                'condtion'=>$request->condtion,
                'categoryID'=>$request->categoryID,
                'description'=>$request->description
            ]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
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
