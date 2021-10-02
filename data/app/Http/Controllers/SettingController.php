<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;

class SettingController extends Controller
{
  // User List Page
  public function index()
  {
    $users = DB::table('users')->get();
    
    return view('/setting', ['users' => $users]);
  }

  public function settingupdate(Request $request, $id)
  {
    
    $validatedData = $request->validate([
        'username' => 'required',
        'email' => 'required',
    ]);
    if ($request->file('uaccount-upload')) {
        $imagePath = $request->file('uaccount-upload');
        $imageName = $imagePath->getClientOriginalName();
        $imagePath->move(public_path('uploads/users/'), $imageName);
        DB::table('users')->where('id', $id)->update([
            'name' => $validatedData['username'],
            'email' => $validatedData['email'],
            'profile_photo_path' => './uploads/users/'.$imageName,
        ]);
        return response()->json(['success'=>true]);
      }
      else{
        DB::table('users')->where('id', $id)->update([
          'name' => $validatedData['username'],
          'email' => $validatedData['email'],
        ]);
        return response()->json(['success'=>true]);
      }
  }
  public function settingpasswordupdate(Request $request, $id)
  {
    $users = DB::table('users')->where('id', $id)->get();
    $password = '';
    
    foreach($users as $user){
      $password = $user->password;
    }
    
    $validatedData = $request->validate([
      'password' => 'required',
      'new-password' => 'required',
    ]);
    
    if(Hash::check($validatedData['password'], $password) == 1){
        DB::table('users')->where('id', $id)->update([
            'password' => Hash::make($validatedData['new-password'])
        ]);
        return response()->json(['success'=>true]);
    }
    else{
        return response()->json(['success'=>false]);
    }
  }
}
