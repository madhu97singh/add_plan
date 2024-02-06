<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EligibilityCriteriaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if($this->method()=='PUT'){
            return [
                'name' => 'required|string',
                'age_less_than' => 'required|integer',
                'age_greater_than' => 'required|integer',
                'last_login_days_ago' => 'required|integer',
                'income_less_than' => 'required|numeric',
                'income_greater_than' => 'required|numeric',
            ];
        }else{
            return [
                'name' => 'required|string',
                'age_less_than' => 'required|integer',
                'age_greater_than' => 'required|integer',
                'last_login_days_ago' => 'required|integer',
                'income_less_than' => 'required|numeric',
                'income_greater_than' => 'required|numeric',
            ];
        }
    }
}
