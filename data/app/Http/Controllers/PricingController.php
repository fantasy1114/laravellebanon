<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pricingslider;

class PricingController extends Controller
{
  // User List Page
  public function index()
  {
    $pricingsliders = DB::table('pricingsliders')->get();
    return view('/pricingslider', ['pricingsliders' => $pricingsliders]);
  
  }
  public function pricingslidercreate(Request $request)
  {
    $pricings = DB::table('pricingsliders')->get();
    $imagenameget = time();
    $pricingschecking = 0;
  
    foreach ($pricings as $pricing) {
      $pricingtitle = $pricing->title;
      if (request('title') == $pricingtitle){
        $pricingtitle = $pricing->title;
        $pricingschecking = 1;
      }
    }

    $imagenameget = "default.png";
    if ($request->file('account-upload')) {
      $imagePath = $request->file('account-upload');
      
      $imagenameget = time().'.png';
      $imagePath->move(public_path('uploads/pricing/'), $imagenameget);
    }
    if($pricingschecking == 0){
      
      $Pricing = new Pricingslider;
      $Pricing->title = request('title');
      $Pricing->photo = './uploads/pricing/'.$imagenameget;
      $Pricing->description = request('description');
      $Pricing->save();
    
      return response()->json(['success'=>true]);
    }
    return response()->json(['success'=>false]);
  }

  public function pricingsliderdelete($id)
  {
    DB::table('pricingsliders')->where('id', $id)->delete();
    return response()->json(['success'=>true]);
  }
  public function pricingsliderupdate(Request $request, $id)
  {

    if ($request->file('uaccount-upload')) {
      $imagePath = $request->file('uaccount-upload');
      // $imageName = $imagePath->getClientOriginalName();
      $imageName = time().'.png';
      $imagePath->move(public_path('uploads/pricing/'), $imageName);
      DB::table('pricingsliders')->where('id', $id)->update([
          'title' => request('utitle'),
          'description' => request('udescription'),
          'photo' => './uploads/pricing/'.$imageName,
      ]);
      return response()->json(['success'=>true]);
    }
    else{
      DB::table('pricingsliders')->where('id', $id)->update([
        'title' => request('utitle'),
        'description' => request('udescription'),
      ]);
      return response()->json(['success'=>true]);
    }
  }

}
