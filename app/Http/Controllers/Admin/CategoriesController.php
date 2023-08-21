<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
        $categories = Category::all();
        if($categories)
        {
            return view( 'page.categories', compact('categories' ) )->with('success',true);

        }
        else {

            return view( 'page.categories' )->with('success',false);
         }
    } catch(\Throwable $e){  return view( 'page.categories' )->with('success',false)->with('message',$e->getMessage());  }

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
    public function edit(Request $request , $id)
    {

              // $request->validate([
        //     ''=>'required',
        //     ''=>'required',
        //     ''=>'required',
        // ]);

        try {
            $categories = Category::where('CategoryID','=',$request['edit-id'])->update($request->all());
            return redirect()->back()->with($categories);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }

        // return redirect()->route('categories.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

     $category = Category::where('CategoryID','=',$id);

     if ($category) {
        $category->delete();
      return  $this->sendRespons( $category ,'category deleted successfully');
    }
    else{

        return redirect()->back()->with('message','can\'t delete category');
        }
    }
}
