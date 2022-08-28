<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\IndonesiaProvince;
use Illuminate\Support\Facades\Auth;

class EditProfile extends Component
{
    public $name;
    public $email;
    public $myProvince;
    public $myCity;
    public $alert;

    public function mount()
    {
        $this->alert = false;
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->myProvince = Auth::user()->province;
        $this->myCity = Auth::user()->city;
    }
    public function render()
    {
        if($this->myProvince){
            $city = IndonesiaProvince::where('code',$this->myProvince)->first();
        }else{
            $city = NULL;
        }
        return view('livewire.edit-profile',[
            'province' => IndonesiaProvince::get(),
            'city' => $city
        ]);
    }
    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'.Auth::user()->id
        ]);

        User::where('id',Auth::user()->id)->update([
            'name' => $this->name,
            'email' => $this->email,
            'province' => $this->myProvince,
            'city' => $this->myCity,
        ]);
        $this->alert = true;
    }
}
