<?php

namespace App\Http\Requests\Backend;

use App\Models\Backend\Permission;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePermissionRequest extends FormRequest
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
        $rules = Permission::$rules;
        $rules['label'] = $rules['label'].",id,".$this->route("permission");
        $rules['permission'] = $rules['permission'].",id,".$this->route("permission");

        return $rules;
    }
}
