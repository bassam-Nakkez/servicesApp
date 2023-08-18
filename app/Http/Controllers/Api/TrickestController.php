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
            return parent::sendRespons(["result"=>$trick->id],"POST TICKETS",201);
        } catch (\Throwable $th) {
            return parent::sendError(['error in DB TrickestController line 17'],$th->getMessage(),404);
        }
    }
}
