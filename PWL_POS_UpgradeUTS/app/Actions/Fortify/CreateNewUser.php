<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
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
    public function create(array $input): UserModel 
    {
        Validator::make($input, [
            'nama' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:20'],
            // 'email' => [
            //     'required',
            //     'string',
            //     'email',
            //     'max:255',
            //     Rule::unique(User::class),
            // ],
            'profile_img' => ['required', 'mimes:png,jpg,jpeg', 'max:1024'],
            'password' => $this->passwordRules(),
        ])->validate();

        /** @var \Illuminate\Http\UploadedFile $image */
        $image = $input['profile_img'];
        $profileImagePath = $image->store('profile', 'public');

        return UserModel::create([
            'level_id' => 3,
            'nama' => $input['nama'],
            'username' => $input['username'],
            'profile_img' => $profileImagePath,
            'password' => Hash::make($input['password']),
        ]);
    }
}
