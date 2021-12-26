<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Backend\Topic;
use Illuminate\Validation\Rule;

class UpdateTopicRequest extends FormRequest
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
//        return Topic::$rules;
        return [
            'name' => 'required',
            'parent_id' => [
                Rule::unique('topics')->where('name', $this->name)
            ]
        ];
    }


//    public function withValidator($validator)
//    {
//        $validator->after(function ($validator) {
//            if ($this->get('parent_id')!=null){
//
//            }
//            if (1) {
//                $validator->errors()->add('name', 'Something is wrong with this field!');
//            }
//        });
//    }
//    public function checkTopictype()
//    {
//
//    }
}
