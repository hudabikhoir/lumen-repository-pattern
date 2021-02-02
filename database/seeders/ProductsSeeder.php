<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'title'  => 'HP Esia Hidayah',
                'photo'  => '',
                'detail'  => 'detail HP nya',
                'category_id'  => 1,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],

            [
                'title'  => 'Wedang Jahe kang mus',
                'photo'  => '',
                'detail'  => 'detail makanan nya',
                'category_id'  => 2,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
        ]);
    }
}
