<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $authorRole = Role::firstOrCreate(['name' => 'author']);

        $users = User::get();

        foreach($users as $user) {
            $rnd =rand(1,3);
            if($rnd == 1)
                $user->roles()->attach($adminRole);
            else if($rnd == 2)
                $user->roles()->attach($authorRole);
            else if($rnd == 3) {
                $user->roles()->attach($authorRole);
                $user->roles()->attach($adminRole);
            }
        }
    }
}
