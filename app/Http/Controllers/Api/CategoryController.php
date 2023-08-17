<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Stripe;
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

    public function indexWithOutPhoto() {
        try {
            $catcories=Category::query()->get();
            for ($i=0;$i<count($catcories);$i++) {
                $catcories[$i]['id']=(String)$catcories[$i]['categoryID'];
            }
            return parent::sendRespons(["result"=>$catcories],"GET category",200);
        } catch (\Throwable $th) {
            return parent::sendError(['error in DB CategoryController line 35'],$th->getMessage(),404);
        }
    }

    public function getProductByCategory(int $category_id) {
        try {
            $producets=Product::query()->where('categoryID','=',$category_id)->get();
            for($i=0;$i<count($producets);$i++)
            {
                $producets[$i]->multiprices;
                $producets[$i]['price']=(String)$producets[$i]['price'];
                $producets[$i]['priceMin']=(String)$producets[$i]['priceMin'];
                $producets[$i]['priceIncludesTax']=(String)$producets[$i]['priceIncludesTax'];
                $producets[$i]['multipricesIncludesTax']=$producets[$i]->multipricesIncludesTax;
                $producets[$i]['multipricesIncludesTax']["1"]=(String)$producets[$i]['multipricesIncludesTax']['first'];
                $producets[$i]['multipricesIncludesTax']["2"]=(String)$producets[$i]['multipricesIncludesTax']['first'];
                $producets[$i]['multipricesIncludesTax']["3"]=(String)$producets[$i]['multipricesIncludesTax']['second'];
                $producets[$i]['multipricesTaxRate']=$producets[$i]->multipricesTaxRate;
                $producets[$i]['multipricesTaxRate']["1"]=(String)$producets[$i]['multipricesTaxRate']['first'];
                $producets[$i]['multipricesTaxRate']["2"]=(String)$producets[$i]['multipricesTaxRate']['first'];
                $producets[$i]['multipricesTaxRate']["3"]=(String)$producets[$i]['multipricesTaxRate']['second'];
                $producets[$i]['id']=(String)$producets[$i]['productID'];
                $producets[$i]['multiprices']=$producets[$i]->multiprices;
                $producets[$i]['multiprices']["1"]=(String)$producets[$i]['multiprices']['first'];
                $producets[$i]['multiprices']["2"]=(String)$producets[$i]['multiprices']['first'];
                $producets[$i]['multiprices']["3"]=(String)$producets[$i]['multiprices']['second'];
                $producets[$i]['label']=$producets[$i]['lable'];
            }
            return parent::sendRespons(["result"=>$producets],"GET SERVICE",200);
        } catch (\Throwable $th) {
            return parent::sendError(['error in DB CategoryController line 52'],$th->getMessage(),404);
        }

    }

    
}
