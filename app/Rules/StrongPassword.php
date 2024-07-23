<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Contracts\Validation\ValidationRule;

class StrongPassword implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function passes($attribute, $value)
    {
        // Vérifie si le mot de passe respecte les critères spécifiés
        $hasUppercase = preg_match('/[A-Z]/', $value);
        $hasLowercase = preg_match('/[a-z]/', $value);
        $hasDigit = preg_match('/\d/', $value);
        $hasMinimumLength = strlen($value) >= 8;

        return $hasUppercase && $hasLowercase && $hasDigit && $hasMinimumLength;
    }

    public function message()
    {
        return 'Le mot de passe doit contenir au moins 8 caractères, une lettre majuscule, une lettre minuscule et un chiffre.';
    }
}