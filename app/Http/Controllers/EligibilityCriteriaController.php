<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EligibilityCriteria;
use App\Http\Requests\EligibilityCriteriaRequest;

class EligibilityCriteriaController extends Controller
{
    public function index()
    {
        $eligibility_criterias = EligibilityCriteria::all();
        return view('eligibility_criteria.index',compact('eligibility_criterias'));
    }

    public function create()
    {
        return view('eligibility_criteria.create');
    }

    public function store(EligibilityCriteriaRequest $request)
    {
        $eligibility_criteria = new EligibilityCriteria;
        $eligibility_criteria->name = $request->name;
        $eligibility_criteria->age_less_than = $request->age_less_than;
        $eligibility_criteria->age_greater_than = $request->age_greater_than;
        $eligibility_criteria->last_login_days_ago = $request->last_login_days_ago;
        $eligibility_criteria->income_less_than = $request->income_less_than;
        $eligibility_criteria->income_greater_than = $request->income_greater_than;
        $eligibility_criteria->save();

        return redirect()->route('eligibility-criteria');
    }

    public function view($id)
    {
        $eligibility_criteria = EligibilityCriteria::find($id);
        return view('eligibility_criteria.view',compact('eligibility_criteria'));
    }

    public function edit($id)
    {
        $eligibility_criteria = EligibilityCriteria::findOrFail($id);
        return view('eligibility_criteria.edit',compact('eligibility_criteria'));
    }
    public function update(EligibilityCriteriaRequest $request, $id)
    {
        $eligibility_criteria = EligibilityCriteria::find($id);
        $eligibility_criteria->name = $request->name;
        $eligibility_criteria->age_less_than = $request->age_less_than;
        $eligibility_criteria->age_greater_than = $request->age_greater_than;
        $eligibility_criteria->last_login_days_ago = $request->last_login_days_ago;
        $eligibility_criteria->income_less_than = $request->income_less_than;
        $eligibility_criteria->income_greater_than = $request->income_greater_than;
        $eligibility_criteria->update();
        return redirect('eligibility-criteria');
    }

    public function destroy($id)
    {
        $eligibility_criteria =EligibilityCriteria::find($id);
        $eligibility_criteria->delete();
        return redirect('eligibility-criteria');
    }
}
