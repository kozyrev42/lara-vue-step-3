<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getUsers()
    {
        $users = [
            [
                'name' => 'Иван',
                'surname' => 'Иванов',
                'age' => 25,
            ],
            [
                'name' => 'Петр',
                'surname' => 'Петров',
                'age' => 30,
            ],
            [
                'name' => 'Сидор',
                'surname' => 'Сидоров',
                'age' => 35,
            ],
        ];

        return $users;
    }

    public function testApi()
    {
        return 'тест АПИ ';
    }
}
