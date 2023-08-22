<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
            $reports = Report::all();


            for ($i=1 ; $i<count($reports);$i++)
            {

                $line = $reports[$i]->line;
                $product = Product::where('productID',$line->fk_product);
                $emp = User::where('userID' ,'=' , $reports[$i]->empID );
                // $reports[$i]['Customer'] = $emp->firstName;
                // $reports[$i]['service']= $product->lable;
            }

            // return $reports;

            // for($i=0 ; $i < count($reports) ; $i++)
            // {
            //     $line = $reports[$i]->line;
            // }
            $i=1;
            return view('page.report',compact('reports','i'))->with('success',true);
        }
        catch(\Throwable $e){
          return  $e->getMessage();
            // return view('page.report')->with('message',$e->getMessage())->with('success',false);

        }
    }
    public function view($id){

        try{
            $report = Report::where( 'reportID',$id);
            $line = $report->line;
            $product = Product::where('productID',$line->fk_product);
            $emp = User::where('userID' ,'=' , $report->empID );
            $report['CustomerName'] = $emp->firstName . ' ' . $emp->lastName;
            $report['service']= $product->lable;

            return view('page.report-view ', compact('report'))->with('success',true);
        }catch(\Throwable $e)
        {
        // return view('page.report')->with('message',$e->getMessage())->with('success',false);
            return $e->getMessage();
        }

    }

    //
}
