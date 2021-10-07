<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;


class ItemsController extends Controller
{
  // User List Page
  public function index()
  {
    $categorys = Categories::with('companies')->get();
    $items = Items::with('categories')->get();
    return view('/items', ['items' => $items], ['categorys' => $categorys]);
  }

  public function itemscreate(Request $request)
  {
    // print_r(request('title'));exit;
    $categorys = DB::table('categories')->get();
    $items = DB::table('items')->get();

    $categorychecking = '';
    foreach ($categorys as $category) {
      $categoryname = $category->categorycompany;
      if (request('categoryname') == $categoryname){
        $categorychecking = $category->id;
      }
    }

    $itemschecking = 0;
    foreach ($items as $item) {
      $itemname = $item->title;
      $cate = $item->categoryname;
      if (request('title') == $itemname){
        if (request('categoryname') == $cate){
          $itemschecking = 1;
        }
      }
    }
    $imageName = "default.png";
    if ($request->file('account-upload')) {
      $imagePath = $request->file('account-upload');
      $imageName = $imagePath->getClientOriginalName();
      $imagePath->move(public_path('uploads'), $imageName);
    }   
    if($itemschecking == 0){
      
      $Items = new Items;
      $Items->category_id = $categorychecking;
      $Items->categoryname = request('categoryname');
      $Items->title = request('title');
      $Items->description = request('description');
      // $Items->photo = request('photo');
      // $Items->photo = $imageName;
      $Items->photo = './uploads/'.$imageName;
      $Items->usprice = request('usprice');
      $Items->lbpprice = request('lbpprice');
      $Items->marker = request('marker');
      $Items->quantity = request('quantity');
      $Items->status = request('status');
      $Items->save();
     
      return response()->json(['success'=>true]);
    }
    return response()->json(['success'=>false]);
  }
  public function itemsdelete($id)
  {
    DB::table('items')->where('id', $id)->delete();
    return response()->json(['success'=>true]);
  }
  public function itemsupdate(Request $request, $id)
  {
    
    $categorys = DB::table('categories')->get();
    $itemes = DB::table('items')->where('id', $id)->get();

    $statuschange = request('status');
    if($statuschange == 'change'){
      foreach($itemes as $item){
        $status = $item -> status;
      }
      if($status == ''){
        DB::table('items')->where('id', $id)->update([
          'status' => 'on'
        ]);
        return response()->json(['success'=>true]);
      }
      else{
        DB::table('items')->where('id', $id)->update([
          'status' => ''
        ]);
        return response()->json(['success'=>true]);
      }
    }
    else{
      $categorychecking = '';
      foreach ($categorys as $category) {
        $categoryname = $category->categorycompany;
        if (request('ucategoryname') == $categoryname){
          $categorychecking = $category->id;
        }
      }
      $validatedData = $request->validate([
          'ucategoryname' => 'required',
          'utitle' => 'required',
          'udescription' => 'required',
          // 'uaccount-upload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
          'uusprice' => 'required',
          // 'ustatus' => 'required',/
      ]);
      $items = DB::table('items')->where('id', 'not like', $id)->get();
      $itemschecking = 0;
      foreach ($items as $item) {
        $itemname = $item->title;
        $cate = $item->categoryname;
        if (request('utitle') == $itemname){
          if (request('ucategoryname') == $cate){
            $itemschecking = 1;
          }
        }
      }
      if($itemschecking == 0){
        if ($request->file('uaccount-upload')) {
          $imagePath = $request->file('uaccount-upload');
          $imageName = $imagePath->getClientOriginalName();
          $imagePath->move(public_path('uploads'), $imageName);
          DB::table('items')->where('id', $id)->update([
            'category_id' => $categorychecking,
            'categoryname' => $validatedData['ucategoryname'],
            'title' => $validatedData['utitle'],
            'description' => $validatedData['udescription'],
            'photo' => './uploads/'.$imageName,
            'usprice' => $validatedData['uusprice'],
            'lbpprice' => request('ulbpprice'),
            'marker' => request('umarker'),
            'quantity' => request('uquantity'),
            // 'status' => $validatedData['ustatus'],
          ]);
          return response()->json(['success'=>true]);
        }
        else{
          DB::table('items')->where('id', $id)->update([
            'category_id' => $categorychecking,
            'categoryname' => $validatedData['ucategoryname'],
            'title' => $validatedData['utitle'],
            'description' => $validatedData['udescription'],
            'usprice' => $validatedData['uusprice'],
            'lbpprice' => request('ulbpprice'),
            'marker' => request('umarker'),
            'quantity' => request('uquantity'),
            // 'status' => $validatedData['ustatus'],
          ]);
          return response()->json(['success'=>true]);
        }
      }
      else{
        return response()->json(['success'=>false]);
      }
    }
  }
}
