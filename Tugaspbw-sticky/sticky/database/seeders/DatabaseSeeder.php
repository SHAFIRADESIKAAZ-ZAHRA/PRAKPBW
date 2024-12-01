<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'SHAFIRA DESIKA AZ-ZAHRA',
            'email'=> 'shafiraa66@gmail.com',
            'password'=> bcrypt('shafira44'),
            'email_vrified_at' => now(),
        ]);
    }
}
