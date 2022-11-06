<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $user = User::create([
            'name' => 'User',
            'email' => 'admin@yahoo.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'), // password
            'remember_token' => null,
        ]);
    }
}
