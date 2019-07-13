<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
        	[
        		'name' => 'Grocery',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'name' => 'Daily Essentials',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'name' => 'Home and Personal Care',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'name' => 'Dmart Brands',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'name' => 'Dairy and Frozen',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'name' => 'Fruits and Vegetables',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'name' => 'Footware',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'name' => 'Home Appliances',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'name' => 'Kids Apparel',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'name' => 'Ladies Garments',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'name' => 'Apparel for Men',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        ];

        //DB::table('categories')->insert($categories);
        DB::table('product_categories')->insert($categories);
    }
}
