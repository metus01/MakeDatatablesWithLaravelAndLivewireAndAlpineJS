<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersTable extends Component
{
    // public $users = [];
    public string $search  = '';
    public function render()
    {
        return view('livewire.users-table' ,
    [
        'users' => User::
        where('name', 'LIKE', $this->search)->get(),
    ]);
    }
}
