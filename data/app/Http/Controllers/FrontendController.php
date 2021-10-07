<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;


class FrontendController extends Controller
{
  // User List Page
  public function index()
  {
    $categorys = Categories::with('companies')->get();
    $items = Items::get();
    return view('/frontend', ['items' => $items]);
  }

  
}
