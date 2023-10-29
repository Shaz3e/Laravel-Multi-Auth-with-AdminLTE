<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();
        
        $users = [
            'name' => 'User One',
            'email' => 'user@email.com',
            'password'=> Hash::make('123456789'),
        ];

        DB::table('users')->insert($users);
    }
}
