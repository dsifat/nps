<?php

namespace App\Http\Requests\Backend;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Http\FormRequest;


class UpdateCustomerGroupRequest extends FormRequest
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
        $route = Route::current()->parameters();
        $id = $route['customerGroup'];

        return [
            'name' => 'required|unique:customer_groups,name,' . $id,
            'customer_list' => 'required|max:5000|mimes:csv,xlx,xls,xlsx',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Customer Group Name is required',
            'customer_list.required' => 'Uploading File is required',
        ];
    }
}
