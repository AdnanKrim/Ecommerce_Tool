<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=> 'Oppo Note 3',
            'price'=> '75$',
            'description'=>'4GB RAM With multiple Features',
            'catagory' => 'SmartPhone',
            'gallery' => 'https://www.shutterstock.com/image-vector/mobile-icon-424667419'
            ],
            [
                'name'=> 'Samsung Note 10',
                'price'=> '500$',
                'description'=>'6GB RAM With multiple Features',
                'catagory' => 'SmartPhone',
                'gallery' => 'https://www.shutterstock.com/image-vector/mobile-icon-424667419'
            ],
                [
                    'name'=> 'Lg Note x',
                    'price'=> '300$',
                    'description'=>'8GB RAM With multiple Features',
                    'catagory' => 'SmartPhone',
                    'gallery' =>' https://www.shutterstock.com/image-vector/mobile-icon-424667419'
                ]
          ]);
    }
}
