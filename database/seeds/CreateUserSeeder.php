<?php

  

use Illuminate\Database\Seeder;

use App\User;

   

class CreateUserSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        $user = [

            [

               'name'=>'Arya Ramadhan',

               'email'=>'arya@uas.com',

               'is_admin'=>'1',

               'password'=> bcrypt('123456'),

            ],
        ];

  

        foreach ($user as $key => $value) {

            User::create($value);

        }

    }

}