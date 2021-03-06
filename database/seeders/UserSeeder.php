<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fernando',
            'email' => 'fernandoallgames3@outlook.com',
            'cpf' => '07598354030',
            'email_code' => '777777',
            'is_master' => true,
           ]);
        User::create([
            'name' => 'Nadir',
            'email' => 'fernandoallgames4@outlook.com',
            'cpf' => '04774409081',
            'email_code' => '777777',
            'is_master' => false,
           ]);
    }
}
