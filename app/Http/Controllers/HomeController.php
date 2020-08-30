<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(Request $request) {
        $start = date('Y-m-d', strtotime('first day of last month'));
        $end = date('Y-m-d', strtotime('last day of last month'));

        $sales = Sales::whereBetween('date', [$start, $end])->get();
        dd($sales);
        return view('dashboard', ['sales'=>$sales]);
    }
}
