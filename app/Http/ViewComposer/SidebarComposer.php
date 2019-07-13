<?php

namespace App\Http\ViewComposer;

use App\Models\Section;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class SidebarComposer
{
	protected $sidebar;
	function __construct()
	{
		$this->sidebar = [];
		if(!empty(Auth::user()))
		{
			// $user_permission = unserialize(Auth::user()->permissions);
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
			// dd($permissions);
			$user = serialize($permissions);
			$user_permission =  unserialize($user);
			// dump($user_permission);
			$sections  = Section::where('active',1)->orderBy('sequence')->get();
			
			foreach ($sections as $section) {
				$side = [];
				$side['id'] = $section->id;
				$side['name'] = $section->name;
				$side['icon'] = $section->icon;
				// dd($section);
				foreach ($section->roles as $role) {
					if(array_key_exists($role->id, $user_permission) && !empty($user_permission[$role->id])) {
						$side['roles'][] = [ 'name' => $role->name ];
					}
				}
				$this->sidebar[] = $side;
			}
		}
	}

	public function compose(View $view) {
		$data = [];
		// dd($this->sidebar);
		$data['sidebars'] = $this->sidebar;
		return $view->with($data);
	}
}