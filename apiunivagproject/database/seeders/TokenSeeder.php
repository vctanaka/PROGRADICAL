<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class TokenSeeder extends Seeder
{
    public function run()
    {
        // Cria um usuário ou encontra um existente
        $user = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            ['name' => 'admin', 'password' => bcrypt('admin')]
        );

        // Cria um token e o imprime no console
        $token = $user->createToken('TokenParaTeste')->plainTextToken;
        echo "Token: $token\n";
    }
}