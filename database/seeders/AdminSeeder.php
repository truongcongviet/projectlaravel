<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $admin = DB::table('admins')->where('email', 'admin@gmail.com')->first();

            DB::table('admins')->insert([
                'name' => "admin",
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
            ]);

    }

  
}
