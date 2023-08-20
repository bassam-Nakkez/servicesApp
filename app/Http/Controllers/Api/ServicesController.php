<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function getProductWithTasks(int $product_id) {
        try {
            $result['product']=Product::query()->findOrFail($product_id);
            $result['product']['id']=$result['product']['productID'];
            $result['tasks']=$result['product']->tasks;
            for($i=0;$i<count($result['tasks']);$i++){
            $result['tasks'][$i]['id']=(String)$result['tasks'][$i]['taskID'];
            }
            $result['product']->multiprices;
            $result['product']['price']=(String)$result['product']['price'];
            $result['product']['priceMin']=(String)$result['product']['priceMin'];
            $result['product']['priceIcludesTax']=(String)$result['product']['priceIncludesTax'];
            $result['product']['multipricesIncludesTax']=$result['product']->multipricesIncludesTax;
            $result['product']['multipricesIncludesTax']["1"]=(String)$result['product']['multipricesIncludesTax']['first'];
            $result['product']['multipricesIncludesTax']["2"]=(String)$result['product']['multipricesIncludesTax']['first'];
            $result['product']['multipricesIncludesTax']["3"]=(String)$result['product']['multipricesIncludesTax']['second'];
            $result['product']['multipricesTaxRate']=$result['product']->multipricesTaxRate;
            $result['product']['multipricesTaxRate']["1"]=(String)$result['product']['multipricesTaxRate']['first'];
            $result['product']['multipricesTaxRate']["2"]=(String)$result['product']['multipricesTaxRate']['first'];
            $result['product']['multipricesTaxRate']["3"]=(String)$result['product']['multipricesTaxRate']['second'];
            $result['product']['id']=(String)$result['product']['productID'];
            $result['product']['multiprices']=$result['product']->multiprices;
            $result['product']['multiprices']["1"]=(String)$result['product']['multiprices']['first'];
            $result['product']['multiprices']["2"]=(String)$result['product']['multiprices']['first'];
            $result['product']['multiprices']["3"]=(String)$result['product']['multiprices']['second'];
            $result['product']['label']=$result['product']['lable'];
            $result['condition']=$result['product']['condtion'];
            $result['photo']=[];
            return parent::sendRespons(['result'=>$result],"Get SERVICE");
        } catch (\Throwable $th) {
            return parent::sendError('error in DB ContactController line 17',$th->getMessage());
        }
    }
}
