<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'HD Camera',
            'detail'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the  standard dummy text ever since',
            'price'=>210,
            'stock'=>12,
            'discount'=>10
        ]);
        DB::table('products')->insert([
            'name'=>'HD TV',
            'detail'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the  standard dummy text ever since',
            'price'=>120,
            'stock'=>12,
            'discount'=>12
        ]);
        DB::table('products')->insert([
            'name'=>'Smart Phone',
            'detail'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the  standard dummy text ever since',
            'price'=>410,
            'stock'=>12,
            'discount'=>10
        ]);
    }
}
