<?php


namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Lang;

class Phone implements Rule
{

    /**
     * @inheritDoc
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^(\+79\d{9})$/', $value);
    }

    /**
     * @inheritDoc
     */
    public function message()
    {
        return Lang::get('validation.phone');
    }
}
