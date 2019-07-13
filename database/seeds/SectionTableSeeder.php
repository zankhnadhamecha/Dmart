<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sections = [
        	[
        		'name' => 'Dashboard',
        		'icon' => 'fa fa-fw fa-user-circle',
        		'sequence' => 1,
        		'active' => 1,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'name' => 'Manage Product Category',
        		'icon' => 'fa fa-fw fa-user-circle',
        		'sequence' => 2,
        		'active' => 1,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'name' => 'Manage Product Company',
        		'icon' => 'fa fa-fw fa-user-circle',
        		'sequence' => 3,
        		'active' => 1,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'name' => 'Manage Product',
        		'icon' => 'fa fa-fw fa-user-circle',
        		'sequence' => 4,
        		'active' => 1,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'name' => 'Manage Users',
        		'icon' => 'fa fa1-fw fa-user-circle',
        		'sequence' => 5,
        		'active' => 1,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'name' => 'Manage Bill',
        		'icon' => 'fa fa-fw fa-user-circle',
        		'sequence' => 6,
        		'active' => 1,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        	[
        		'name' => 'Manage Return',
        		'icon' => 'fa fa-fw fa-user-circle',
        		'sequence' => 7,
        		'active' => 1,
        		'created_at' => Carbon::now()->toDateTimeString(),
        		'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        ];

        DB::table('sections')->insert($sections);
    }
}
