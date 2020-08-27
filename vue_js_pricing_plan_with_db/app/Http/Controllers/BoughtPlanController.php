<?php

namespace App\Http\Controllers;

use App\BoughtPlan;
use Illuminate\Http\Request;

class BoughtPlanController extends Controller
{
    public function index()
    {
        return view('pricing-plans');
    }

    public function store(Request $request) 
    {
        $plan = new BoughtPlan();
        $plan->name = $request->name;
        $plan->price = $request->price;
        $plan->storage = $request->storage;
        $plan->mail_included = $request->mail_included;

        $plan->save();

        // echo"<script>alert('Your Plan is paid!')</script>";

        return '<script type="text/javascript">alert("Your plan is paid")</script>';
            
    }
}
