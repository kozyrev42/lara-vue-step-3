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

    public function getPeople()
    {
        $data = Person::all();

        return response()->json($data);
    }

    public function updatePerson(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'name' => 'required',
            'job' => 'required',
            'age' => 'required|integer',
        ]);

        $data = $request->all();

        $person = Person::find($data['id']);

        $person->update($data);

        return response()->json($data);
    }

    public function deletePerson($id)
    {
        $person = Person::find($id);

        $person->delete();

        return response()->json([
            'message' => 'Пользователь удален',
        ]);
    }
}
