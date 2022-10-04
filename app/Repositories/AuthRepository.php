<?php

namespace App\Repositories;

use App\Models\User;
use Mail;
use App\Mail\SendSignedUrlMail;
use Str;
use URL;
use DB;


class AuthRepository
{
    
    public function getSignedUrl($user){

        return URL::temporarySignedRoute('login', now()->addMinutes(5), ['email' => $user->email, "id" => $user->id]);

    }


    public function sendSignedUrl($email){
        
            try {  

                DB::beginTransaction();
            
                if($user = User::firstOrCreate(["email" => $email], ["email" => $email, 'name' => Str::random(20)])){
                    Mail::to($email)->send(new SendSignedUrlMail($this->getSignedUrl($user)));
                    DB::commit();
                    return $user;
                }

                throw new \Exception("Error Processing Request", 1);

            } catch (\Exception $e) {
                
                DB::rollback();

                return false;
            }      

    }

    public function login($id){

        return auth()->loginUsingId($id);
        
    }

}
