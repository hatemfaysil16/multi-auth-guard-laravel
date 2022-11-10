<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'name.en'=>['required','min:2','max:255'],
            'name.ar'=>['required','min:2','max:255'],
            'description.en'=>['required','min:2','max:255'],
            'description.ar'=>['required','min:2','max:255'],
            'image'=>['nullable','mimes:png,jpg']
        ];
    }
}
