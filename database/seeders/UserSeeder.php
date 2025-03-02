<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'role' => 'admin',
                'name' => 'Admin',
                'username' => '1234567',
                'password' => '$2y$12$.wO3NsZsmEF38z9eBsY/EOl4tkoVdw7UGn2gsGs4klUH9etmERhpq',
                'remember_token' => 'ZTaWnKGkGmsqcgHBzMpzfToSY7gqZB0K97xagczCSQrwejIiDeeflCrUqGU9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
