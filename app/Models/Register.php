<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Validation\Rules\Password;

    class Register extends Model
    {
        use HasFactory;

        public static function getRules():array
        {
            return [
                'first_name' => ['required', 'string', 'max:50'],
                'last_name' => ['required', 'string', 'max:50'],
                'email' => ['required', 'string', 'email'],
                'password' => ['required', 'string', Password::min(8)->letters()->mixedCase()->numbers()->symbols(), 'confirmed'],
                'password_confirmation' => ['required', 'string'],
            ];
        }
    }
