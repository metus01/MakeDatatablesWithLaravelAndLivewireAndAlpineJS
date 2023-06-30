<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    // use WithPagination;
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
        where('name', 'LIKE', "%{$this->search}%")
        ->orderBy($this->orderField , $this->orderDirection)
        ->paginate(5)
    ]);
    }
    public function setOrderField( string $name)
    {
        if($name === $this->orderField)
        {
            //reset pour initialisée la propriété à sa valeur de départ!!
            $this->orderDirection  = $this->orderDirection == 'ASC' ? 'DESC' : 'ASC';
        }else
        {
            $this->orderField = $name;
            $this->reset('orderDirection');
            $this->orderDirection = 'ASC';
        }
    }
}