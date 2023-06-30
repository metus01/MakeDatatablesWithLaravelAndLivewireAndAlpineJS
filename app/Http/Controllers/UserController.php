<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    use WithPagination;
    
    public function __invoke(Request $request) : View
    {
        $users = User::all();
        return view('users.index' ,
    [
        'users' => $users,
    ]);
    }
}
