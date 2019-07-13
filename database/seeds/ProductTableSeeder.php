<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = [
        	[
        		'product_company_id' => 'parle',
        		'name' => 'Biscuit',
        		'price' => 60,
        		'discount' => 10.00,
        		'stock' => 100,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_company_id' => 'parle',
        		'name' => 'Waffer Biscuit',
        		'price' => 60,
        		'discount' => 9.00,
        		'stock' => 50,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_company_id' => 'Mongenis',
        		'name' => 'Cake Roll',
        		'price' => 30,
        		'discount' => 15.00,
        		'stock' => 40,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_company_id' => 'Boss',
        		'name' => 'Blender',
        		'price' => 1200,
        		'discount' => 5.00,
        		'stock' => 5,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_company_id' => 'Sanddy',
        		'name' => 'Mixture',
        		'price' => 2000,
        		'discount' => 20.00,
        		'stock' => 10,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_company_id' => 'Adidas',
        		'name' => 'T-Shirt',
        		'price' => 1000,
        		'discount' => 20.00,
        		'stock' => 90,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_company_id' => 'Amul',
        		'name' => 'Milk',
        		'price' => 40,
        		'discount' => 5.00,
        		'stock' => 200,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_company_id' => 'Amul',
        		'name' => 'Cheeze',
        		'price' => 60,
        		'discount' => 8.00,
        		'stock' => 150,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_company_id' => 'Mahi',
        		'name' => 'Milk',
        		'price' => 35,
        		'discount' => 5.00,
        		'stock' => 30,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'product_company_id' => 'Mahi',
        		'name' => 'Dahi',
        		'price' => 20,
        		'discount' => 2.00,
        		'stock' => 20,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        ];

        foreach ($products as $key => $product) {
        	$products[$key]['product_company_id'] = DB::table('product_companies')->where('name',$product['product_company_id'])->value('id');
        	/*dump(DB::table('product_companies')->where('name',$product['product_company_id'])->value('id'));*/
        }

        DB::table('products')->insert($products);
    }
}
