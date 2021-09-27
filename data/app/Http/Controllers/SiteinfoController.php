<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siteinfo;
use Illuminate\Support\Facades\DB;
use App\Models\Logs;

class SiteinfoController extends Controller
{
  // User List Page
  public function index()
  {
    $siteinfos = DB::table('siteinfo')->get();
    return view('/siteinfo', ['siteinfos' => $siteinfos]);
  }

  public function siteinfoupdate(Request $request, $id)
  {
    
    $siteinfos = DB::table('siteinfo')->get();
   
    // print_r($request);exit();

    $validatedData = $request->validate([
        'utitle' => 'required',
        'ulat' => 'required',
        'ulng' => 'required',
        'ucontacts' => 'required',
        'uphone' => 'required',
        'uemail' => 'required',
        'uoffice' => 'required',
        'uwhatapp' => 'required',
    ]);
    if ($request->file('uaccount-upload')) {
      // begin image unlink
      // ini_set('memory_limit', '-1');
      $imagelinks = DB::table('siteinfo')->where('id', $id)->get();
      $deleteimage = '';
      foreach ($imagelinks as $imagelink){
        $deleteimage = $imagelink->logo;
      }
      unlink($deleteimage);
      // end Image unlink
      $imagePath = $request->file('uaccount-upload');
      $imageName = $imagePath->getClientOriginalName();
    
      $imagePath->move(public_path('uploads/logos/'), $imageName);
      DB::table('siteinfo')->where('id', $id)->update([
        'title' => $validatedData['utitle'],
        'logo' => './uploads/logos/'.$imageName,
        'lat' => $validatedData['ulat'],
        'lng' => $validatedData['ulng'],
        'phone' => $validatedData['uphone'],
        'email' => $validatedData['uemail'],
        'office' => $validatedData['uoffice'],
        'whatapp' => $validatedData['uwhatapp'],
        'contacts' => $validatedData['ucontacts']
      ]);
    }
    else{
      DB::table('siteinfo')->where('id', $id)->update([
        'title' => $validatedData['utitle'],
        'lat' => $validatedData['ulat'],
        'lng' => $validatedData['ulng'],
        'phone' => $validatedData['uphone'],
        'email' => $validatedData['uemail'],
        'office' => $validatedData['uoffice'],
        'whatapp' => $validatedData['uwhatapp'],
        'contacts' => $validatedData['ucontacts']
        // 'location' => $validatedData['location']
      ]);
    }

    
   
    return response()->json(['success'=>true]);
  }
}
