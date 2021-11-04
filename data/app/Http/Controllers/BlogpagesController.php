<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class BlogpagesController extends Controller
{
  // User List Page
  public function index()
  {
    $blogs = DB::table('blogs')->get();
    $siteinfos = DB::table('siteinfo')->get();
    return view('/blogpages', ['blogs' => $blogs], ['siteinfos' => $siteinfos]);
  }

}
