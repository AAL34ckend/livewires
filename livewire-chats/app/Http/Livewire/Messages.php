<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use App\Models\Group;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Messages extends Component
{
    public $groups;
    public $user;
    public $group = NULL;
    public $my_text;

    public function mount(){
        $this->user = Auth::user();
        $this->groups = Group::get();
    }
    public function render()
    {
        $chats = NULL;
        if($this->group != NULL){
            $chats = Chat::where('group_id',$this->group->id)->OrderBy('created_at','desc')->get();
        }
        return view('livewire.messages',[
            'chats' => $chats
        ]);
    }
    public function selectGroup($id)
    {
        $this->group = Group::find($id);
    }
    public function send()
    {
        $this->validate([
            'my_text' => 'required'
        ]);

        Chat::create([
            'group_id' => $this->group->id,
            'user_id' => $this->user->id,
            'message' => $this->my_text,
        ]);

        $this->my_text = NULL;
    }
}
