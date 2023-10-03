<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::get();

        foreach($users as $user) {
            for($i = 0; $i<rand(3,10); $i++) {
                Post::factory(1)->create(['user_id' => $user->id]);
            }
        }
    }
}
