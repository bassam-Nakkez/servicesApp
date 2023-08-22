<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{



    public function view()
        {


            try
            {

        $users = User::all();
        $result['dataUser']['month'][0] = 0;
        $result['dataUser']['year'][0] = 0;
        $result['dataUser']['count'][0] = 0;

        if($users){
        $userCountByMonth = User::select(DB::raw('MONTH(created_at) as month'), DB::raw('YEAR(created_at) as year'), DB::raw('COUNT(*) as count'))
        ->groupBy('year', 'month')
        ->get();
        $i = 1;
        foreach ($userCountByMonth as $userCount) {
            $month = Carbon::createFromDate($userCount->year, $userCount->month, 1)->monthName;
            $year = $userCount->year;
            $count = $userCount->count;
            $dataUser['month'][$i] = $month;
            $dataUser['year'][$i] = $year;
            $dataUser['count'][$i] = $count;
            $i++;
            $result['dataUser'] = $dataUser;
        }

    }

        $currentDate = Carbon::now();

            $week = $currentDate->subMonths(1/4);
            $serviceProvider = User::all()->where('socid', 0);
            $categories = Category::all();
            $orders = Order::where('created_at', '<=', $week);

            $users? $userCount = $users->count() : $userCount = 0;
            $serviceProvider ? $serviceProviderCount = $serviceProvider->count() : $serviceProviderCount = 0;
            $categories? $categoryrCount = $categories->count() : $categoryrCount = 0;
            $orders? $orderCount = $orders->count() : $orderCount = 0;


            $result['userCount']= $userCount;
            $result['serviceProviderCount']= $serviceProviderCount;
            $result['categoryrCount']= $categoryrCount;
            $result['orderCount'] = $orderCount;

            return view('page.dashboard', compact('result') );

            //return  $dataUser;

            }
            catch(\Throwable $e)
            {
                $result['dataUser'] = 'no data';
                $result['userCount']= 'no data';
                $result['serviceProviderCount']= 'no data';
                $result['categoryrCount']= 'no data';
                $result['orderCount'] = 'no data';
                return view('page.dashboard', compact('result') )->with('success',false);

            }

        }

    }





