<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Models\Role;

class UserroleController extends Controller
{
  // User List Page
  public function index()
  {
    $superadmins = DB::table('roles')->where('userrole', 'superadmin')->get();
    $admins = DB::table('roles')->where('userrole', 'admin')->get();
    $subscribers = DB::table('roles')->where('userrole', 'subscriber')->get();
    
    return view('/userrole')->with('admins', $admins)->with('superadmins', $superadmins)->with('subscribers',  $subscribers);
  }

  public function roleupdateone(Request $request, $id)
  {
    
    // $validatedData = $request->validate([
    //     'superadmin-users-read' => 'required',
    //     'superadmin-users-write' => 'required',
    //     'superadmin-users-create' => 'required',
    //     'superadmin-users-delete' => 'required',
    //     'superadmin-users-list' => 'required',

    //     'superadmin-compaines-read' => 'required',
    //     'superadmin-compaines-write' => 'required',
    //     'superadmin-compaines-create' => 'required',
    //     'superadmin-compaines-delete' => 'required',
    //     'superadmin-compaines-list' => 'required',

    //     'superadmin-categories-read' => 'required',
    //     'superadmin-categories-write' => 'required',
    //     'superadmin-categories-create' => 'required',
    //     'superadmin-categories-delete' => 'required',
    //     'superadmin-categories-list' => 'required',

    //     'superadmin-items-read' => 'required',
    //     'superadmin-items-write' => 'required',
    //     'superadmin-items-create' => 'required',
    //     'superadmin-items-delete' => 'required',
    //     'superadmin-items-list' => 'required',

    //     'superadmin-siteinfo-read' => 'required',
    //     'superadmin-siteinfo-write' => 'required',
    //     'superadmin-siteinfo-create' => 'required',
    //     'superadmin-siteinfo-delete' => 'required',
    //     'superadmin-siteinfo-list' => 'required',

    //     'superadmin-currency-read' => 'required',
    //     'superadmin-currency-write' => 'required',
    //     'superadmin-currency-create' => 'required',
    //     'superadmin-currency-delete' => 'required',
    //     'superadmin-currency-list' => 'required',
    // ]);

        DB::table('roles')->where('id', $id)->update([
            'users_view' => request('superadmin-users-read'),
            'users_write' => request('superadmin-users-write'),
            'users_create' => request('superadmin-users-create'),
            'users_delete' => request('superadmin-users-delete'),
            'users_list' => request('superadmin-users-list'),

            'companies_view' => request('superadmin-compaines-read'),
            'companies_write' => request('superadmin-compaines-write'),
            'companies_create' => request('superadmin-compaines-create'),
            'companies_delete' => request('superadmin-compaines-delete'),
            'companies_list' => request('superadmin-compaines-list'),

            'categories_view' => request('superadmin-categories-read'),
            'categories_write' => request('superadmin-categories-write'),
            'categories_create' => request('superadmin-categories-create'),
            'categories_delete' => request('superadmin-categories-delete'),
            'categories_list' => request('superadmin-categories-list'),

            'items_view' => request('superadmin-items-read'),
            'items_write' => request('superadmin-items-write'),
            'items_create' => request('superadmin-items-create'),
            'items_delete' => request('superadmin-items-delete'),
            'items_list' => request('superadmin-items-list'),

            'siteinfo_view' => request('superadmin-siteinfo-read'),
            'siteinfo_write' => request('superadmin-siteinfo-write'),
            'siteinfo_create' => request('superadmin-siteinfo-create'),
            'siteinfo_delete' => request('superadmin-siteinfo-delete'),
            'siteinfo_list' => request('superadmin-siteinfo-list'),

            'staticinfo_view' => request('superadmin-staticinfo-read'),
            'staticinfo_write' => request('superadmin-staticinfo-write'),
            'staticinfo_create' => request('superadmin-staticinfo-create'),
            'staticinfo_delete' => request('superadmin-staticinfo-delete'),
            'staticinfo_list' => request('superadmin-staticinfo-list'),

            'pricing_view' => request('superadmin-pricing-read'),
            'pricing_write' => request('superadmin-pricing-write'),
            'pricing_create' => request('superadmin-pricing-create'),
            'pricing_delete' => request('superadmin-pricing-delete'),
            'pricing_list' => request('superadmin-pricing-list'),

            'currency_view' => request('superadmin-currency-read'),
            'currency_write' => request('superadmin-currency-write'),
            'currency_create' => request('superadmin-currency-create'),
            'currency_delete' => request('superadmin-currency-delete'),
            'currency_list' => request('superadmin-currency-list'),
            
            'blog_view' => request('superadmin-blog-read'),
            'blog_write' => request('superadmin-blog-write'),
            'blog_create' => request('superadmin-blog-create'),
            'blog_delete' => request('superadmin-blog-delete'),
            'blog_list' => request('superadmin-blog-list'),

            'shopping_list' => request('superadmin-shopping-list')
          
        ]);
      return response()->json(['success'=>true]);
  }

