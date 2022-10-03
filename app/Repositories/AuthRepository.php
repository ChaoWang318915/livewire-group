<?php

namespace App\Repositories;

use App\Models\User;
use Mail;
use App\Mail\UpdatePassword;
use Str;
use DB;


class AuthRepository
{
    
    public function sendNewPassword($email){

            $newPassword = Str::random(5);
            $token = Str::random(10);

            try {
                if($user = User::firstOrCreate(["email" => $email], ["email" => $email, 'name' => $token, 'password' => bcrypt($newPassword)])){
                    $user->update([ 'password' => bcrypt($newPassword), 'token' => $token ]);
                    Mail::to($email)->send(new UpdatePassword($newPassword, $email, $token));

                    return true;
                }

            } catch (\Exception $e) {
                
                return false;

            }

    }

    public function login($data){

        if(!User::where('email', $data['email'])->where(DB::raw("BINARY token"), $data['token'])->first()) return false;
        
        if(!$user = auth()->attempt(['email' => $data['email'], 'password' => $data['password']])) return $user;
        
        return auth()->user()->update(['token' => null]); //Render token Invalid after login
    }

}
