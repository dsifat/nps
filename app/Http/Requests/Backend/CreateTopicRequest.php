<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Backend\Topic;
use Illuminate\Validation\Rule;

class CreateTopicRequest extends FormRequest
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
        return [
            'name' => 'required',
            'parent_id' => [
                Rule::unique('topics')->where('name', $this->name)
            ]
        ];
    }
    public function messages()
    {
        $messages = [
            'name.required'=>'Name is required',
            'parent_id.unique'=>'Sub topic name with the topic has already been taken'
        ];
        return $messages;
    }
}
