<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;
use App\Models\Logs;
use Illuminate\Support\Facades\DB;

class AllusercompanymanagementController extends Controller
{
  // User List Page
  public function index()
  {
    $companys = DB::table('companies')->get();
    return view('/companymanagement', ['companys' => $companys]);
  }

  public function companymanagementcreate()
  {
    $companys = DB::table('companies')->get();
    // $logs = DB::table('logs')->get();
    $ischecking = 0;
    foreach ($companys as $company) {
      $companyname = $company->companyname;
      if (request('companyname') == $companyname){
        $ischecking = 1;
      }
    }
    if($ischecking == 0){
      $Companies = new Companies;
      $Companies->companyname = request('companyname');
      $Companies->status = request('status');
      $Companies->sellmethod = request('sellmethod');
      $Companies->exchange = request('exchange');
      $Companies->delivery = request('delivery');
      $Companies->save();
      // $Logs = new Logs;
      // $Logs->username = request('usernamesave');
      // $Logs->tablename = 'Buddy';
      // $Logs->crudevent = 'add';
      // $Logs->description = request('buddy_name');
      // $Logs->save();
    
      return response()->json(['success'=>true]);
    }
    return response()->json(['success'=>false]);
  }
  public function companymanagementdelete($id, $company)
  {
    // $description = DB::table('companies')->where('id', $id)->value('companyname');
    // $Logs = new Logs;
    // $Logs->username = $name;
    // $Logs->tablename = 'Buddy';
    // $Logs->crudevent = 'delete';
    // $Logs->description = $description;
    // $Logs->save();
    $categorys = DB::table('categories')->get();
    $ischecking = 0;
    foreach($categorys as $category){
      $companyname = $category->companyname;
      if ($company == $companyname){
        $ischecking = 1;
      }
    }
    if ($ischecking == 0){
      DB::table('companies')->where('id', $id)->delete();
      return response()->json(['success'=>true]);
    }
    else{
      return response()->json(['success'=>false]);
    }
    // return response()->json(['success'=>true]);
    // $userlists = DB::table('users')->get();
    // return view('/userlist', ['userlists' => $userlists]);
    
  }
  public function companymanagementupdate(Request $request, $id)
  {
    $companys = DB::table('companies')->where('id', $id)->get();
    
    $statuschange = request('status');
    if($statuschange == 'change'){
      foreach($companys as $company){
        $status = $company -> status;
      }
      if($status == 'InActive'){
        DB::table('companies')->where('id', $id)->update([
          'status' => 'Active'
        ]);
      }
      else{
        DB::table('companies')->where('id', $id)->update([
          'status' => 'InActive'
        ]);
      }
    }
    else{
      $validatedData = $request->validate([
        'companyname' => 'required',
        'status' => 'required',
        'sellmethod' => 'required',
        'exchange' => 'required',
        'delivery' => 'required',
      ]);
      
      DB::table('companies')->where('id', $id)->update([
          'companyname' => $validatedData['companyname'],
          'status' => $validatedData['status'],
          'sellmethod' => $validatedData['sellmethod'],
          'exchange' => $validatedData['exchange'],
          'delivery' => $validatedData['delivery'],
      ]);
    }
    

    // $Logs = new Logs;
    // $Logs->username = request('usernamesave');
    // $Logs->tablename = 'Buddy';
    // $Logs->crudevent = 'update';
    // $Logs->description = request('buddyname');
    // $Logs->save();

    return response()->json(['success'=>true]);
  }
}
