<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HelpAdd;
use App\Models\HelpForm;

class TrickestController extends Controller
{
    public function add(HelpAdd $request) {
        try {
            $trick=HelpForm::query()->create($request->all());
            return parent::sendRespons(["result"=>$trick->id],"GET category",200);
        } catch (\Throwable $th) {
            return parent::sendError(['error in DB CategoryController line 35'],$th->getMessage(),404);
        }
    }
}
