<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'username' => ['nullable', 'max:100'],
            'image' => ['nullable', 'max:255'],
            'number' => ['numeric'],
        ])->validate();
        
       /*  if (isset($input['image']) && $input['image'] instanceof \Illuminate\Http\UploadedFile) {
            $path_name = $input['image']->getClientOriginalName(); // Modificato per ottenere il nome originale del file
            $path_image = $input['image']->storeAs('public/images', $path_name);
            
        } */


        if(isset($input['image'])){
            $img_name = $input['image']->getClientOriginalName();
            $img = $input['image']->storeAs('public/images/user-profile', $img_name);
        }

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'username' => $input['username'],
            //'image' => $img, 
            'number' => $input['number'],
        ]);
    }
}