<?php

namespace Database\Seeders;

use App\Models\Role;
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
        $adminRole = Role::where('name', 'admin')->first();
        $conseillerRole = Role::where('name', 'conseiller')->first();


        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@localhost.com',
            'password' => Hash::make('password'),
            // 'role_id' => $adminRole->id,
        ]);
        $admin->roles()->attach($adminRole);

        $conseiller = User::factory()->create([
            'name' => 'Fatma Torki',
            'email' => 'conseiller@localhost.com',
            'password' => Hash::make('password'),

            'phone' => '1234567890',
            'address' => '3 Avenue de Jean Jaures, Marsa, Tunis',
            'field' => 'Education',
            'company_name' => 'Ecole Tunisienne d\'Informatique',
            'position' => 'Enseignante',
            // 'role_id' => $conseillerRole->id,
        ]);
        $conseiller->roles()->attach($conseillerRole);

        User::factory(2)->create([
            'field' => 'Education',
        ])->each(function ($conseiller) use ($conseillerRole) {
            $conseiller->roles()->attach($conseillerRole);
        });
        User::factory(3)->create([
            'field' => 'Relations',
        ])->each(function ($conseiller) use ($conseillerRole) {
            $conseiller->roles()->attach($conseillerRole);
        });
        User::factory(3)->create([
            'field' => 'Santé',
        ])->each(function ($conseiller) use ($conseillerRole) {
            $conseiller->roles()->attach($conseillerRole);
        });

        // $admin->conseillers()->attach($conseiller);

        User::factory(10)->create();
    }
}
