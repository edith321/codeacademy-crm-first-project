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
    /**
     * Generates Persons data
     * @param int $count
     */
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

    /**
     * Generates Clients and client types data
     * @param int $count
     *
     */
    public function generateClients(int $count)
    {
        $faker = Factory::create($count);
        $data = [];

        for ($i = 0; $i < $count; $i++) {
            AprClients::create($data[] =
                [
                    'name' => $faker->randomElement(['Pirmas', 'Antras', 'Trecias']),
                    'client_type' => $faker->randomElement(['F', 'J'])
                ]);
        }

    }

    /**
     * Generates clients occupation types
     * @param int $count
     */
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

    /**
     * Generates connections between clients, client types, persons, adds description
     * @param int $count
     */
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

    /**
     * Generates employee occupation types
     * @param int $count
     *
     */
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

    /**
     * Generates login places adds description
     * @param int $count
     *
     */
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

    /**
     * Generates projects
     * @param int $count
     */
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

    /**
     * Generates logins
     * @param int $count
     *
     */
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

    /**
     *
     * @param int $count
     */
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

    /**
     * Generates project types and description
     * @param int $count
     *
     */
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

    /**
     * Generates connections between projects, persons and employee types
     * @param int $count
     */
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
