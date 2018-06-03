<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user_type' => 2,
            'name' => 'Luciana',
            'email' => 'lu@gmail.com',
            'cpf' => '096.410.709-08',
            'data_nasc' => '1996-12-12',
            'password' => bcrypt('123'),
        ]);

        User::create([
            'user_type' => 1,
            'name' => 'Jean',
            'email' => 'jean@gmail.com',
            'cpf' => '000.000.000-00',
            'data_nasc' => '1986-09-26',
            'password' => bcrypt('123'),
        ]);
    }
}
