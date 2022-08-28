<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Exports\UsersExport;
use Livewire\WithPagination;

class Tutorial extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $mySelected = [];

    public function render()
    {
        return view('livewire.tutorial',[
            'users' => User::latest()->paginate(5)
        ])->extends('layouts.master')->section('content');
    }
    public function downloadExcel()
    {
        $name = time().'-users.xlsx';
        return(new UsersExport($this->mySelected))->download($name);
    }
    public function downloadPdf()
    {
        $name = time().'-users.xlsx';
        return (new UsersExport($this->mySelected))->download($name, \Maatwebsite\Excel\Excel::CSV);
    }
}
