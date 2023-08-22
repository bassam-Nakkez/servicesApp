<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Sub_Faq;
use Illuminate\Http\Request;

class Faqs extends Controller
{
    function index(){
        try {
            $faqs=Faq::query()->with('subfaq')->latest()->get();
            return view('page.faq')->with('faqs',$faqs);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    function add(Request $request) {
        try {
            
            Faq::query()->create([
                'label'=>$request->label,
                'color'=>"",
                'description'=>"" ,
            ]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    function addSubFaq(Request $request)  {
        try {
            Sub_Faq::query()->create([
                'lable'=>$request->lable ,
                'color'=>$request->color,
                'description'=>$request->description,
                'faqID'=>$request->feqID,
            ]);
            return redirect()->back();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
