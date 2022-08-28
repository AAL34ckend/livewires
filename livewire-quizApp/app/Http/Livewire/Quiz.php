<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Question;

class Quiz extends Component
{
    public $status;
    public $question;
    public $priority;
    public $totalQuiz;

    public $mySelected;
    public $correct;

    public function mount()
    {
        $this->status = 'instruction';
        $this->priority = 1;
        $this->total_quiz = Question::count();
        $this->correct = 0;
        $this->mySelected = NULL;
    }
    public function changeStatus($status)
    {
        $this->status = $status;
    }
    public function choiceOption($index)
    {
        $this->mySelected = $index;
    }
    public function render()
    {
        $this->question = Question::where('priority', $this->priority)->first();
        return view('livewire.quiz');
    }
    public function nextQuestion()
    {
        if($this->priority < $this->total_quiz)
        {
            if($this->mySelected == $this->question->correct){
                $this->correct++;
            }

            $this->priority++;
            $this->mySelected = NULL;
        }else{
            $this->status = 'finish';
        }
    }
}
