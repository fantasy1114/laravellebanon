<?php

namespace App\Http\Controllers;

use App\Models\Categories;
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
    if($filter){
      if($filter == 'all'){
        $categorys = Categories::with('companies')->get();
        $items = Items::with('categories')->paginate(6);
        return view('/shopping')->with('items', $items)->with('categorys', $categorys);
      }
      else{
        $categorys = Categories::with('companies')->get();
        $items = Items::with('categories')->where('category_id', $filter)->paginate(6);
        return view('/shopping')->with('items', $items)->with('categorys', $categorys);
      }
     
    }
    else{
      $categorys = Categories::with('companies')->get();
      $items = Items::with('categories')->paginate(6);
      return view('/shopping')->with('items', $items)->with('categorys', $categorys);
    }
  }


}
