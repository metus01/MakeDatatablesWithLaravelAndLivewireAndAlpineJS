<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersTable extends Component
{
    // public $users = [];
    public string $search  = '';

    protected $queryString = [
        'search' => ['except' , '' ]
    ];
    public string $orderField = 'name';
    public string $orderDirection = 'ASC';
    public function paginationView()
    {
         return 'livewire.pagination';
    }
    public function render()
    {
        return view('livewire.users-table' ,
    [
        'users' => User::
        where('name', 'LIKE', "%{$this->search}%")->paginate(2),
    ]);
    }
}
