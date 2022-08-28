<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class MyTutorial extends Component
{
    public $title;
    public $content;
    public $category;
    public $tag;

    public $my_category;

    public function mount()
    {
        $this->my_category = [
            'sepak bola',
            'badminton',
            'bola basket',
        ];
        $article = Article::find(1);
        $this->title = $article->title;
        $this->content = $article->content;
        $this->category = $article->category;
        $this->tag = json_decode($article->tag);
    }
    public function render()
    {
        return view('livewire.my-tutorial');
    }
    public function store()
    {
        $data = [
            'title' => $this->title,
            'content' => $this->content,
            'category' => $this->category,
            'tag' => json_encode($this->tag)
        ];

        $store = Article::create($data);
        if($store){
            $this->title = NULL;
            $this->content = NULL;
            $this->emit('articleStore');
            $this->dispatchBrowserEvent('articleStore');
        }
    }
}
