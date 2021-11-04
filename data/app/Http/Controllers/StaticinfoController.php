<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaticinfoController extends Controller
{
  // User List Page
  public function index()
  {
    $staticinfos = DB::table('staticinfos')->get();
    return view('/staticinfo', ['staticinfos' => $staticinfos]);

  }

  public function statichomeupdate(Request $request, $id)
  {

    if ($request->file('home_image')) {
        $imagePath = $request->file('home_image');
        $imageName = time().'.png';
        $imagePath->move(public_path('uploads/static/'), $imageName);
        DB::table('staticinfos')->where('id', $id)->update([
          'home_title' => request('home_title'),
          'home_desc' => request('home_desc'),
          'home_button_one_title' => request('home_button_one_title'),
          'home_button_one_desc' => request('home_button_one_desc'),
          'home_button_two_title' => request('home_button_two_title'),
          'home_button_two_desc' => request('home_button_two_desc'),
          'home_image' => './uploads/static/'.$imageName,
        ]);
        return response()->json(['success'=>true]);
    }
    else{
      DB::table('staticinfos')->where('id', $id)->update([
        'home_title' => request('home_title'),
        'home_desc' => request('home_desc'),
        'home_button_one_title' => request('home_button_one_title'),
        'home_button_one_desc' => request('home_button_one_desc'),
        'home_button_two_title' => request('home_button_two_title'),
        'home_button_two_desc' => request('home_button_two_desc'),
      ]);
      return response()->json(['success'=>true]);
    }
  }

  public function staticaboutupdate(Request $request, $id)
  {

    if ($request->file('about_image')) {
        $imagePath = $request->file('about_image');
        $imageName = time().'.png';
        $imagePath->move(public_path('uploads/static/'), $imageName);
        DB::table('staticinfos')->where('id', $id)->update([
          'about_one_title' => request('about_one_title'),
          'about_one_desc' => request('about_one_desc'),
          'about_two_title' => request('about_two_title'),
          'about_two_desc' => request('about_two_desc'),
          'about_three_title' => request('about_three_title'),
          'about_three_desc' => request('about_three_desc'),
          'about_title' => request('about_title'),
          'about_desc' => request('about_desc'),
          'about_image' => './uploads/static/'.$imageName,
        ]);
        return response()->json(['success'=>true]);
    }
    else{
      DB::table('staticinfos')->where('id', $id)->update([
        'about_one_title' => request('about_one_title'),
        'about_one_desc' => request('about_one_desc'),
        'about_two_title' => request('about_two_title'),
        'about_two_desc' => request('about_two_desc'),
        'about_three_title' => request('about_three_title'),
        'about_three_desc' => request('about_three_desc'),
        'about_title' => request('about_title'),
        'about_desc' => request('about_desc'),
      ]);
      return response()->json(['success'=>true]);
    }
  }

  public function staticserviceupdate(Request $request, $id)
  {

    DB::table('staticinfos')->where('id', $id)->update([
      'service_title' => request('service_title'),
      'service_desc' => request('service_desc'),
      'service_one_title' => request('service_one_title'),
      'service_one_desc' => request('service_one_desc'),
      'service_two_title' => request('service_two_title'),
      'service_two_desc' => request('service_two_desc'),
      'service_three_title' => request('service_three_title'),
      'service_three_desc' => request('service_three_desc'),
      'service_four_title' => request('service_four_title'),
      'service_four_desc' => request('service_four_desc'),
      'service_five_title' => request('service_five_title'),
      'service_five_desc' => request('service_five_desc'),
      'service_six_title' => request('service_six_title'),
      'service_six_desc' => request('service_six_desc'),
    ]);
    return response()->json(['success'=>true]);
  
  }

  public function staticshowcaseupdate(Request $request, $id)
  {

      DB::table('staticinfos')->where('id', $id)->update([
        'showcase_title' => request('showcase_title'),
        'showcase_desc' => request('showcase_desc'),
      ]);
      return response()->json(['success'=>true]);
    
  }

  public function staticpricingupdate(Request $request, $id)
  {
    if ($request->file('pricing_img')) {
      $imagePath = $request->file('pricing_img');
      $imageName = time().'.png';
      $imagePath->move(public_path('uploads/static/'), $imageName);
      DB::table('staticinfos')->where('id', $id)->update([
        'pricing_title' => request('pricing_title'),
        'pricing_desc' => request('pricing_desc'),
        'pricing_video_link' => request('pricing_video_link'),
        'pricing_img' => './uploads/static/'.$imageName,
        'package_one' => request('package_one'),
        'package_one_price' => request('package_one_price'),
        'package_one_feature' => request('package_one_feature'),
        'package_one_button' => request('package_one_button'),
        'package_two' => request('package_two'),
        'package_two_price' => request('package_two_price'),
        'package_two_feature' => request('package_two_feature'),
        'package_two_button' => request('package_two_button'),
        'package_three' => request('package_three'),
        'package_three_price' => request('package_three_price'),
        'package_three_feature' => request('package_three_feature'),
        'package_three_button' => request('package_three_button'),
        'package_one_link' => request('package_one_link'),
        'package_two_link' => request('package_two_link'),
        'package_three_link' => request('package_three_link'),
        
        
      ]);
      return response()->json(['success'=>true]);
    }
    else{
      DB::table('staticinfos')->where('id', $id)->update([
        'pricing_title' => request('pricing_title'),
        'pricing_desc' => request('pricing_desc'),
        'pricing_video_link' => request('pricing_video_link'),
        'package_one' => request('package_one'),
        'package_one_price' => request('package_one_price'),
        'package_one_feature' => request('package_one_feature'),
        'package_one_button' => request('package_one_button'),
        'package_two' => request('package_two'),
        'package_two_price' => request('package_two_price'),
        'package_two_feature' => request('package_two_feature'),
        'package_two_button' => request('package_two_button'),
        'package_three' => request('package_three'),
        'package_three_price' => request('package_three_price'),
        'package_three_feature' => request('package_three_feature'),
        'package_three_button' => request('package_three_button'),
        'package_one_link' => request('package_one_link'),
        'package_two_link' => request('package_two_link'),
        'package_three_link' => request('package_three_link'),
      ]);
      return response()->json(['success'=>true]);
    }
    
  }

  public function staticteamupdate(Request $request, $id)
  {

      DB::table('staticinfos')->where('id', $id)->update([
        'team_title' => request('team_title'),
        'team_desc' => request('team_desc'),
      ]);
      return response()->json(['success'=>true]);
    
  }

  public function staticblogupdate(Request $request, $id)
  {

      DB::table('staticinfos')->where('id', $id)->update([
        'blog_title' => request('blog_title'),
        'blog_desc' => request('blog_desc'),
      ]);
      return response()->json(['success'=>true]);
    
  }

  public function staticcontactupdate(Request $request, $id)
  {

      DB::table('staticinfos')->where('id', $id)->update([
        'contact_title' => request('contact_title'),
        'contact_desc' => request('contact_desc'),
      ]);
      return response()->json(['success'=>true]);
    
  }


}
