<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(25);
        return view('users.index', compact('users'));
    }
}
