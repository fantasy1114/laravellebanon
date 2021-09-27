<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voter;
use App\Models\Alluserinterface;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
  // User List Page
  public function index()
  {
    $voters = DB::table('voters')->get();
    return view('/report', ['voters' => $voters]);
  }
}
