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
    // foreach ($categorys as $category){
    //   $companyid = $category -> companies_id;
    //   $companynames = DB::table('companies')->where('id', $companyid)->get();
    //   foreach($companynames as $companyname){
    //     print_r($companyname -> companyname);
    //   }
      
    // }
    // exit;
    
    return view('/category', ['categorys' => $categorys], ['companys' => $companys]);
  }

  public function categorycreate(Request $request)
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

    $imageName = "default.png";
    if ($request->file('account-upload')) {
      $imagePath = $request->file('account-upload');
      $imageName = $imagePath->getClientOriginalName();
      $imagePath->move(public_path('uploads/category/'), $imageName);
    }
    if($categoryschecking == 0){
      
      $Categories = new Categories;
      $Categories->companies_id = $companychecking;
      $Categories->categoryname = request('categoryname');
      $Categories->status = request('status');
      $Categories->logo = './uploads/category/'.$imageName;
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
    $categorys = DB::table('categories')->where('id', 'not like', $id)->get();
    $categoryes = DB::table('categories')->where('id', $id)->get();
    $statuschange = request('status');
    if($statuschange == 'change'){
      foreach($categoryes as $category){
        $status = $category -> status;
      }
      if($status == 'InActive'){
        DB::table('categories')->where('id', $id)->update([
          'status' => 'Active'
        ]);
        return response()->json(['success'=>true]);
      }
      else{
        DB::table('categories')->where('id', $id)->update([
          'status' => 'InActive'
        ]);
        return response()->json(['success'=>true]);
      }
    }
    else{
      $companychecking = '';
      foreach ($companys as $company) {
        $companyname = $company->companyname;
        if (request('ucompanyname') == $companyname){
          $companychecking = $company->id;
        }
      }
      
      $categoryschecking = 0;
    
      foreach ($categorys as $category) {
        $categoryname = $category->categoryname;
        if (request('ucategoryname') == $categoryname){
          $companyname = $category->companyname;
          if(request('ucompanyname') == $companyname){
            $categoryschecking = 1;
          }
        }
      }
      $validatedData = $request->validate([
        'ucategoryname' => 'required',
        'ucompanyname' => 'required',
        'ustatus' => 'required',
      ]);
      if($categoryschecking == 0){
        if ($request->file('uaccount-upload')) {
          $imagePath = $request->file('uaccount-upload');
          $imageName = $imagePath->getClientOriginalName();
          $imagePath->move(public_path('uploads/category/'), $imageName);
          DB::table('categories')->where('id', $id)->update([
              'companies_id' => $companychecking,
              'categoryname' => $validatedData['ucategoryname'],
              'companyname' => $validatedData['ucompanyname'],
              'status' => $validatedData['ustatus'],
              'logo' => './uploads/category/'.$imageName,
              'categorycompany' => $validatedData['ucategoryname'].'('.$validatedData['ucompanyname'].')'
          ]);
          return response()->json(['success'=>true]);
        }
        else{
          DB::table('categories')->where('id', $id)->update([
            'companies_id' => $companychecking,
            'categoryname' => $validatedData['ucategoryname'],
            'companyname' => $validatedData['ucompanyname'],
            'status' => $validatedData['ustatus'],
            'categorycompany' => $validatedData['ucategoryname'].'('.$validatedData['ucompanyname'].')'
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