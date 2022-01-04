<?php

namespace App\Http\Requests\API\Backend;

use App\Models\Backend\EmailGroup;
use InfyOm\Generator\Request\APIRequest;

class CreateEmailGroupAPIRequest extends APIRequest
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
        return EmailGroup::$rules;
    }
}
