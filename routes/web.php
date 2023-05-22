<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{AdminauthController,ProfileController,UserController};

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

Route::get('/', function () {
    return view('admin.login');
});


Route::get('/clear-cache', function () {

  $exit = Artisan::call('cache:clear');
  $exit=Artisan::call('optimize');
  $exit=Artisan::call('route:cache');
  $exit=Artisan::call('route:clear');
  $exit=Artisan::call('view:clear');
  $exit=Artisan::call('config:cache');
  return 'success';
});

Route::get('admin/login',[AdminauthController::class,'getLogin'])->name('getLogin');
Route::post('admin/login',[AdminauthController::class,'postLogin'])->name('postLogin');
Route::group(['middleware'=>['AccountChacker']],function(){
  Route::get('/admin/logout',[ProfileController::class,'logout'])->name('logout');
  Route::get('/admin/dashboards',[UserController::class,'dashboards'])->name('dashboards');

  //PMT
  Route::get('/admin/create_contact',[UserController::class,'create_contact'])->name('create_contact');
  Route::post('/admin/store_contact',[UserController::class,'store_contact'])->name('store_contact');
  Route::get('/admin/contact_lists',[UserController::class,'contact_lists'])->name('contact_lists');
  Route::get('/admin/view_contact/{id}',[UserController::class,'view_contact'])->name('view_contact');
  Route::get('/admin/edit_contact/{id}',[UserController::class,'edit_contact'])->name('edit_contact');
  Route::post('/admin/update_contact/{id}',[UserController::class,'update_contact'])->name('update_contact');
  Route::get('/admin/delete_contact/{id}',[UserController::class,'delete_contact'])->name('delete_contact');
  
  //Accounts
  Route::get('/admin/create_account',[UserController::class,'create_account'])->name('create_account');
  Route::post('/admin/store_account',[UserController::class,'store_account'])->name('store_account');
  Route::get('/admin/account_lists',[UserController::class,'account_lists'])->name('account_lists');
  Route::get('/admin/view_account/{id}',[UserController::class,'view_account'])->name('view_account');
  Route::get('/admin/edit_account/{id}',[UserController::class,'edit_account'])->name('edit_account');
  Route::get('/admin/delete_account/{id}',[UserController::class,'delete_account'])->name('delete_account');
  Route::post('/admin/update_account/{id}',[UserController::class,'update_account'])->name('update_account');
  
  Route::post('/admin/add_comment',[UserController::class,'add_comment'])->name('add_comment');
  Route::post('/admin/add_comment_edit',[UserController::class,'add_comment_edit'])->name('add_comment_edit');
  Route::post('/admin/add_comment_contact',[UserController::class,'add_comment_contact'])->name('add_comment_contact');
  Route::post('/admin/add_comment_contact_edit',[UserController::class,'add_comment_contact_edit'])->name('add_comment_contact_edit');
  
  Route::get('/admin/master_data',[UserController::class,'master_data'])->name('master_data');
  Route::get('/admin/account_type',[UserController::class,'account_type'])->name('account_type');
  Route::post('/admin/store_account_type',[UserController::class,'store_account_type'])->name('store_account_type');

  Route::get('/admin/source',[UserController::class,'source'])->name('source');
  Route::post('/admin/store_source',[UserController::class,'store_source'])->name('store_source');

  Route::get('/admin/soap_source',[UserController::class,'soap_source'])->name('soap_source');
  Route::post('/admin/store_soap_source',[UserController::class,'store_soap_source'])->name('store_soap_source');

  Route::get('/admin/soap_status',[UserController::class,'soap_status'])->name('soap_status');
  Route::post('/admin/store_soap_status',[UserController::class,'store_soap_status'])->name('store_soap_status');

  Route::get('/admin/marketing_soap_status',[UserController::class,'marketing_soap_status'])->name('marketing_soap_status');
  Route::post('/admin/store_marketing_soap_status',[UserController::class,'store_marketing_soap_status'])->name('store_marketing_soap_status');

  Route::get('/admin/of_contact_added',[UserController::class,'of_contact_added'])->name('of_contact_added');
  Route::post('/admin/store_of_contact_added',[UserController::class,'store_of_contact_added'])->name('store_of_contact_added');
  
  Route::get('file-import-export', [UserController::class, 'fileImportExport'])->name('file-import-export');
  //Route::post('file-import', [UserController::class, 'fileImport'])->name('file-import');
  Route::post('importData', [UserController::class, 'importData'])->name('importData');
  
  Route::get('file-import-export-account', [UserController::class, 'fileImportExportAccounts'])->name('file-import-export-account');
  Route::post('importDataAccount', [UserController::class, 'importDataAccount'])->name('importDataAccount');
  
  Route::post('/admin/postAccount',[UserController::class,'postAccount'])->name('postAccount');
  Route::post('/admin/postContact',[UserController::class,'postContact'])->name('postContact');
  
  Route::post('/admin/listContact', [UserController::class, 'listContact'])->name('listContact');
  Route::post('/admin/listAccount', [UserController::class, 'listAccount'])->name('listAccount');
  
  //Meetings
  Route::get('/admin/create_meeting',[UserController::class,'create_meeting'])->name('create_meeting');
  Route::post('/admin/store_meeting',[UserController::class,'store_meeting'])->name('store_meeting');
  Route::get('/admin/meeting_lists',[UserController::class,'meeting_lists'])->name('meeting_lists');
  Route::post('/admin/listMeetings', [UserController::class, 'listMeetings'])->name('listMeetings');
  Route::get('/admin/view_meeting/{id}',[UserController::class,'view_meeting'])->name('view_meeting');
  Route::get('/admin/edit_meeting/{id}',[UserController::class,'edit_meeting'])->name('edit_meeting');
  Route::post('/admin/update_meeting/{id}',[UserController::class,'update_meeting'])->name('update_meeting');
  Route::post('/admin/add_comment_meeting',[UserController::class,'add_comment_meeting'])->name('add_comment_meeting');
  Route::post('/admin/add_comment_meeting_edit',[UserController::class,'add_comment_meeting_edit'])->name('add_comment_meeting_edit');
  Route::get('/admin/delete_meeting/{id}',[UserController::class,'delete_meeting'])->name('delete_meeting');
  
  Route::post('/admin/get_contact',[UserController::class,'get_contact'])->name('get_contact');
  
  Route::post('importDataNew', [UserController::class, 'importDataNew'])->name('importDataNew');
  
  //leads
  Route::get('/admin/create_lead',[UserController::class,'create_lead'])->name('create_lead');
  Route::get('/admin/lead_lists',[UserController::class,'lead_lists'])->name('lead_lists');
  Route::post('/admin/listLead', [UserController::class, 'listLead'])->name('listLead');
  Route::get('/admin/view_lead/{id}',[UserController::class,'view_lead'])->name('view_lead');
  Route::get('/admin/edit_lead/{id}',[UserController::class,'edit_lead'])->name('edit_lead');
  Route::post('/admin/update_lead/{id}',[UserController::class,'update_lead'])->name('update_lead');

});