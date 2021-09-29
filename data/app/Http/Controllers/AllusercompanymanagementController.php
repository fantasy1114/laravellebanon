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

  public function companymanagementcreate(Request $request)
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
    $imageName = "default.png";
    if ($request->file('account-upload')) {
      $imagePath = $request->file('account-upload');
      $imageName = $imagePath->getClientOriginalName();
      $imagePath->move(public_path('uploads/company/'), $imageName);
    }
    if($ischecking == 0){
      $Companies = new Companies;
      $Companies->companyname = request('companyname');
      $Companies->status = request('status');
      $Companies->sellmethod = request('sellmethod');
      $Companies->exchange = request('exchange');
      $Companies->delivery = request('delivery');
      $Companies->logo = './uploads/company/'.$imageName;
      $Companies->can = request('can');
      $Companies->save();
      return response()->json(['success'=>true]);
    }
    return response()->json(['success'=>false]);
  }
  public function companymanagementdelete($id, $company)
  {
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
        return response()->json(['success'=>true]);
      }
      else{
        DB::table('companies')->where('id', $id)->update([
          'status' => 'InActive'
        ]);
        return response()->json(['success'=>true]);
      }
    }
    else{
      $allcompanys = DB::table('companies')->where('id', 'not like', $id)->get();
      $ischecking = 0;
     
      foreach ($allcompanys as $company) {
        $companyname = $company->companyname;
        // print_r($companyname);
        if (request('ucompanyname') == $companyname){
          $ischecking = 1;
        }
      }
      // print_r($ischecking);
      // exit;
      $validatedData = $request->validate([
        'ucompanyname' => 'required',
        'ustatus' => 'required',
        'usellmethod' => 'required',
        'uexchange' => 'required',
        'udelivery' => 'required',
      ]);
      if($ischecking == 0){
        if ($request->file('uaccount-upload')) {
          $imagePath = $request->file('uaccount-upload');
          $imageName = $imagePath->getClientOriginalName();
          $imagePath->move(public_path('uploads/company/'), $imageName);
  
          DB::table('companies')->where('id', $id)->update([
              'companyname' => $validatedData['ucompanyname'],
              'status' => $validatedData['ustatus'],
              'sellmethod' => $validatedData['usellmethod'],
              'exchange' => $validatedData['uexchange'],
              'delivery' => $validatedData['udelivery'],
              'logo' => './uploads/company/'.$imageName,
              'can' => request('ucan')
          ]);
          return response()->json(['success'=>true]);
        }
        else{
          DB::table('companies')->where('id', $id)->update([
            'companyname' => $validatedData['ucompanyname'],
            'status' => $validatedData['ustatus'],
            'sellmethod' => $validatedData['usellmethod'],
            'exchange' => $validatedData['uexchange'],
            'delivery' => $validatedData['udelivery'],
            'can' => request('ucan')
          ]);
          return response()->json(['success'=>true]);
        }
      }
      return response()->json(['success'=>false]);
    }
    
  }
}
