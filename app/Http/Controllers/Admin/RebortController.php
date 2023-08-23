<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\DoOrder;
use App\Models\HelpForm;
use App\Models\Line;
use App\Models\Product;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class RebortController extends Controller
{


    public function index()
    {

        try
        {
            // $reports = Report::all()->latest()->limit(100);
            $reports = DoOrder::query()->with('order')->latest()->limit(20)->get();


            for ($i=1 ; $i<count($reports);$i++)
            {
                $reports[$i]->order->user;
                $lines = $reports[$i]->order->line;
                $product=$lines[0]->product;
                $product->category;
            }

            return view('page.report')->with('reports',$reports);
        }
        catch(\Throwable $e){
          return  $e->getMessage();
            // return view('page.report')->with('message',$e->getMessage())->with('success',false);

        }
    }
    public function view($id){

        try{
            $report = DoOrder::query()->where('doOrderID','=',$id)->with('order')->get();
                $report[0]->order->user;
                $lines = $report[0]->order->line;
                $product=$lines[0]->product;
                $product->category;


            return view('page.report')->with('reports',$report);
        }catch(\Throwable $e)
        {
            return $e->getMessage();
        }

    }

    //
}
