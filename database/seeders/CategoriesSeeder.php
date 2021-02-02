<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([

            [
                'id' => 1,
                'name'  => 'Elektronik',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],

            [
                'id' => 2,
                'name'  => 'Makanan',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],

            [
                'id' => 3,
                'name'  => 'Pakaian',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],

        ]);
    }
}
