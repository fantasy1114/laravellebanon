<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
use Illuminate\Support\Facades\DB;
use App\Models\Logs;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class ShoppingController extends Controller
{
  // User List Page
  public function index()
  {
    // $items = Items::with('categories')->paginate(6);
    // return view('/shopping', ['items' => $items]);

    $filter = request('query');
    if($filter == 'company'){
      $items = Items::with('categories')->orderBy('category_id')->paginate(6);
      return view('/shopping', ['items' => $items]);
    }
    else if($filter == 'category'){
      $items = Items::with('categories')->orderBy('category_id')->paginate(6);
      return view('/shopping', ['items' => $items]);
    }
    else{
      $items = Items::with('categories')->paginate(6);
      return view('/shopping', ['items' => $items]);
    }
  }


}
