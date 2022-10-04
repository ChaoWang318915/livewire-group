<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Repositories\AuthRepository;
use Usernotnull\Toast\Concerns\WireToast;

class Hero extends Component
{

    use WireToast;

    public $email;


    public function submit(AuthRepository $authRepo){
            
            $validator = validator()->make(['email' => $this->email], [ 'email' => "required" ]);

            if($validator->fails()) return toast()->danger($validator->errors()->first())->push();

            if(!$authRepo->sendSignedUrl($this->email)) return toast()->danger('An error occured, please try again')->push();

            $this->reset();

            return toast()->success('Password request has been sent to your email')->push();
            
    }

    public function render()
    {
        return view('livewire.home.hero');
    }
}
