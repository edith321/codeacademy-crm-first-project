<?php

namespace App\Http\Controllers;

use App\models\AprPersons;
use Faker\Factory;
use Illuminate\Http\Request;

class AprFakeDataController extends Controller
{
    public function generatePersons(int $count)
    {
        $faker = Factory::create($count);
        $data = [];

        for ($i = 0; $i < $count; $i++) {
            AprPersons::create($data[] =
                [
                    'id' => $faker->uuid,
                    'name' => $faker->name,
                    'e-mail' => $faker->email,
                    'phone' => $faker->phoneNumber,
                ]);
        }

    }
}
