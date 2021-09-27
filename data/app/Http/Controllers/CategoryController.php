<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;
use App\Models\Logs;

class CategoryController extends Controller
{
  // User List Page
  public function index()
  {
    $categorys = DB::table('categories')->get();
    $companys = DB::table('companies')->get();
    return view('/category', ['categorys' => $categorys], ['companys' => $companys]);
  }

  public function categorycreate()
  {
    
    $categorys = DB::table('categories')->get();
    $companys = DB::table('companies')->get();

    $companychecking = '';
    foreach ($companys as $company) {
      $companyname = $company->companyname;
      if (request('companyname') == $companyname){
        $companychecking = $company->id;
      }
    }
    
    // $logs = DB::table('logs')->get();
    $categoryschecking = 0;
  
    foreach ($categorys as $category) {
      $categoryname = $category->categoryname;
      if (request('categoryname') == $categoryname){
        $companyname = $category->companyname;
        if(request('companyname') == $companyname){
          $categoryschecking = 1;
        }
      }
    }
    
    if($categoryschecking == 0){
     
      $Categories = new Categories;
      $Categories->companies_id = $companychecking;
      $Categories->categoryname = request('categoryname');
      $Categories->companyname = request('companyname');
      $Categories->categorycompany = request('categoryname').'('.request('companyname').')';
      $Categories->save();
     

      // $Logs = new Logs;
      // $Logs->username = request('usernamesave');
      // $Logs->tablename = 'Voter';
      // $Logs->crudevent = 'add';
      // $Logs->description = request('voter_name');
      // $Logs->save();
    
      return response()->json(['success'=>true]);
    }
    return response()->json(['success'=>false]);
  }
  public function categorydelete($id, $category)
  {
   
    // $description = DB::table('categorys')->where('id', $id)->value('name');
    // var_dump($description);
    // $Logs = new Logs;
    // $Logs->username = $name;
    // $Logs->tablename = 'Voter';
    // $Logs->crudevent = 'delete';
    // $Logs->description = $description;
    // $Logs->save();
    $items = DB::table('items')->get();
    $ischecking = 0;
    
    foreach($items as $item){
      $itemname = $item->categoryname;
      if ($category == $itemname){
        $ischecking = 1;
      }
    }

    if ($ischecking == 0){
      DB::table('categories')->where('id', $id)->delete();
      return response()->json(['success'=>true]);
    }
    else{
      return response()->json(['success'=>false]);
    }
  }
  public function categoryupdate(Request $request, $id)
  {
    
    $companys = DB::table('companies')->get();
    $categorys = DB::table('categories')->get();
    $companychecking = '';
    foreach ($companys as $company) {
      $companyname = $company->companyname;
      if (request('companyname') == $companyname){
        $companychecking = $company->id;
      }
    }
    // print_r($companychecking);exit();
    $validatedData = $request->validate([
        'categoryname' => 'required',
        'companyname' => 'required'
    ]);
    $categoryschecking = 0;
  
    foreach ($categorys as $category) {
      $categoryname = $category->categoryname;
      if (request('categoryname') == $categoryname){
        $companyname = $category->companyname;
        if(request('companyname') == $companyname){
          $categoryschecking = 1;
        }
      }
    }
    if($categoryschecking == 0){
      DB::table('categories')->where('id', $id)->update([
          'companies_id' => $companychecking,
          'categoryname' => $validatedData['categoryname'],
          'companyname' => $validatedData['companyname'],
          'categorycompany' => $validatedData['categoryname'].'('.$validatedData['companyname'].')'
      ]);
    // $Logs = new Logs;
    // $Logs->username = request('usernamesave');
    // $Logs->tablename = 'Voter';
    // $Logs->crudevent = 'update';
    // $Logs->description = request('name');
    // $Logs->save();
      return response()->json(['success'=>true]);
    }
    else{
      return response()->json(['success'=>false]);
    }
  }
}
