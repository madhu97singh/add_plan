<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
class PlanRequest extends FormRequest
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
    public function rules(Request $request)
    {
        if($this->method()=='PUT'){
            return [
                'name' => 'required|unique:plans,name,'.$request->id,
                'price'=>'required',
            ];
        }else{
            return [
                'price'=>'required',
                'name' =>'required|unique:plans',
            ];
        }
    }

    public function messages(){
        return[ 
            'price.required'=>'Please Enter Price.',
            'name.required'=>'Please Enter Name.',
        ];
    }
}
