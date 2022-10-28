<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'João da silva',
            'email' => 'joao_da_silva@email.com',
            'password' => bcrypt('secret')
        ]);
    }
}
