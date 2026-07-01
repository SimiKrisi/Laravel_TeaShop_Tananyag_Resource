<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthlyReportController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = [
          'total sales' => 10000,
          'total orders' => 150,
        ];
        return view('monthly_report', compact('data'));
    }
}
