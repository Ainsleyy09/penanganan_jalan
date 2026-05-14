<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin IPW',
            'email' => 'ipwbappedasumsel@gmail.com',
            'password' => bcrypt('ipw001'),
            'role' => 'admin',
            'user_photo' => 'admin.jpg',
        ]);

        User::create([
            'name' => 'Siti Aisyah',
            'email' => 'inur44777@gmail.com',
            'password' => bcrypt('user001'),
            'role' => 'user',
            'user_photo' => 'user.jpg',
        ]);
    }
}
