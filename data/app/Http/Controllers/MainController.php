<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
  // User List Page
  public function index()
  {
    $users = DB::table('users')->where('user_show', 'on')->take(4)->get();
    $items = DB::table('items')->take(20)->get();
    $blogs = DB::table('blogs')->orderBy('photo', 'desc')->take(3)->get();
    $siteinfos = DB::table('siteinfo')->get();
    $staticinfos = DB::table('staticinfos')->get();
    $pricingsliders = DB::table('pricingsliders')->get();
    // print_r($users);exit;
    return view('front/mainpage')->with('items', $items)->with('users', $users)->with('blogs', $blogs)->with('siteinfos', $siteinfos)->with('staticinfos', $staticinfos)->with('pricingsliders', $pricingsliders);
  }
}
