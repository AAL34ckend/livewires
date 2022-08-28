<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleShow extends Component
{
    protected $listeners = ['articleStore'=>'render'];
    public function render()
    {
        return view('livewire.article-show',[
            'articles' => Article::orderBy('id','desc')->get()
        ]);
    }
}
