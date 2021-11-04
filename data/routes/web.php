<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserlistController;
use App\Http\Controllers\AllusercompanymanagementController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\SiteinfoController;
use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserroleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\StaticinfoController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\BlogpagesController;

use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function() {
//   return view('front/mainpage');
//   // return view('dashboard/dashboard');
// });
Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/logins', function () {
    return view('auth/login');
});
Route::get('/test', function () {
  return view('test');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');  
})->name('dashboard');
Route::group(['middleware' => 'auth'], function() {
    // Authenticated user routes
    // Begin ----- USERLIST -----------
    Route::get('/userlist', [UserlistController::class, 'userlist'])->name('userlist');
    Route::post('/userlist', [UserlistController::class, 'usercreate'])->name('usercreate');
    Route::get('/userdelete/{id}', [UserlistController::class, 'userdelete'])->name('userdelete');
    Route::post('/userupdate/{id}', [UserlistController::class, 'userupdate'])->name('userupdate');
    Route::post('/userliststatusupdate/{id}', [UserlistController::class, 'userliststatusupdate'])->name('userliststatusupdate');
    Route::post('/userlistshowupdate/{id}', [UserlistController::class, 'userlistshowupdate'])->name('userlistshowupdate');
    
    // END -------- USERLIST ----------
    //-------------- BEGIN companymanagement-------------
    Route::get('companymanagement', [AllusercompanymanagementController::class, 'index'])->name('index');
    Route::post('companymanagement/{id}', [AllusercompanymanagementController::class, 'companymanagementcreate'])->name('companymanagementcreate');
    Route::get('/companymanagementdelete/{id}/{company}', [AllusercompanymanagementController::class, 'companymanagementdelete'])->name('companymanagementdelete');
    Route::post('/companymanagementupdate/{id}', [AllusercompanymanagementController::class, 'companymanagementupdate'])->name('companymanagementupdate');
    // END ----------------- companymanagement ------------
    // // ---------BEGIN category-------------
    Route::get('/category', [CategoryController::class, 'index'])->name('index');
    Route::post('/category/{id}', [CategoryController::class, 'categorycreate'])->name('categorycreate');
    Route::get('/categorydelete/{id}/{category}', [CategoryController::class, 'categorydelete'])->name('categorydelete');
    Route::post('/categoryupdate/{id}', [CategoryController::class, 'categoryupdate'])->name('categoryupdate');
    // // -------      END category       -----------------

    // // ---------     BEGIN Item    -------------
    Route::get('/items', [ItemsController::class, 'index'])->name('index');
    Route::post('/items/{id}', [ItemsController::class, 'itemscreate'])->name('itemscreate');
    Route::get('/itemsdelete/{id}', [ItemsController::class, 'itemsdelete'])->name('itemsdelete');
    Route::post('/itemsupdate/{id}', [ItemsController::class, 'itemsupdate'])->name('itemsupdate');
    // // -------END Item -----------------

    // // ---------BEGIN SiteInfo-------------
    Route::get('/siteinfo', [SiteinfoController::class, 'index'])->name('index');
    Route::post('/siteinfoupdate/{id}', [SiteinfoController::class, 'siteinfoupdate'])->name('siteinfoupdate');
    // // -------END SiteInfo -----------------

      // // ---------BEGIN Currency-------------
      Route::get('/exchange', [ExchangeController::class, 'index'])->name('index');
      Route::post('/exchangeupdate/{id}', [ExchangeController::class, 'exchangeupdate'])->name('exchangeupdate');
      // // -------END Currency -----------------

    // // ---------BEGIN REPORT-------------
  //   Route::get('/report', [App\Http\Controllers\ReportController::class, 'index'])->name('index');
  //   Route::post('/report', [App\Http\Controllers\ReportController::class, 'report'])->name('report');
    // Route::get('export/{name}', [App\Http\Controllers\MyController::class, 'export'])->name('export');
    // Route::get('report', [App\Http\Controllers\MyController::class, 'importExportView']);
    // Route::post('import', [App\Http\Controllers\MyController::class, 'import'])->name('import');
    // // -------END REPORT -----------------

    // Route::resource('issuereporting', [App\Http\Controllers\Issuereporting::class])->name('voterupdate');
    // Route::get('logs', [App\Http\Controllers\LogsController::class, 'index'])->name('index');
    Route::post('/settingupdate/{id}', [SettingController::class, 'settingupdate'])->name('settingupdate');
    Route::post('/settingpasswordupdate/{id}', [SettingController::class, 'settingpasswordupdate'])->name('settingpasswordupdate');
    Route::get('/setting', [SettingController::class, 'index'])->name('index');

    Route::post('/roleupdateone/{id}', [UserroleController::class, 'roleupdateone'])->name('roleupdateone');
    Route::post('/roleupdatetwo/{id}', [UserroleController::class, 'roleupdatetwo'])->name('roleupdatetwo');
    Route::post('/roleupdatethree/{id}', [UserroleController::class, 'roleupdatethree'])->name('roleupdatethree');
    Route::get('/userrole', [UserroleController::class, 'index'])->name('index');



    // blog
    Route::get('/blogs', [BlogController::class, 'index'])->name('index');
    Route::post('/blogs', [BlogController::class, 'blogscreate'])->name('blogscreate');
    Route::get('/blogsdelete/{id}', [BlogController::class, 'blogsdelete'])->name('blogsdelete');
    Route::post('/blogsupdate/{id}', [BlogController::class, 'blogsupdate'])->name('blogsupdate');

    // static_ info
    Route::get('/staticinfo', [StaticinfoController::class, 'index'])->name('index');
    Route::post('/statichomeupdate/{id}', [StaticinfoController::class, 'statichomeupdate'])->name('statichomeupdate');
    Route::post('/staticaboutupdate/{id}', [StaticinfoController::class, 'staticaboutupdate'])->name('staticaboutupdate');
    Route::post('/staticserviceupdate/{id}', [StaticinfoController::class, 'staticserviceupdate'])->name('staticserviceupdate');
    Route::post('/staticshowcaseupdate/{id}', [StaticinfoController::class, 'staticshowcaseupdate'])->name('staticshowcaseupdate');
    Route::post('/staticpricingupdate/{id}', [StaticinfoController::class, 'staticpricingupdate'])->name('staticpricingupdate');
    Route::post('/staticteamupdate/{id}', [StaticinfoController::class, 'staticteamupdate'])->name('staticteamupdate');
    Route::post('/staticblogupdate/{id}', [StaticinfoController::class, 'staticblogupdate'])->name('staticblogupdate');
    Route::post('/staticcontactupdate/{id}', [StaticinfoController::class, 'staticcontactupdate'])->name('staticcontactupdate');      
  
    // Pricing description
    Route::get('/pricingslider', [PricingController::class, 'index'])->name('index');
    Route::post('/pricingslider', [PricingController::class, 'pricingslidercreate'])->name('pricingslidercreate');
    Route::post('/pricingsliderupdate/{id}', [PricingController::class, 'pricingsliderupdate'])->name('pricingsliderupdate');
    Route::get('/pricingsliderdelete/{id}', [PricingController::class, 'pricingsliderdelete'])->name('pricingsliderdelete');

    // Shopping
    Route::get('/shopping', [ShoppingController::class, 'index'])->name('index');
    // Route::post('/shopping', [ShoppingController::class, 'filter'])->name('filter');

});
Route::get('/blogpages', [BlogpagesController::class, 'index'])->name('index');

  
