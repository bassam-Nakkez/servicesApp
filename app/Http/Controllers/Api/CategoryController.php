<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()  {
        try {
            $catcories=Category::query()->get();

            for ($i=0;$i<count($catcories);$i++) {
                $catcories[$i]['id']=(String)$catcories[$i]['categoryID'];
                $catcories[$i]->photo;
            }
            return parent::sendRespons(["result"=>$catcories],"GET category",200);
        } catch (\Throwable $th) {
            return parent::sendError(['error in DB CategoryController line 19'],$th->getMessage(),404);
        }
    }
}
