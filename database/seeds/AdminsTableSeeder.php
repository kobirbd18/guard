<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insertOrIgnore([
            'name' => 'Mr.Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
