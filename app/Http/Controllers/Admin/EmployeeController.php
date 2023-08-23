<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\HelpForm;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function employment(){

        try{
            $emps = HelpForm::query()->with('user')->get();

            for($i =0 ; $i<count($emps) ;$i++ )
            {
                $category = Category::where( 'categoryID',$emps[$i]->user->categoryID);
                $emps[$i]['categoryName'] = $category->lable;
            }

            return view('page.Employment')->with('emps',$emps);
        }
        catch(\Throwable $e)
        {
            return $e->getMessage();
        }


    }

}
