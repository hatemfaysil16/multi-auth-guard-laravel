<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateAdminRequest extends FormRequest
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
    public function rules(Request $request)
    {
       $id= Request()->segment(3);
        return [
        'name' => 'required',
        'status' => 'nullable',
        'email' => 'required|email|unique:admins,email,'.$id,
        'password' => 'same:confirm-password',
        'roles' => 'required',
        'image'=>'mimes:jpg,jpeg,png',
        ];
    }
}
