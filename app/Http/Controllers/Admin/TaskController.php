<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function add(string $id)
    {
        return view('page.addtask')->with('id',$id);

    }

    /**
     * Update the specified resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Task::query()->create($request->all());
            return redirect()->back();
        } catch (\Throwable $th) {
            $th->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
