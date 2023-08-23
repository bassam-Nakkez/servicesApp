<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

class CategoriesController extends Controller
{

    public function add ( Request $request )
    {

        try
        {
                        Category::create($request->all());
            return redirect()->back();
        }
        catch(\Throwable $e)
        {
            return $e->getMessage();
        }

    }

    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $categories = Category::all();
        if($categories)
        {
            return view( 'page.categories', compact('categories' ) )->with('success',true);

        }
        else {

           return view( 'page.categories' )->with('success',false);
        }
    }
    // public function edit(Request $request)
    // {
    //     try {
    //         $category = Category::find($request->Category_id);
    //         $category->update($request->all());
    //         return view('page.categories', ['categories' => Category::all()]);
    //     } catch (\Throwable $th) {
    //         return response()->json(['error' => $th->getMessage()], 500);
    //     }
    // }
    public function edit(Request $request)
{
    try {
        $category = Category::find($request->Category_id);
        if ($category) {
            $category->update($request->all());
            return view('page.categories', ['categories' => Category::all()]);
        } else {
            return response()->json(['error' => 'Category not found'], 404);
        }
    } catch (\Throwable $th) {
        return response()->json(['error' => $th->getMessage()], 500);
    }
}



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     ''=>'required',
        //     ''=>'required',
        //     ''=>'required',
        // ]);
        $category = Category::create($request->all());
         return redirect()->back()->with('success','category added successfully');
        //return redirect()->route('categories.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
 /* test*/
// public function edit(Request $request)
// {
//     try {
//         $category = Category::find($request->Category_id);
//         $category->update($request->all());
//         return response()->json(['message' => 'Category updated successfully']);
//     } catch (\Throwable $th) {
//         return response()->json(['error' => $th->getMessage()], 500);
//     }
// }

// public function edit(Request $request)
// {
//     try {
//         $category = Category::find($request->Category_id);
//         $category->update($request->all());
//         return view('page.categories', ['categories' => Category::all()]);
//     } catch (\Throwable $th) {
//         return response()->json(['error' => $th->getMessage()], 500);
//     }
// }






    /**
     * Remove the specified resource from storage.
     */



    public function destroy(Request $request)
    {

    try{

        $category = Category::find(request('Category_id'));
        $category->delete();
        return redirect()->route('categories.index') ->with( 'message' ,'category deleted successfully');

    } catch( \Throwable $e)
    {
        return redirect()->route('categories.index') ->with( 'message' ,'category deleted successfully');

    }

    }


}
