<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\CountryStateCityTableSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
        // \App\Models\Admin::factory(5)->create();

        $this->call([
            CountryStateCityTableSeeder::class,
        ]);
        
        DB::table('admins')->insert([
            //Admin
            [
                'name' => 'Ngen It Super Admin',
                'username' => 'NGen-Super-Admin',
                'email' => 'ngenit@gmail.com',
                'employee_id' => '100',
                'password' => Hash::make('ngenitadmin'),
                'role' => json_encode('admin'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),

            ],
            
            [
                'name' => 'Khandker Shahed',
                'username' => 'shahed141123',
                'email' => 'khandkershahed23@gmail.com',
                'employee_id' => '106',
                'password' => Hash::make('password'),
                'role' => json_encode('admin'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),

            ],

        ]);
    }
}
