<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
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

    public function createPerson(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'job' => 'required',
            'age' => 'required|integer',
        ]);

        $data = $request->all();

        $person = Person::create($data);

        return response()->json([
            'person' => $person,
        ]);
    }
}
