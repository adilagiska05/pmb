<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // sample admin
        $admin = new \App\Models\User();
        $admin->name = "Admin Project";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt("rahasia");
        $admin->role = "admin";
        $admin->save();

        // sample tamu atau pendatang
        $guest = new \App\Models\User();
        $guest->name = "guest Project";
        $guest->email = "guest@gmail.com";
        $guest->password = bcrypt("rahasia");
        $guest->role = "guest";
        $guest->save();
    }
}
