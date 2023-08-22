<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Salary;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            
            $salaries=Salary::query()->with('easer')->get();
            foreach ($salaries as $value) {
                $value->easer->category;
            }
            return view('page.salary')->with('salaries',$salaries);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Salary::query()->create($request->all());
            return redirect()->back();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        try {
            $easer=User::query()->where('userID','=',$id)->with('category')->with('salary')->get();
            $now = new DateTime();

            $year = $now->format('Y');
            $month = $now->format('m');
            
            $firstDayOfMonth = new DateTime($year . '-' . $month . '-01');
            
            $timestamp = $firstDayOfMonth->getTimestamp();
            
            $order=Order::query()->where('employID','=',$id)->where('date','>=',(String)$timestamp)->get();
            $j=0;
            $numberOfTasks=count($order);
            for ($i=0; $i <$numberOfTasks ; $i++) { 
                $j+=(int)(((int)$order[$i]->multicurrency_total_tva)*(int)$easer[0]->salary->radioOfSalary)/100;
            }
            
            return view('page.salary-view')->with(['easer'=>$easer,'salary'=>$j,'numberOfTasks'=>$numberOfTasks]);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
