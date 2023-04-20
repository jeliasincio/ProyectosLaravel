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
     */
    public function run(): void
    {
        User::create([
            'full_name' => 'Edwin Elias Incio',
            'email' => 'ing.eliasincio123@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'full_name' => 'Milton Elias Incio',
            'email' => 'ing.eliasincio@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::factory(10)->create();
    }
}
