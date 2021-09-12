<?php

use App\User;
use Illuminate\Database\Seeder;


class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin Perpus',
            'email' => 'admin@perpus.test',
            'password' => bcrypt('qwerty123'),
            'email_verified_at' => now(),
        ]);

        $user->assignRole('admin');

        $user2 = User::create([
            'name' => 'Muhamamd Meijohn',
            'email' => 'meijohn@perpus.test',
            'password' => bcrypt('qwerty123'),
            'email_verified_at' => now(),
        ]);

        $user2->assignRole('user');
    }
}
