<?php

namespace App\Actions\Fortify;

use App\Concerns\PasswordValidationRules;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    public function create(array $input): User
    {
        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'phone_number' => ['required', 'string', 'max:20'],
            'DOB' => ['required', 'date'],
            'password' => $this->passwordRules(),
        ])->validate();

        $user = new User();

        $user->first_name = $input['first_name'];
        $user->last_name = $input['last_name'];
        $user->email = $input['email'];
        $user->phone_number = $input['phone_number'];
        $user->DOB = $input['DOB'];
        $user->password = $input['password'];

        // Assign the role server-side
        $patientRole = Role::where('role_name', 'Patient')->firstOrFail();
        $user->role_id = $patientRole->role_id;

        $user->save();

        return $user;
    }
}
