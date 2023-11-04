<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::Factory(10)->create();
        User::create([
            'name'=> 'rafi',
            'email'=>'rafi@gmail.com',
            'email_verified_at'=> now(),
            'password'=> Hash::make('123456'),
        ]);
    }
}
