<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "arash";
        $user->family = "rahimi";
        $user->user_name = "rahimi";
        $user->email = "arashrahimi46@gmail.com";
        $user->phone_number = "arashrahimi46@gmail.com";
        $user->role = 1;
        $user->password = bcrypt("admin");

        $user->save();

    }
}