  public function roleupdatetwo(Request $request, $id){
    DB::table('roles')->where('id', $id)->update([
      'users_view' => request('admin-users-read'),
      'users_write' => request('admin-users-write'),
      'users_create' => request('admin-users-create'),
      'users_delete' => request('admin-users-delete'),
      'users_list' => request('admin-users-list'),

      'companies_view' => request('admin-compaines-read'),
      'companies_write' => request('admin-compaines-write'),
      'companies_create' => request('admin-compaines-create'),
      'companies_delete' => request('admin-compaines-delete'),
      'companies_list' => request('admin-compaines-list'),

      'categories_view' => request('admin-categories-read'),
      'categories_write' => request('admin-categories-write'),
      'categories_create' => request('admin-categories-create'),
      'categories_delete' => request('admin-categories-delete'),
      'categories_list' => request('admin-categories-list'),

      'items_view' => request('admin-items-read'),
      'items_write' => request('admin-items-write'),
      'items_create' => request('admin-items-create'),
      'items_delete' => request('admin-items-delete'),
      'items_list' => request('admin-items-list'),

      'siteinfo_view' => request('admin-siteinfo-read'),
      'siteinfo_write' => request('admin-siteinfo-write'),
      'siteinfo_create' => request('admin-siteinfo-create'),
      'siteinfo_delete' => request('admin-siteinfo-delete'),
      'siteinfo_list' => request('admin-siteinfo-list'),

      'staticinfo_view' => request('admin-staticinfo-read'),
      'staticinfo_write' => request('admin-staticinfo-write'),
      'staticinfo_create' => request('admin-staticinfo-create'),
      'staticinfo_delete' => request('admin-staticinfo-delete'),
      'staticinfo_list' => request('admin-staticinfo-list'),

      'pricing_view' => request('admin-pricing-read'),
      'pricing_write' => request('admin-pricing-write'),
      'pricing_create' => request('admin-pricing-create'),
      'pricing_delete' => request('admin-pricing-delete'),
      'pricing_list' => request('admin-pricing-list'),

      'currency_view' => request('admin-currency-read'),
      'currency_write' => request('admin-currency-write'),
      'currency_create' => request('admin-currency-create'),
      'currency_delete' => request('admin-currency-delete'),
      'currency_list' => request('admin-currency-list'),

      'blog_view' => request('admin-blog-read'),
      'blog_write' => request('admin-blog-write'),
      'blog_create' => request('admin-blog-create'),
      'blog_delete' => request('admin-blog-delete'),
      'blog_list' => request('admin-blog-list'),

      'shopping_list' => request('admin-shopping-list')
      
    ]);
    return response()->json(['success'=>true]);
  }
  public function roleupdatethree(Request $request, $id){
    DB::table('roles')->where('id', $id)->update([
      'users_view' => request('subscriber-users-read'),
      'users_write' => request('subscriber-users-write'),
      'users_create' => request('subscriber-users-create'),
      'users_delete' => request('subscriber-users-delete'),
      'users_list' => request('subscriber-users-list'),

      'companies_view' => request('subscriber-compaines-read'),
      'companies_write' => request('subscriber-compaines-write'),
      'companies_create' => request('subscriber-compaines-create'),
      'companies_delete' => request('subscriber-compaines-delete'),
      'companies_list' => request('subscriber-compaines-list'),

      'categories_view' => request('subscriber-categories-read'),
      'categories_write' => request('subscriber-categories-write'),
      'categories_create' => request('subscriber-categories-create'),
      'categories_delete' => request('subscriber-categories-delete'),
      'categories_list' => request('subscriber-categories-list'),

      'items_view' => request('subscriber-items-read'),
      'items_write' => request('subscriber-items-write'),
      'items_create' => request('subscriber-items-create'),
      'items_delete' => request('subscriber-items-delete'),
      'items_list' => request('subscriber-items-list'),

      'siteinfo_view' => request('subscriber-siteinfo-read'),
      'siteinfo_write' => request('subscriber-siteinfo-write'),
      'siteinfo_create' => request('subscriber-siteinfo-create'),
      'siteinfo_delete' => request('subscriber-siteinfo-delete'),
      'siteinfo_list' => request('subscriber-siteinfo-list'),

      'staticinfo_view' => request('subscriber-staticinfo-read'),
      'staticinfo_write' => request('subscriber-staticinfo-write'),
      'staticinfo_create' => request('subscriber-staticinfo-create'),
      'staticinfo_delete' => request('subscriber-staticinfo-delete'),
      'staticinfo_list' => request('subscriber-staticinfo-list'),

      'pricing_view' => request('subscriber-pricing-read'),
      'pricing_write' => request('subscriber-pricing-write'),
      'pricing_create' => request('subscriber-pricing-create'),
      'pricing_delete' => request('subscriber-pricing-delete'),
      'pricing_list' => request('subscriber-pricing-list'),

      'currency_view' => request('subscriber-currency-read'),
      'currency_write' => request('subscriber-currency-write'),
      'currency_create' => request('subscriber-currency-create'),
      'currency_delete' => request('subscriber-currency-delete'),
      'currency_list' => request('subscriber-currency-list'),

      'blog_view' => request('subscriber-blog-read'),
      'blog_write' => request('subscriber-blog-write'),
      'blog_create' => request('subscriber-blog-create'),
      'blog_delete' => request('subscriber-blog-delete'),
      'blog_list' => request('subscriber-blog-list'),

      'shopping_list' => request('subscriber-shopping-list')
      
    ]);
    return response()->json(['success'=>true]);
  }
}
