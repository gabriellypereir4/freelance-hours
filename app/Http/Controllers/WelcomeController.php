<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = User::find(1);

        // $user = User::query()->create([
        //     'name' => 'Gabrielly',
        //     'email' => 'gustavo@gmail.com',
        //     'password' => 'noturno'
        // ]);

        $user->email_verified_at = now();
        $user->save();

        dd($user->email_verified_at);
    }
}

