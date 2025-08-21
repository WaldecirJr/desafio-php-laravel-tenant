<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Tenant;
use App\Models\User;
use App\Models\Transaction;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ======= Tenants =======
        $tenant1 = Tenant::create([
            'id' => 1,
            'name' => 'Tenant 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $tenant2 = Tenant::create([
            'id' => 2,
            'name' => 'Tenant 2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $tenant3 = Tenant::create([
            'id' => 3,
            'name' => 'Tenant 3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // ======= Users =======
        $user1 = User::create([
            'name' => 'Usuário Tenant 1',
            'email' => 'user1@tenant.com',
            'password' => Hash::make('senha123'),
            'tenant_id' => $tenant1->id,
        ]);

        $user2 = User::create([
            'name' => 'Usuário Tenant 2',
            'email' => 'user2@tenant.com',
            'password' => Hash::make('senha123'),
            'tenant_id' => $tenant2->id,
        ]);

        $user3 = User::create([
            'name' => 'Usuário Tenant 3',
            'email' => 'user3@tenant.com',
            'password' => Hash::make('senha123'),
            'tenant_id' => $tenant3->id,
        ]);

        // ======= Transactions =======
        //Transaction::create([
            //'user_id' => $user1->id,
            //'tenant_id' => $user1->tenant_id,
            //'valor' => 100.50,
            //'cpf' => '12345678901',
            //'documento' => null, // opcional
            //'status' => 'Em processamento',
        //]);

        //Transaction::create([
            //'user_id' => $user2->id,
            //'tenant_id' => $user2->tenant_id,
            //'valor' => 50.75,
            //'cpf' => '98765432100',
            //'documento' => null, // opcional
            //'status' => 'Aprovada',
        //]);

        //Transaction::create([
            //'user_id' => $user3->id,
            //'tenant_id' => $user3->tenant_id,
            //'valor' => 200.00,
            //'cpf' => '11122233344',
            //'documento' => null, // opcional
            //'status' => 'Negada',
        //]);
    }
}