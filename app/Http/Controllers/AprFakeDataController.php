<?php

namespace App\Http\Controllers;

use App\models\AprClients;
use App\models\AprClientsPersonsTypes;
use App\models\AprClientsPersonsTypesConnections;
use App\models\AprEmployeeTypes;
use App\models\AprLoginsPlaces;
use App\models\AprPersons;
use App\models\AprProjects;
use App\models\AprProjectsLogins;
use App\models\AprProjectsLoginsConnections;
use App\models\AprProjectsTypes;
use App\models\AprProjectsTypesPersonsConnections;
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
                    //'id' => $faker->uuid, --- sitos eilutes nebereikia, nes BaseModel apsirasem f-ja
                    'name' => $faker->name,
                    'e-mail' => $faker->email,
                    'phone' => $faker->phoneNumber,
                ]);
        }

    }
    public function generateClients(int $count)
    {
        $faker = Factory::create($count);
        $data = [];

        for ($i = 0; $i < $count; $i++) {
            AprClients::create($data[] =
                [
                    'name' => $faker->name,
                    'client_type' => $faker->randomElement(['F', 'J'])
                ]);
        }

    }
    public function generateClientsPersonsTypes(int $count)
    {
        $faker = Factory::create($count);
        $data = [];

        for ($i = 0; $i < $count; $i++) {
            AprClientsPersonsTypes::create($data[] =
                [
                    'name' => $faker->randomElement(['Buhaltere(is)', 'Vadovas(e)', 'Valytojas(e)']),
                    'description' => $faker->text,
                ]);
        }

    }
    public function generateClientsPersonsTypesConnections(int $count)
    {
        $faker = Factory::create($count);
        $data = [];

        for ($i = 0; $i < $count; $i++) {
            AprClientsPersonsTypesConnections::create($data[] =
                [
                    'client_id' => AprClients::get()->random()->id,
                    'client_type_id' => AprClientsPersonsTypes::get()->random()->id,
                    'persons_id' => AprPersons::get()->random()->id,
                    'description' => $faker->text
                ]);
        }

    }
    public function generateEmployeeTypes(int $count)
    {
        $faker = Factory::create($count);
        $data = [];

        for ($i = 0; $i < $count; $i++) {
            AprEmployeeTypes::create($data[] =
                [
                    'name' => $faker->randomElement(['Vadybininkas', 'Front-endas', 'Back-endas']),
                    'description' => $faker->text
                ]);
        }

    }
    public function generateLoginsPlaces(int $count)
    {
        $faker = Factory::create($count);
        $data = [];

        for ($i = 0; $i < $count; $i++) {
            AprLoginsPlaces::create($data[] =
                [
                    'name' => $faker->randomElement(['Facebook', 'Skype', 'DB', 'www.projektas.lt']),
                    'description' => $faker->text
                ]);
        }

    }
    public function generateProjects(int $count)
    {
        $faker = Factory::create($count);
        $data = [];

        for ($i = 0; $i < $count; $i++) {
            AprProjects::create($data[] =
                [
                    'type_id' => AprProjectsTypes::get()->random()->id,
                    'clients_id' => AprClients::get()->random()->id,
                    'name' => $faker->randomElement(['Projektas1', 'Projektas2', 'Projektas3']),
                    'description' => $faker->text,
                ]);
        }

    }
    public function generateProjectsLogins(int $count)
    {
        $faker = Factory::create($count);
        $data = [];

        for ($i = 0; $i < $count; $i++) {
            AprProjectsLogins::create($data[] =
                [
                    'login_places_id' => AprLoginsPlaces::get()->random()->id,
                    'user_name' => $faker->userName,
                    'password' => $faker->password,
                    'login_url' => $faker->url,
                ]);
        }
    }
    public function generateProjectsLoginsConnections(int $count)
    {
        $faker = Factory::create($count);
        $data = [];

        for ($i = 0; $i < $count; $i++) {
            AprProjectsLoginsConnections::create($data[] =
                [
                    'project_id' => AprProjects::get()->random()->id,
                    'login_id' => AprProjectsLogins::get()->random()->id,
                ]);
        }

    }
    public function generateProjectsTypes(int $count)
    {
        $faker = Factory::create($count);
        $data = [];

        for ($i = 0; $i < $count; $i++) {
            AprProjectsTypes::create($data[] =
                [
                    'name' => $faker->randomElement(['Svetaine', 'E-shopas', 'Buhalterine sistema']),
                    'description' => $faker->text,
                ]);
        }

    }
    public function generateProjectsTypesPersonsConnections(int $count)
    {
        $faker = Factory::create($count);
        $data = [];

        for ($i = 0; $i < $count; $i++) {
            AprProjectsTypesPersonsConnections::create($data[] =
                [
                    'projejects_id' => AprProjects::get()->random()->id,
                    'persons_id' => AprPersons::get()->random()->id,
                    'types_id' => AprEmployeeTypes::get()->random()->id,
                ]);
        }

    }
}
