<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Http\Requests\PlanRequest;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        return view('plan.index',compact('plans'));
    }

    public function create()
    {
        return view('plan.create');
    }

    public function store(PlanRequest $request)
    {
        $plan = new Plan;
        $plan->name=$request->name;
        $plan->price=$request->price;
        $plan->save();
        return redirect('/')->with('success','Plan created succesfully');
    }

    public function view($id)
    {
        $plan = Plan::find($id);
        return view('plan.view',compact('plan'));
    }

    public function edit($id)
    {
        $plan = Plan::find($id);
        return view('plan.edit',compact('plan'));
    }
    public function update(PlanRequest $request, $id)
    {
        $plan = Plan::find($id);
        $plan->name=$request->name;
        $plan->price=$request->price;
        $plan->update();
        return redirect('/');
    }

    public function destroy($id)
    {
        $plan =Plan::find($id);
        $plan->delete();
        return redirect('/');
    }
}
