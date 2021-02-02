<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Carbon;

class UsersSeeder extends Seeder
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
                'name'  => 'Admin',
                'email'  => 'admin@mail.com',
                'password'  => password_hash('admin', PASSWORD_BCRYPT),
                'is_admin'  => true,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            
            [
                'name'  => 'User',
                'email'  => 'user@mail.com',
                'password'  => password_hash('user', PASSWORD_BCRYPT),
                'is_admin'  => false,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
        ]);
    }
}
