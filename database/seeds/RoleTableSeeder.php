<?php

use App\Models\Section;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $roles = [
        	[
        		'section_id' => 'Dashboard', 
        		'name' => 'Dashboard',
        		'route' => 'admin.dashboard.index',
        		'icon' => 'fa fa-fw fa-user-circle',
        		'sequence' => 1,
        		'active' => 1,
        		'permission' => 'access,download',
        		'created_at' =>Carbon::now()->toDateTimeString(),
        		'updated_at' =>Carbon::now()->toDateTimeString(),
        	],
        	[
        		'section_id' => 'Manage Product Category', 
        		'name' => 'Manage Product Category',
        		'route' => 'admin.category.index',
        		'icon' => 'fa fa-fw fa-user-circle',
        		'sequence' => 1,
        		'active' => 1,
        		'permission' => 'access,add,edit,view,delete',
        		'created_at' =>Carbon::now()->toDateTimeString(),
        		'updated_at' =>Carbon::now()->toDateTimeString(),
        	],
        	[
        		'section_id' => 'Manage Product Company', 
        		'name' => 'Manage Product Company',
        		'route' => 'admin.company.index',
        		'icon' => 'fa fa-fw fa-user-circle',
        		'sequence' => 1,
        		'active' => 1,
        		'permission' => 'access,add,edit,view,delete',
        		'created_at' =>Carbon::now()->toDateTimeString(),
        		'updated_at' =>Carbon::now()->toDateTimeString(),
        	],
        	[
        		'section_id' => 'Manage Product', 
        		'name' => 'Company Wise',
        		'route' => 'admin.productCompany.index',
        		'icon' => 'fa fa-fw fa-user-circle',
        		'sequence' => 1,
        		'active' => 1,
        		'permission' => 'access,add,edit,view,delete',
        		'created_at' =>Carbon::now()->toDateTimeString(),
        		'updated_at' =>Carbon::now()->toDateTimeString(),
        	],
        	[
        		'section_id' => 'Manage Product', 
        		'name' => 'Category Wise',
        		'route' => 'admin.productCategory.index',
        		'icon' => 'fa fa-fw fa-user-circle',
        		'sequence' => 2,
        		'active' => 1,
        		'permission' => 'access,add,edit,view,delete',
        		'created_at' =>Carbon::now()->toDateTimeString(),
        		'updated_at' =>Carbon::now()->toDateTimeString(),
        	],
        	[
        		'section_id' => 'Manage Users', 
        		'name' => 'Manage Users',
        		'route' => 'admin.user.index',
        		'icon' => 'fa fa-fw fa-user-circle',
        		'sequence' => 1,
        		'active' => 1,
        		'permission' => 'access,add,edit,view,delete',
        		'created_at' =>Carbon::now()->toDateTimeString(),
        		'updated_at' =>Carbon::now()->toDateTimeString(),
        	],
        	[
        		'section_id' => 'Manage Bill', 
        		'name' => 'User Bill',
        		'route' => 'admin.userbill.index',
        		'icon' => 'fa fa-fw fa-user-circle',
        		'sequence' => 1,
        		'active' => 1,
        		'permission' => 'access,add,edit,view,delete',
        		'created_at' =>Carbon::now()->toDateTimeString(),
        		'updated_at' =>Carbon::now()->toDateTimeString(),
        	],
        	[
        		'section_id' => 'Manage Bill', 
        		'name' => 'GoDown Bill',
        		'route' => 'admin.godownbill.index',
        		'icon' => 'fa fa-fw fa-user-circle',
        		'sequence' => 2,
        		'active' => 1,
        		'permission' => 'access,add,edit,view,delete',
        		'created_at' =>Carbon::now()->toDateTimeString(),
        		'updated_at' =>Carbon::now()->toDateTimeString(),
        	],
            [
                'section_id' => 'Manage Return', 
                'name' => 'Manage Return',
                'route' => 'admin.return.index',
                'icon' => 'fa fa-fw fa-user-circle',
                'sequence' => 1,
                'active' => 1,
                'permission' => 'access,add,edit,view,delete',
                'created_at' =>Carbon::now()->toDateTimeString(),
                'updated_at' =>Carbon::now()->toDateTimeString(),
            ],
        ];

        // dd($roles);
        foreach($roles as $key=>$role)
        {
        	// dd(Section::select('id')->where('name',$role['section_id'])->get());
            // dump(Section::select('id')->where('name',$role['section_id'])->get()->toArray()[0]['id']);
        	$roles[$key]['section_id'] = Section::select('id')->where('name',$role['section_id'])->get()->toArray()[0]['id'];
            //dd()
        }
        // dump($roles);

        DB::table('roles')->insert($roles);
    }
}
