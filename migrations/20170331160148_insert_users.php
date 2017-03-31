<?php

use Phinx\Migration\AbstractMigration;

class InsertUsers extends AbstractMigration
{
    public function up()
    {        
        $faker = Faker\Factory::create();  
        $row = [
            [
                "id_occupation" => 1,
                "company" => 'Sem Empresa',
                "telphone" => '(00)0000-0000',
                "responsibility" => "Desempregado",
                "start_date"=> $faker->date($format = 'Y-m-d', $max = 'now'),
                "active" => 1
            ]
        ];
        $this->insert('tb_occupation',$row);
        $rows = [
            [   
                "email" => $faker->email,
                "cpf" => $faker->randomNumber($nbDigits = NULL),
                "name" => $faker->name,
                "lastname" => $faker->name,
                "password" => $faker->password,
                "type_user" => 'P',
                "active" => 1,
                "id_occupation" => 1
            ],
            [
                "email" => $faker->email,
                "cpf" => $faker->randomNumber($nbDigits = NULL),
                "name" => $faker->name,
                "lastname" => $faker->name,
                "password" => $faker->password,
                "type_user" => 'P',
                "active" => 1,
                "id_occupation" => 1
             ]
        ];
        $this->insert('tb_employed', $rows);
    }
}
