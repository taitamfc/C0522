<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// use App\Http\Controllers\ProductController;
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

Route::get('/',function(){
    return view('admin.layouts.master');
});

Route::get('products/trash',[App\Http\Controllers\ProductController::class,'trash']);
Route::resource('products',App\Http\Controllers\ProductController::class);
/*
prefix: products
    GET    /                        products.index
    GET    /create                  products.create
    POST   /store                   products.store
    GET    /{id}/edit               products.edit
    PUT    /{id}/update             products.update
    GET    /{id}                    products.show
    DELETE /{id}                    products.destroy
*/

Route::get('tao_session',function(Request $request){
    
    // $_SESSION['user'] = 'Nguyen Van A';
    // Tao session
    $request->session()->put('user', 'Nguyen Van A');

    //lay ra
    $value = $request->session()->get('user');
    
    //xoa
    $request->session()->forget('user');

    //lay ra sau khi xoa
    $value = $request->session()->get('user');
});

Route::get('xoa_session',function(Request $request){
    session()->forget('count');
});
Route::get('tao_session_global',function(Request $request){
    
    // $_SESSION['user'] = 'Nguyen Van A';
    // Tao session
    session(['user' => 'Nguyen Van A']);

    //lay ra
    $value = session()->get('user');
    
    //xoa
    session()->forget('user');

    //lay ra sau khi xoa
    $value = session()->get('user');

    dd($value);
});

Route::get('xem_bai_viet',function(Request $request){
    if (session()->exists('count')) {
        $count = session()->get('count');
    }else{
        session()->put('count', 0);
        $count = 0;
    }
    // $count = $count + 1;
    // session()->put('count', $count);

    session()->increment('count');

    return redirect('xem_luot_count');
});
Route::get('xem_luot_count',function(Request $request){
    $count = session()->get('count');
    echo $count;
});


Route::get('thanh_cong',function(){

    // Chuyển đổi ngôn ngữ
    $lang = session()->get('lang');
    App::setlocale($lang);

    echo __('messages.msg_ok', ['name' => 'kết quả']);
    echo '<br>';
    echo trans_choice('messages.apples', 20);
    echo '<br>';
    echo __('messages.msg_error', ['name' => 'kết quả']);

    echo '<br>';
    echo __('MSG_OK');
    echo '<br>';
    echo __('MSG_ERROR');
});

Route::get('change_lang/{lang}',function( $lang ){
    session(['lang'=>$lang]);
    return redirect('thanh_cong');
});