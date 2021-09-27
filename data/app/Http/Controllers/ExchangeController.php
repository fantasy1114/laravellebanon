<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exchange;
use Illuminate\Support\Facades\DB;
use App\Models\Logs;

class ExchangeController extends Controller
{
  // User List Page
  public function index()
  {
    $exchanges = DB::table('exchange')->get();
    return view('/exchange', ['exchanges' => $exchanges]);
  }

  public function exchangeupdate(Request $request, $id)
  {
    // print_r($companychecking);exit();
    $validatedData = $request->validate([
        'exchange' => 'required',
    ]);
 
    DB::table('exchange')->where('id', $id)->update([
        'exchange' => $validatedData['exchange']
    ]);
   
    return response()->json(['success'=>true]);
  }
}
