<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateStoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('story_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:stories,title,'.request()->route('story')->id,
            ],
        ];
    }
}
