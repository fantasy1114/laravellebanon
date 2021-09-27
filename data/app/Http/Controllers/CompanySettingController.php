<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;
use Illuminate\Support\Facades\DB;
use App\Models\Logs;

class CompanySettingController extends Controller
{
  // User List Page
  public function index()
  {
    $companies = DB::table('companies')->get();
    return view('/companysetting', ['companies' => $companies]);
  }

  public function companysettingupdate(Request $request, $id)
  {
    
    $companies = DB::table('companies')->get();
   
    // print_r($companychecking);exit();
    $validatedData = $request->validate([
        'sellmethod' => 'required',
        'exchange' => 'required',
        'delivery' => 'required'
    ]);
    
    DB::table('companies')->where('id', $id)->update([
        'sellmethod' => $validatedData['sellmethod'],
        'exchange' => $validatedData['exchange'],
        'delivery' => $validatedData['delivery']
    ]);
   
    return response()->json(['success'=>true]);
  }
}
