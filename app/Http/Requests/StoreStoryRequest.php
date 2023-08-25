<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreStoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('story_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:stories',
            ],
        ];
    }
}
