<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'prenom' => 'Sama',
                'nom' => 'Keyite',
                'email' => 'admin@samakeyite.com',
                'password' => Hash::make('password'),
                'role_id' => 1,
                'telephone' => '771234567',
                'avatar' => null,
                'status' => true,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'prenom' => 'Khadija',
                'nom' => 'Gning',
                'email' => 'dikhagning97@gmail.com',
                'password' => Hash::make('password'),
                'role_id' => 1,
                'telephone' => '781956513',
                'avatar' => null,
                'status' => true,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'prenom' => 'Thiaka',
                'nom' => 'Badji',
                'email' => 'thiaka.dev@gmail.com',
                'password' => Hash::make('password'),
                'role_id' => 2,
                'telephone' => '777739260',
                'avatar' => null,
                'status' => true,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
