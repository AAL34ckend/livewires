<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Activity;

class Todolist extends Component
{
    public $body;
    public $activities;
    public $count_activities;

    public function render()
    {
        $this->activities = Activity::orderBy('position','asc')->get();
        $this->activities = Activity::get();
        return view('livewire.todolist');
    }

    public function updateTaskOrder($activities)
    {
        foreach($activities as $activity){
            Activity::where('id',$activity['value'])->update(['position' => $activity['order']]);
        }
    }
    public function submit()
    {
        $this->validate = ([
            'body' => 'required'
        ]);

        Activity::create([
            'position' => $this->count_activities + 1,
            'body' => $this->body
        ]);

        $this->body = NULL;
    }

    public function delete($id)
    {
        $activity = Activity::find($id);
        $activity->delete();
    }
}
