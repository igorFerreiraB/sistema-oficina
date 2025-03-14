<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Nulltable implements ValidationRule
{   
    public function passes($attribute, $value)
    {
        // Lógica da validação
        return $value === null || $value === '';
    }

    public function message()
    {
        return 'O campo :attribute deve ser nulo ou vazio.';
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
    }
}
