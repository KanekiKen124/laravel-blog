<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $users = [
            [
                "id" => 1,
                "username" => "Ilnur"
            ],
            [
                "id" => 2,
                "username" => "Denis"
            ],
        ];
        $user = [
            "id" => 1,
            "username" => "Альберт"
        ];
        return view('index', compact('user', 'users'));
    }
}
