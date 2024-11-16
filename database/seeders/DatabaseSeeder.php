<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleTableSeeder::class);

        $user = User::create([
            'name' => 'Administrador_1',
            'email' => 'rojas_di_21@hotmail.com',
            'password' => Hash::make('12345678'),
        ]);

        $user->roles()->attach(Role::where('id', 1)->first());

        $user->save();
    }
}
