<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PreferenceController extends Controller
{
    public function index()
    {
        $users = User::with('preference')->first();

        $users->preference()->create([
            'title' => 'Software Develope',
            'content' => 'A young programmer'
        ]);

        $users->refresh();

        dd($users->preference);
    }
}
