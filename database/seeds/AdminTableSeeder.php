<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions = [
                1 => "access,download" , 
                2 => "access,add,edit,view,delete", 
                3 => "access,add,edit,view,delete", 
                4 => "access,add,edit,view,delete", 
                5 => "access,add,edit,view,delete", 
                6 => "access,add,edit,view,delete", 
                7 => "access,add,edit,view,delete",
                8 => "access,add,edit,view,delete",
                9 => "access,add,edit,view,delete",
           ];

        // $serialized = serialize($permissions);
        // dd($serialized);
        $admins = [
        	[
        		'name' => 'zankhna',
        		'email' => 'zrdhamecha@gmail.com',
        		'password' => Hash::make('12345678'),
                'permissions' => serialize($permissions),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
        	],
        ];

        DB::table('admins')->insert($admins);
    }
}
