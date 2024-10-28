<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         [
             'name' => 'mohon',
             'email' => 'mohon@gmail.com',
             'password' => Hash::make('1234'),
         ];
         User::truncate();
    }
}
