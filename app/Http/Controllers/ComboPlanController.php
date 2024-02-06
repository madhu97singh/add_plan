<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComboPlan;
use App\Models\Plan;
use App\Http\Requests\ComboPlanRequest;

class ComboPlanController extends Controller
{
    public function index()
    {
        $comboPlans = ComboPlan::all();
        return view('combo_plan.index', compact('comboPlans'));
    }

    public function create()
    {
        $plans = Plan::all();
        return view('combo_plan.create', compact('plans'));
    }

    public function store(ComboPlanRequest $request)
    {
        $planIds = $request->input('plan_ids');
        $planidString = implode(",", $planIds);
        $combo_plan = new ComboPlan;
        $combo_plan->name = $request->name;
        $combo_plan->price = $request->price;
        $combo_plan->plan_ids = $planidString;
        $combo_plan->save();

        return redirect()->route('combo-plans');
    }

    public function view($id)
    {
        $comboPlan = ComboPlan::find($id);
        return view('combo_plan.view',compact('comboPlan'));
    }

    public function edit($id)
    {
        $comboPlan = ComboPlan::findOrFail($id);
        $allPlans = Plan::all();
        return view('combo_plan.edit',compact('comboPlan','allPlans'));
    }
    public function update(ComboPlanRequest $request, $id)
    {
        $planIds = $request->input('plan_ids');
        $planidString = implode(",", $planIds);
        $comboPlan = ComboPlan::find($id);
        $comboPlan->name=$request->name;
        $comboPlan->price=$request->price;
        $comboPlan->plan_ids = $planidString;
        $comboPlan->update();
        return redirect('combo-plans');
    }

    public function destroy($id)
    {
        $comboPlan =ComboPlan::find($id);
        $comboPlan->delete();
        return redirect('combo-plans');
    }

}
