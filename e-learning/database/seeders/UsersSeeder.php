<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'E-code',
            'email'=>'dev@agenciaecode.com.br',
            'password'=>bcrypt('Ecode@123'),
        ]);
    }
}
