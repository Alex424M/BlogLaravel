<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'required|string',
            'content'=>'required|string',
            'photo'=>'file',
            'category_id'=>'required|integer',
            'tag_ids'=>'nullable|array',
            'tag_ids.*'=>'nullable|integer|exists:tags,id'
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'Поле название необходимо заполнить',
            'content.required'=>'Поле контент небходимо заполнить',
            'category_id.required'=>'Необходимо выбрать категорию'
        ];
    }
}
