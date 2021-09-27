<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

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
Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('index');
Route::get('/logins', function () {
    return view('auth/login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');  
})->name('dashboard');
Route::group(['middleware' => 'auth'], function() {
    // Authenticated user routes
          // Begin ----- USERLIST -----------
      Route::get('/userlist', [App\Http\Controllers\UserlistController::class, 'userlist'])->name('userlist');
      Route::post('/userlist', [App\Http\Controllers\UserlistController::class, 'usercreate'])->name('usercreate');
      Route::get('/userdelete/{id}/{name}', [App\Http\Controllers\UserlistController::class, 'userdelete'])->name('userdelete');
      Route::post('/userupdate/{id}', [App\Http\Controllers\UserlistController::class, 'userupdate'])->name('userupdate');
      // END -------- USERLIST ----------
      //-------------- BEGIN companymanagement-------------
      Route::get('companymanagement', [App\Http\Controllers\AllusercompanymanagementController::class, 'index'])->name('index');
      Route::post('companymanagement', [App\Http\Controllers\AllusercompanymanagementController::class, 'companymanagementcreate'])->name('companymanagementcreate');
      Route::get('/companymanagementdelete/{id}/{company}', [App\Http\Controllers\AllusercompanymanagementController::class, 'companymanagementdelete'])->name('companymanagementdelete');
      Route::post('/companymanagementupdate/{id}', [App\Http\Controllers\AllusercompanymanagementController::class, 'companymanagementupdate'])->name('companymanagementupdate');
      // END ----------------- companymanagement ------------
      // // ---------BEGIN category-------------
      Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('index');
      Route::post('/category', [App\Http\Controllers\CategoryController::class, 'categorycreate'])->name('categorycreate');
      Route::get('/categorydelete/{id}/{category}', [App\Http\Controllers\CategoryController::class, 'categorydelete'])->name('categorydelete');
      Route::post('/categoryupdate/{id}', [App\Http\Controllers\CategoryController::class, 'categoryupdate'])->name('categoryupdate');
      // // -------END category -----------------

      // // ---------BEGIN Item-------------
      Route::get('/items', [App\Http\Controllers\ItemsController::class, 'index'])->name('index');
      Route::post('/items', [App\Http\Controllers\ItemsController::class, 'itemscreate'])->name('itemscreate');
      Route::get('/itemsdelete/{id}', [App\Http\Controllers\ItemsController::class, 'itemsdelete'])->name('itemsdelete');
      Route::post('/itemsupdate/{id}', [App\Http\Controllers\ItemsController::class, 'itemsupdate'])->name('itemsupdate');
      // // -------END Item -----------------

      // // ---------BEGIN Item Status-------------
      Route::get('/itemstatus', [App\Http\Controllers\ItemstatusController::class, 'index'])->name('index');
      Route::post('/itemstatusupdate/{id}', [App\Http\Controllers\ItemstatusController::class, 'itemstatusupdate'])->name('itemstatusupdate');
      // // -------END Item Status -----------------

      // // ---------BEGIN CompanySetting-------------
      Route::get('/companysetting', [App\Http\Controllers\CompanysettingController::class, 'index'])->name('index');
      Route::post('/companysettingupdate/{id}', [App\Http\Controllers\CompanysettingController::class, 'companysettingupdate'])->name('companysettingupdate');
      // // -------END CompanySetting -----------------

      // // ---------BEGIN SiteInfo-------------
      Route::get('/siteinfo', [App\Http\Controllers\SiteinfoController::class, 'index'])->name('index');
      Route::post('/siteinfoupdate/{id}', [App\Http\Controllers\SiteinfoController::class, 'siteinfoupdate'])->name('siteinfoupdate');
      // // -------END SiteInfo -----------------

       // // ---------BEGIN Currency-------------
       Route::get('/exchange', [App\Http\Controllers\ExchangeController::class, 'index'])->name('index');
       Route::post('/exchangeupdate/{id}', [App\Http\Controllers\ExchangeController::class, 'exchangeupdate'])->name('exchangeupdate');
       // // -------END Currency -----------------

      // // ---------BEGIN REPORT-------------
    //   Route::get('/report', [App\Http\Controllers\ReportController::class, 'index'])->name('index');
    //   Route::post('/report', [App\Http\Controllers\ReportController::class, 'report'])->name('report');
      Route::get('export/{name}', [App\Http\Controllers\MyController::class, 'export'])->name('export');
      Route::get('report', [App\Http\Controllers\MyController::class, 'importExportView']);
      Route::post('import', [App\Http\Controllers\MyController::class, 'import'])->name('import');
      // // -------END REPORT -----------------

      // Route::resource('issuereporting', [App\Http\Controllers\Issuereporting::class])->name('voterupdate');
      Route::get('logs', [App\Http\Controllers\LogsController::class, 'index'])->name('index');
    });
  
