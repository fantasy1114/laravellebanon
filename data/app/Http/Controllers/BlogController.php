<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class BlogController extends Controller
{
  // User List Page
  public function index()
  {
    $blogs = DB::table('blogs')->get();
    return view('/blogs', ['blogs' => $blogs]);
  }
  public function blogscreate(Request $request)
  {
    $blogs = DB::table('blogs')->get();
    $imagenameget = time();
    $blogschecking = 0;
  
    foreach ($blogs as $blog) {
      $blogtitle = $blog->title;
      if (request('title') == $blogtitle){
        $blogtitle = $blog->title;
        $blogschecking = 1;
      }
    }

    $imagenameget = "default.png";
    if ($request->file('account-upload')) {
      $imagePath = $request->file('account-upload');
      
      $imagenameget = time().'.png';
      $imagePath->move(public_path('uploads/blogs/'), $imagenameget);
    }
    if($blogschecking == 0){
      
      $Blog = new Blog;
      $Blog->title = request('title');
      $Blog->photo = './uploads/blogs/'.$imagenameget;
      $Blog->blog_text = request('blog_text');
      $Blog->blog_date = date('Y-m-d h:i:s');
      $Blog->save();
    
      return response()->json(['success'=>true]);
    }
    return response()->json(['success'=>false]);
  }

  public function blogsdelete($id)
  {
    DB::table('blogs')->where('id', $id)->delete();
    return response()->json(['success'=>true]);
  }
  public function blogsupdate(Request $request, $id)
  {
    $validatedData = $request->validate([
        'utitle' => 'required',
        'ublog_text' => 'required',
    ]);
  
    if ($request->file('uaccount-upload')) {
      $imagePath = $request->file('uaccount-upload');
      // $imageName = $imagePath->getClientOriginalName();
      $imageName = time().'.png';
      $imagePath->move(public_path('uploads/blogs/'), $imageName);
      DB::table('blogs')->where('id', $id)->update([
          'title' => $validatedData['utitle'],
          'blog_text' => $validatedData['ublog_text'],
          'photo' => './uploads/blogs/'.$imageName,
          'blog_date' => date('Y-m-d h:i:s'),
      ]);
      return response()->json(['success'=>true]);
    }
    else{
      DB::table('blogs')->where('id', $id)->update([
        'title' => $validatedData['utitle'],
        'blog_text' => $validatedData['ublog_text'],
        'blog_date' => date('Y-m-d h:i:s'),
      ]);
      return response()->json(['success'=>true]);
    }
  }

}
