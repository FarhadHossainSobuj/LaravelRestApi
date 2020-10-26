<?php

use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'product_id'=>1,
            'customer'=>'Farhad Hossain',
            'review'=>'Reviews 1',
            'star'=>4
        ]);
        DB::table('reviews')->insert([
            'product_id'=>1,
            'customer'=>'Sobuj Hossain',
            'review'=>'Reviews 2',
            'star'=>5
        ]);
        DB::table('reviews')->insert([
            'product_id'=>2,
            'customer'=>'Farhad Hossain',
            'review'=>'Reviews 1',
            'star'=>4
        ]);
        DB::table('reviews')->insert([
            'product_id'=>2,
            'customer'=>'Sobuj Hossain',
            'review'=>'Reviews 2',
            'star'=>5
        ]);
    }
}
