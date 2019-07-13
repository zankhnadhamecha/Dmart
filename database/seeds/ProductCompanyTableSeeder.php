<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductCompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
        	[
        		'product_category_id' => 'Grocery',
        		'name' => 'Grains Market',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_category_id' => 'Grocery',
        		'name' => 'Sooraj',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_category_id' => 'Daily Essentials',
        		'name' => 'Parle',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_category_id' => 'Daily Essentials',
        		'name' => 'Mongenis',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_category_id' => 'Dmart Brands',
        		'name' => 'Dmart',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_category_id' => 'Footware',
        		'name' => 'Paragon',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_category_id' => 'Footware',
        		'name' => 'Bata',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_category_id' => 'Home Appliances',
        		'name' => 'Boss',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_category_id' => 'Home Appliances',
        		'name' => 'Sanddy',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_category_id' => 'Ladies Garments',
        		'name' => 'Adidas',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_category_id' => 'Ladies Garments',
        		'name' => 'Pantaloons',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_category_id' => 'Dairy and Frozen',
        		'name' => 'Amul',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_category_id' => 'Dairy and Frozen',
        		'name' => 'Mahi',
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	]
        ];

        foreach($companies as $key => $company)
        {
            $companies[$key]['product_category_id'] = DB::table('product_categories')->where('name',$company['product_category_id'])->value('id');
        }
        
        DB::table('product_companies')->insert($companies);
    }
}
