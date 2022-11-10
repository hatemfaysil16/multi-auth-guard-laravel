<?php

namespace App\Rules\Admin;

use App\Models\Admin;
use Illuminate\Contracts\Validation\Rule;

class LoginRole implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $Admin = Admin::where('email',$value)->first();
        if($Admin->status=='active'){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Is not Admin Active';
    }
}
