<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert(
            ['name' => 'rahimi',
            'email' => 'dmfx.ir@gmail.com',
            'number' => '09916352600',
            'url' => 'dmfx.ir',
            'is_admin' => '1',
            'password' => Hash::make('21212121'),
            'created_at' => now()
            ]);
        DB::table('users')->insert(
            ['name' => 'mehrab',
            'email' => 'a@a.com',
            'number' => '44444444444',
            'url' => 'dmfx.ir',
            'is_admin' => '0',
            'password' => Hash::make('123456'),
            'created_at' => now()
            ]);
    }
}
