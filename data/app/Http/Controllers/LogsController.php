<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logs;
use App\Models\Alluserinterface;
use Illuminate\Support\Facades\DB;

class LogsController extends Controller
{
  // User List Page
  public function index()
  {
    $logss = DB::table('logs')->get();
    return view('/logs', ['logss' => $logss]);
  }
}
