<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Nanda Gunawan',
            'email' => 'gugun@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
