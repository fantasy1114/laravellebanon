<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Error;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserlistController extends Controller
{
  // User List Page
  public function userlist()
  {   
    if(Auth::user()->rolefunction->users_list == 'Only his'){
      $userlists = DB::table('users')->where('id', Auth::user()->id)->get();
      return view('/userlist', ['userlists' => $userlists]);
    }
    else if(Auth::user()->rolefunction->users_list == 'All'){
      $userlists = DB::table('users')->get();
      return view('/userlist', ['userlists' => $userlists]);
    }
    else{
      $userlists = DB::table('users')->where('id', 99999999)->get();
      return view('/userlist', ['userlists' => $userlists]);
    }
    
  }
  
  public function usercreate(Request $request){
    $userlists = DB::table('users')->get();
    // print_r($userlists);
    $userchecking = 0;
    foreach ($userlists as $userlist) {
      $email = $userlist->email;
      if (request('user_email') == $email){
        $userchecking = 1;
      }
    }
    $imageName = 'default.png';
    if ($request->file('account-upload')) {
      $imagePath = $request->file('account-upload');
      $imageName = $imagePath->getClientOriginalName();
      $imagePath->move(public_path('uploads/users'), $imageName);
    }
    $roles_data_id = 3;
    if(request('user_role') == 'superadmin'){
      $roles_data_id = 1;
    }
    else if(request('user_role') == 'admin'){
      $roles_data_id = 2;
    }
    else{
      $roles_data_id = 3;
    }
    if($userchecking == 0){
      $User = new User;
      $User->name = request('user_fullname');
      $User->email = request('user_email');
      $User->profile_photo_path = './uploads/users/'.$imageName;
      $User->role = request('user_role');
      $User->roles_id = $roles_data_id;
      $User->password = Hash::make(request('user_password'));
      $User->status = request('status');
      $User->startdata = request('startdata');
      $User->enddata = request('enddata');
      $User->save();
      return response()->json(['success'=>true]);
    }
    
    return response()->json(['success'=>false]);
  }
  public function userdelete($id)
  {
    // $description = DB::table('users')->where('id', $id)->value('name');
 
    try{
      DB::table('users')->where('id', $id)->delete();
      return response()->json(['success'=>true]);
    }
    catch (\Exception $e) {
      return response()->json(['success'=>false]);
    }    
  }
  public function userupdate(Request $request, $id)
  {
    $validatedData = $request->validate([
        'uUsername' => 'required',
        'uUseremail' => 'required',
        'uUserrole' => 'required',
        'uuser_password' => 'required',
        'uUserstartdata' => 'required',
        'uUserenddata' => 'required'
    ]);
    $roles_data_id = 3;
    if(request('uUserrole') == 'superadmin'){
      $roles_data_id = 1;
    }
    else if(request('uUserrole') == 'admin'){
      $roles_data_id = 2;
    }
    else{
      $roles_data_id = 3;
    }
    if ($request->file('uaccount-upload')) {
      $imagePath = $request->file('uaccount-upload');
      $imageName = $imagePath->getClientOriginalName();
      $imagePath->move(public_path('uploads/users/'), $imageName);
      DB::table('users')->where('id', $id)->update([
          'name' => $validatedData['uUsername'],
          'email' => $validatedData['uUseremail'],
          'profile_photo_path' => './uploads/users/'.$imageName,
          'role' => $validatedData['uUserrole'],
          'roles_id' => $roles_data_id,
          'password' => Hash::make($validatedData['uuser_password']),
          'startdata' => $validatedData['uUserstartdata'],
          'enddata' => $validatedData['uUserenddata'],
      ]);
      return response()->json(['success'=>true]);
    }
    else{
      DB::table('users')->where('id', $id)->update([
        'name' => $validatedData['uUsername'],
        'email' => $validatedData['uUseremail'],
        'role' => $validatedData['uUserrole'],
        'roles_id' => $roles_data_id,
        'password' => Hash::make($validatedData['uuser_password']),
        'startdata' => $validatedData['uUserstartdata'],
        'enddata' => $validatedData['uUserenddata'],
      ]);
      return response()->json(['success'=>true]);
    }
  }
  public function userliststatusupdate(Request $request, $id){
    $itemes = DB::table('users')->where('id', $id)->get();

    $statuschange = request('status');
    if($statuschange == 'change'){
      foreach($itemes as $item){
        $status = $item -> status;
      }
      if($status == ''){
        DB::table('users')->where('id', $id)->update([
          'status' => 'on'
        ]);
        return response()->json(['success'=>true]);
      }
      else{
        DB::table('users')->where('id', $id)->update([
          'status' => ''
        ]);
        return response()->json(['success'=>true]);
      }
    }
  }
}
