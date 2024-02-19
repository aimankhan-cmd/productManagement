<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    
    public function getUsers(){
        $page_title = 'User Management';
        $users = User::get();
        return view('users.usersList',compact('users','page_title'));
    }
    public function addUsers(Request $request){
        $page_title='Add User';    
        return view('users.userAdd',compact('page_title'));
        
    }
    public function editUsers(Request $request){
        $page_title='Edit User';
        $users = User::where('id',$request->id)->first();
        return view('users.UserEdit',compact('page_title','users'));
        
    }
    
    public function submitUser(Request $request){
        $request->validate([
            'password' => 'required|confirmed|min:5',
        ]);
        // exit;
        $page_title='Users List';
        $user = new User;
       
        $user->name = $request->name;
        $user->email = $request->email; 
        $user->password =   Hash::make($request->password); 
        
        $result = $user->save();
        if($result){
            return back()->with('success','User added successfully');
        }else{
            return back()->with('error','Something went wrong ! ');
        }
    }
    
    public function updateUsers(Request $request,$id){
        $page_title='User List';
        $user = User::where('id',$id)->first();
      
        $user->name = $request->name;
        $user->email = $request->email; 
         
        $result = $user->save();
        if($result){
            return back()->with('success','Updated Successfully');
        }else{
            return back()->with('error','Something Went Wrong ! ');
        }
      
        
    }
    
    public function deleteUsers(Request $request,$id){
        $result = User::where('id',$id)->delete();
        if($result){
            return back()->with('info','User Deleted Successfully');
        }else{
            return back()->with('error','Something Went Wrong ! ');
        }
    }
}
