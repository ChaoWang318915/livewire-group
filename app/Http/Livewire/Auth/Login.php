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

        if(request()->hasValidSignature()){

            if(!$authRepo->login(request('id'))) 
                return toast()->danger('Invalid Login Credentials')->pushOnNextPage();

            toast()->success('Login Successful')->pushOnNextPage();

            return redirect()->route('user.dashboard');

        }else{
            if(request()->has(['id', 'email', 'expires', 'signature']))
                return toast()->danger('Signed In Url has expired')->pushOnNextPage();
        }

    }


    public function submit(AuthRepository $authRepo){
            

            $this->validate([ 'email' => "required" ]);

            if(!$authRepo->sendSignedUrl($this->email)) return toast()->danger('An error occured, please try again')->push();

            $this->reset();

            return toast()->success('Password request has been sent to your email')->push();
            
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
