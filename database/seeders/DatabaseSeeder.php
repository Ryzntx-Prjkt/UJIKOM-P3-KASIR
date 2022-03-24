<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        $user = [
            [
                'name' => 'Atha Nabil',
                'username' => 'rynztx',
                'email' => 'thalalatha13@gmail.com',
                'password' => Hash::make('coolhand021'),
                'no_telp' => '08156182739',
                'role' => 'admin'
            ]
        ];

        foreach($user as $item => $value){
            User::create($value);
        }
    }
}
