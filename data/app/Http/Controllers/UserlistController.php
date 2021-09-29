<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Hash;
use Session;
use App\Models\Logs;

class UserlistController extends Controller
{
  // User List Page
  public function userlist()
  {
    $userlists = DB::table('users')->get();
    // dd($userlists);exit();
    return view('/userlist', ['userlists' => $userlists]);
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
    if($userchecking == 0){
      $User = new User;
      $User->name = request('user_fullname');
      $User->email = request('user_email');
      $User->profile_photo_path = './uploads/users/'.$imageName;
      $User->role = request('user_role');
      $User->password = Hash::make(request('user_password'));
      $User->status = request('status');
      $User->startdata = request('startdata');
      $User->enddata = request('enddata');
      $User->save();
      // $Logs = new Logs;
      // $Logs->username = request('usernamesave');
      // $Logs->tablename = 'Userlist';
      // $Logs->crudevent = 'add';
      // $Logs->description = request('user_fullname');
      // $Logs->save();
      return response()->json(['success'=>true]);
    }
    
    return response()->json(['success'=>false]);
  }
  public function userdelete($id)
  {
    $description = DB::table('users')->where('id', $id)->value('name');
    // var_dump($description);
    // $Logs = new Logs;
    // $Logs->username = $name;
    // $Logs->tablename = 'userlist';
    // $Logs->crudevent = 'delete';
    // $Logs->description = $description;
    // $Logs->save();
    DB::table('users')->where('id', $id)->delete();
    return response()->json(['success'=>true]);
  }
  public function userupdate(Request $request, $id)
  {
    // $Logs = new Logs;
    // $Logs->username = request('usernamesave');
    // $Logs->tablename = 'userlist';
    // $Logs->crudevent = 'update';
    // $Logs->description = request('name');
    // $Logs->save();
    
    $validatedData = $request->validate([
        'uUsername' => 'required',
        'uUseremail' => 'required',
        'uUserrole' => 'required',
        'uUserstatus' => 'required',
        'uUserstartdata' => 'required',
        'uUserenddata' => 'required'
    ]);
    if ($request->file('uaccount-upload')) {
      $imagePath = $request->file('uaccount-upload');
      $imageName = $imagePath->getClientOriginalName();
      $imagePath->move(public_path('uploads/users/'), $imageName);
      DB::table('users')->where('id', $id)->update([
          'name' => $validatedData['uUsername'],
          'email' => $validatedData['uUseremail'],
          'profile_photo_path' => './uploads/users/'.$imageName,
          'role' => $validatedData['uUserrole'],
          'status' => $validatedData['uUserstatus'],
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
        'status' => $validatedData['uUserstatus'],
        'startdata' => $validatedData['uUserstartdata'],
        'enddata' => $validatedData['uUserenddata'],
      ]);
      return response()->json(['success'=>true]);
    }
  }
}
