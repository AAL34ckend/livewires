<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromView
{
    use Exportable;

    public function __construct($userId)
    {
        $this->userId = $userId;
    }
    public function view(): View
    {
        return view('exports.users', [
            'users' => User::whereIn('id', $this->userId)->get()
        ]);
    }
}
