<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
  // User List Page
  public function index()
  {
    $users = DB::table('users')->take(4)->get();
    $items = DB::table('items')->select('photo')->take(20)->get();
    $lastitems = DB::table('items')->orderBy('photo', 'desc')->select('photo')->take(3)->get();
    $siteinfos = DB::table('siteinfo')->get();
    // print_r($users);exit;
    return view('front/mainpage')->with('items', $items)->with('users', $users)->with('lastitems', $lastitems)->with('siteinfos', $siteinfos);
  }
}
