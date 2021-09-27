<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
use Illuminate\Support\Facades\DB;
use App\Models\Logs;

class ItemstatusController extends Controller
{
  // User List Page
  public function index()
  {
    $items = DB::table('items')->get();
    return view('/itemstatus', ['items' => $items]);
  }

  public function itemstatusupdate(Request $request, $id)
  {
    
    $items = DB::table('items')->get();

   
    // print_r($companychecking);exit();
    $validatedData = $request->validate([
        'title' => 'required',
        'status' => 'required'
    ]);
 
    DB::table('items')->where('id', $id)->update([
        'title' => $validatedData['title'],
        'status' => $validatedData['status']
    ]);
   
    return response()->json(['success'=>true]);
  }
}
