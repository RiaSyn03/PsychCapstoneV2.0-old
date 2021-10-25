<?php
namespace App\Http\Controllers\Councilour;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;

class ListofStudents extends Controller
{
    public function index(Request $request)
    {

        $user = User::find('id');
        if($user){
            $request->role(['name']);
            if($user  == 'student')
            {
                return view('admin.users.councilour.listofstudent') ->with('users');
               
            }else{
                return redirect()->back()->with('msg', 'invalid request');
                

            }
        // // $admin -> roles() -> attach($adminRole);

        // $users = User::all();

        // $showStudent = $user->roles()->get()->pluck('name');
        

        // // $showStudent = $users->roles()->get(); 

        // // $showStudent = Role::where('name', 'student') -> first();
         
        
    
}
    }
}

