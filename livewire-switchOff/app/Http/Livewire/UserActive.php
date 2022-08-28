<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserActive extends Component
{
    public function render()
    {
        $users = User::withTrashed()->get();
        return view('livewire.user-active',[
            'users' => $users
        ]);
    }
    public function userStatus($user_id)
    {
        $user = User::withTrashed()->find($user_id);
        if($user->deleted_at == NULL){
            $user->delete();
        }else{
            $user->restore();
        }
    }
}
