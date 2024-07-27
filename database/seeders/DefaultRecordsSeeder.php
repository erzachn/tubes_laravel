<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DefaultRecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@perpus',
                'password' => '12345678',
                'is_admin' => true
            ],
            [
                'name' => 'Adam',
                'email' => 'adamr@zigatur',
                'password' => '24112003',
                'is_admin' => true
            ],
        ]);
    }
}
