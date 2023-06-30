<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserForm extends Component
{
    public User $user;
    protected $rules =
    [
        'user.name' => 'required|min:6'
    ];
    public function save()
    {
        $this->validate();
        $this->user->save();
        $this->emit('userUpdated');
    }
    public function render()
    {
        return view('livewire.user-form');
    }
}
