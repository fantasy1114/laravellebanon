<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siteinfo;
use Illuminate\Support\Facades\DB;
use App\Models\Logs;

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
          'home_image' => './uploads/static/'.$imageName,
        ]);
        return response()->json(['success'=>true]);
    }
    else{
      DB::table('staticinfos')->where('id', $id)->update([
        'home_title' => request('home_title'),
        'home_desc' => request('home_desc'),
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

      DB::table('staticinfos')->where('id', $id)->update([
        'pricing_title' => request('pricing_title'),
        'pricing_desc' => request('pricing_desc'),
        'pricing_video_link' => request('pricing_video_link'),
      ]);
      return response()->json(['success'=>true]);
    
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
