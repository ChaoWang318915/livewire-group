<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Str;
use App\Repositories\AuthRepository;
use Usernotnull\Toast\Concerns\WireToast;


class Login extends Component
{

    use WireToast;

    public $email;


    public function mount(AuthRepository $authRepo){
        
        try {
            
            if(request()->has(['token', 'email', 'password'])) {

                if(!$authRepo->login(request()->all())) return throw new \Exception("Error Processing Request", 1);

                toast()->success('Login Successful')->pushOnNextPage();

                return redirect()->route('user.dashboard');

            }


        } catch (\Exception $e) {
            
            toast()->danger('Invalid Login Credentials')->pushOnNextPage();

        }

    }


    public function submit(AuthRepository $authRepo){
            

            $this->validate([ 'email' => "required" ]);

            if(!$authRepo->sendNewPassword($this->email)) return toast()->danger('An error occured, please try again')->push();

            $this->reset();

            return toast()->success('Password request has been sent to your email')->push();
            
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
