<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Sub_Faq;

class FaqController extends Controller
{
    public function index() {
        try {
            $faqs=Faq::query()->get();
            for($i=0;$i<count($faqs);$i++)
            {
                $faqs[$i]['id']=(String)$faqs[$i]['faqID'];
            }
            return parent::sendRespons(["result"=>$faqs],"GET category",200);
        } catch (\Throwable $th) {
            return parent::sendError(['error in DB FaqController line 21'],$th->getMessage(),404);

        }
    }

    public function getFaqsChild(int $faq_id) {
        try {
            $faqChild=Sub_Faq::query()->where('faqID','=',$faq_id)->get();
            for($i=0;$i<count($faqChild);$i++)
            {
                
                $faqChild[$i]['id']=(String)$faqChild[$i]['subFaqID'];
            }
            return parent::sendRespons(["result"=>$faqChild],"GET category",200);
        } catch (\Throwable $th) {
            return parent::sendError(['error in DB FaqController line 36'],$th->getMessage(),404);
        }
    }
}
