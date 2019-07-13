<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       //$this->call(UsersTableSeeder::class);
       //this->call(ProductCategoryTableSeeder::class);
       //$this->call(ProductCompanyTableSeeder::class);
       // $this->call(ProductTableSeeder::class);
       $this->call(AdminTableSeeder::class);
       // $this->call(SectionTableSeeder::class);
       // $this->call(RoleTableSeeder::class);
    }
}
