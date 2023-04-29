<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;

class UserController extends Controller
{
    public function index()
    {
        return view('users', [
            'users' => SpladeTable::for(User::class)
                ->column('id')
                ->column('name', sortable:true,searchable:true)
                ->column('email')
                ->withGlobalSearch(columns:['name','email'])
                ->paginate(15),
        ]);
    }
}
