<?php

namespace App\Http\Requests\Backend;

use App\Models\Backend\CustomerGroup;
use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerGroupRequest extends FormRequest
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

        return CustomerGroup::$rules;
    }

    public function messages()
    {
        return CustomerGroup::$messages;
    }
}
