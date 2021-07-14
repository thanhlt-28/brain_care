<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\DepressionController;
use App\Http\Controllers\DiaController;
use App\Http\Controllers\DianoseController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SymptomController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserCustomerController;
use App\Http\Requests\TypeRequest;
use App\Models\Medicine;
use Illuminate\Console\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return view('dashboard');
// });


Route::view('register', 'auth.register')->name('register');
Route::post('register', [RegisterController::class, 'postRegister'])->name('auth.postRegister');

Route::view('login', 'auth.login')->name('login');
Route::post('login', [LoginController::class, 'postLogin'])->name('auth.postLogin');
Route::any('logout', function () {
    Auth::logout();
    return redirect(route('login'));
})->name('logout');

Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');
    Route::get('gioi-thieu', function () {
        return view('about');
    })->name('about');
    Route::get('tin-tuc', function () {
        return view('news');
    })->name('news');
    Route::get('lien-he', function () {
        return view('contact');
    })->name('contact');

    Route::prefix('chan-doan')->group(function () {
        //........Trầm cảm
        Route::get('ket-qua-tram-cam', [DianoseController::class, 'index'])->name('tram-cam.views');
        Route::get('them-chan-doan-tram-cam', [DianoseController::class, 'create'])->name('tram-cam.create');
        Route::post('luu-lai', [DianoseController::class, 'store'])->name('tram-cam.store');
        Route::get('xoa-ket-qua/{id}', [DianoseController::class, 'destroy'])->name('tram-cam.destroy');
        Route::get('chi-tiet/{id}', [DianoseController::class, 'detail'])->name('tram-cam.index');
        Route::get('don-thuoc/{id}', [DianoseController::class, 'thuoctramcam'])->name('tram-cam.viewer');
        Route::post('update/{id}', [DianoseController::class, 'update'])->name('tram-cam.update');
        // Route::get('dieu-tri-tram-cam', [TreatmentController::class, 'indexof'])->name('tram-cam.index-2');
        //........Nghiện rượu
        Route::get('ket-qua-nr', [DianoseController::class, 'index_ngruou'])->name('nghien-ruou.views');
        Route::get('them-chan-doan-nr', [DianoseController::class, 'create_ngruou'])->name('nghien-ruou.create');
        Route::post('luu-lai-nr', [DianoseController::class, 'store'])->name('nghien-ruou.store');
        Route::get('xoa-ket-qua-nr/{id}', [DianoseController::class, 'destroy_ngruou'])->name('nghien-ruou.destroy');
        Route::get('nghien-ruou/{id}', [DianoseController::class, 'detail_ngruou'])->name('nghien-ruou.index');
        Route::get('don-thuoc-nr/{id}', [DianoseController::class, 'thuocnghienruou'])->name('nghien-ruou.viewer');
        Route::post('nghien-ruou/{id}', [DianoseController::class, 'update_ngruou'])->name('nghien-ruou.update');
        //........Mất trí
        Route::get('ket-qua-mattri', [DianoseController::class, 'index_mattri'])->name('mat-tri.views');
        Route::get('them-chan-doan-mattri', [DianoseController::class, 'create_mattri'])->name('mat-tri.create');
        Route::post('luu-lai-mattri', [DianoseController::class, 'store'])->name('mat-tri.store');
        Route::get('xoa-ket-qua-mattri/{id}', [DianoseController::class, 'destroy_mattri'])->name('mat-tri.destroy');
        Route::get('don-thuoc-mattri/{id}', [DianoseController::class, 'thuocmattri'])->name('mat-tri.viewer');
        Route::get('ket-qua-mattri/{id}', [DianoseController::class, 'detail_mattri'])->name('mat-tri.index');
        Route::post('ket-qua-mattri/{id}', [DianoseController::class, 'update_mattri'])->name('mat-tri.update');
        //........Loạn thần
        Route::get('ket-qua-loanthan', [DianoseController::class, 'index_lthan'])->name('loan-than.views');
        Route::get('them-chan-doan-loanthan', [DianoseController::class, 'create_lthan'])->name('loan-than.create');
        Route::post('luu-lai-loanthan', [DianoseController::class, 'store_lthan'])->name('loan-than.store');
        Route::get('xoa-ket-qua-loanthan/{id}', [DianoseController::class, 'destroy_lthan'])->name('loan-than.destroy');
        Route::get('don-thuoc-loanthan/{id}', [DianoseController::class, 'thuoc_lthan'])->name('loan-than.viewer');
        Route::get('ket-qua-loanthan/{id}', [DianoseController::class, 'detail_lthan'])->name('loan-than.index');
        Route::post('ket-qua-loanthan/{id}', [DianoseController::class, 'update_lthan'])->name('loan-than.update');
        //........Lo âu
        Route::get('ket-qua-lo-au', [DianoseController::class, 'index_loau'])->name('lo-au.views');
        Route::get('them-chan-doan-lo-au', [DianoseController::class, 'create_loau'])->name('lo-au.create');
        Route::post('luu-lai-lo-au', [DianoseController::class, 'store_loau'])->name('lo-au.store');
        Route::get('xoa-ket-qua-lo-au/{id}', [DianoseController::class, 'destroy_loau'])->name('lo-au.destroy');
        Route::get('don-thuoc-lo-au/{id}', [DianoseController::class, 'thuoc_loau'])->name('lo-au.viewer');
        Route::get('ket-qua-lo-au/{id}', [DianoseController::class, 'detail_loau'])->name('lo-au.index');
        Route::post('ket-qua-lo-au/{id}', [DianoseController::class, 'update_loau'])->name('lo-au.update');
        //........Hưng cảm
        Route::get('ket-qua-hung-cam', [DianoseController::class, 'index_hcam'])->name('hung-cam.views');
        Route::get('them-chan-doan-hung-cam', [DianoseController::class, 'create_hcam'])->name('hung-cam.create');
        Route::post('luu-lai-hung-cam', [DianoseController::class, 'store_hcam'])->name('hung-cam.store');
        Route::get('xoa-ket-qua-hung-cam/{id}', [DianoseController::class, 'destroy_hcam'])->name('hung-cam.destroy');
        Route::get('don-thuoc-hung-cam/{id}', [DianoseController::class, 'thuoc_hcam'])->name('hung-cam.viewer');
        Route::get('ket-qua-hung-cam/{id}', [DianoseController::class, 'detail_hcam'])->name('hung-cam.index');
        Route::post('ket-qua-hung-cam/{id}', [DianoseController::class, 'update_hcam'])->name('hung-cam.update');
        //........Hoảng loạn
        Route::get('ket-qua-hoang-loan', [DianoseController::class, 'index_hloan'])->name('hoang-loan.views');
        Route::get('them-chan-doan-hoang-loan', [DianoseController::class, 'create_hloan'])->name('hoang-loan.create');
        Route::post('luu-lai-hoang-loan', [DianoseController::class, 'store_hloan'])->name('hoang-loan.store');
        Route::get('xoa-ket-qua-hoang-loan/{id}', [DianoseController::class, 'destroy_hloan'])->name('hoang-loan.destroy');
        Route::get('don-thuoc-hoang-loan/{id}', [DianoseController::class, 'thuoc_hloan'])->name('hoang-loan.viewer');
        Route::get('ket-qua-hoang-loan/{id}', [DianoseController::class, 'detail_hloan'])->name('hoang-loan.index');
        Route::post('ket-qua-hoang-loan/{id}', [DianoseController::class, 'update_hloan'])->name('hoang-loan.update');
        //........Động kinh
        Route::get('ket-qua-dong-kinh', [DianoseController::class, 'index_dongkinh'])->name('dong-kinh.views');
        Route::get('them-chan-doan-dong-kinh', [DianoseController::class, 'create_dongkinh'])->name('dong-kinh.create');
        Route::post('luu-lai-dong-kinh', [DianoseController::class, 'store_dongkinh'])->name('dong-kinh.store');
        Route::get('xoa-ket-qua-dong-kinh/{id}', [DianoseController::class, 'destroy_dongkinh'])->name('dong-kinh.destroy');
        Route::get('don-thuoc-dong-kinh/{id}', [DianoseController::class, 'thuoc_dongkinh'])->name('dong-kinh.viewer');
        Route::get('ket-qua-dong-kinh/{id}', [DianoseController::class, 'detail_dongkinh'])->name('dong-kinh.index');
        Route::post('ket-qua-dong-kinh/{id}', [DianoseController::class, 'update_dongkinh'])->name('dong-kinh.update');
        //........Ám ảnh
        Route::get('ket-qua-am-anh', [DianoseController::class, 'index_amanh'])->name('am-anh.views');
        Route::get('them-chan-doan-am-anh', [DianoseController::class, 'create_amanh'])->name('am-anh.create');
        Route::post('luu-lai-am-anh', [DianoseController::class, 'store_amanh'])->name('am-anh.store');
        Route::get('xoa-ket-qua-am-anh/{id}', [DianoseController::class, 'destroy_amanh'])->name('am-anh.destroy');
        Route::get('don-thuoc-am-anh/{id}', [DianoseController::class, 'thuoc_amanh'])->name('am-anh.viewer');
        Route::get('ket-qua-am-anh/{id}', [DianoseController::class, 'detail_amanh'])->name('am-anh.index');
        Route::post('ket-qua-am-anh/{id}', [DianoseController::class, 'update_amanh'])->name('am-anh.update');
    });

    Route::prefix('dieu-tri')->group(function () {
        Route::get('thuoc-tram-cam', [DepressionController::class, 'indexof1'])->name('tramcam.index-3');
        Route::get('thuoc-hung-cam', [DepressionController::class, 'indexof2'])->name('hungcam.index-3');
        Route::get('thuoc-lo-au', [DepressionController::class, 'indexof3'])->name('loau.index-3');
        Route::get('thuoc-hoang-loan', [DepressionController::class, 'indexof4'])->name('hoangloan.index-3');
        Route::get('thuoc-am-anh', [DepressionController::class, 'indexof5'])->name('amanh.index-3');
        Route::get('thuoc-mat-tri', [DepressionController::class, 'indexof6'])->name('mattri.index-3');
        Route::get('thuoc-dong-kinh', [DepressionController::class, 'indexof7'])->name('dongkinh.index-3');
        Route::get('thuoc-loan-than', [DepressionController::class, 'indexof8'])->name('loanthan.index-3');
        Route::get('thuoc-nghien-ruou', [DepressionController::class, 'indexof9'])->name('nghienruou.index-3');

        // Trầm cảm
        Route::get('dieu-tri-tc', [TreatmentController::class, 'index'])->name('tramcam.views');
        Route::get('theo-doi-tc', [TreatmentController::class, 'create'])->name('tramcam.create');
        Route::post('luu-lai-tc', [TreatmentController::class, 'store'])->name('tramcam.store');
        Route::get('chi-tiet/{id}', [TreatmentController::class, 'details'])->name('tramcam.index');
        Route::post('dieu-tri-update/{id}', [TreatmentController::class, 'updated'])->name('tramcam.updated');
        Route::get('xoa/{id}', [TreatmentController::class, 'destroy'])->name('tramcam.destroy');
        // Nghiện rượu
        Route::get('dieu-tri-nr', [TreatmentController::class, 'index_ngruou'])->name('nghienruou.views');
        Route::get('theo-doi-nr', [TreatmentController::class, 'create_ngruou'])->name('nghienruou.create');
        Route::post('luu-lai-nr', [TreatmentController::class, 'store_ngruou'])->name('nghienruou.store');
        Route::get('chi-tiet-nr/{id}', [TreatmentController::class, 'details_ngruou'])->name('nghienruou.index');
        Route::post('dieu-tri-nr/{id}', [TreatmentController::class, 'updated_ngruou'])->name('nghienruou.updated');
        Route::get('xoa-nr/{id}', [TreatmentController::class, 'destroy'])->name('nghienruou.destroy');
        // Mất trí
        Route::get('dieu-tri-mtri', [TreatmentController::class, 'index_mattri'])->name('mattri.views');
        Route::get('theo-doi-mtri', [TreatmentController::class, 'create_mattri'])->name('mattri.create');
        Route::post('luu-lai-mtri', [TreatmentController::class, 'store_mattri'])->name('mattri.store');
        Route::get('chi-tiet-mtri/{id}', [TreatmentController::class, 'details_mattri'])->name('mattri.index');
        Route::post('dieu-tri-mtri/{id}', [TreatmentController::class, 'updated_mattri'])->name('mattri.updated');
        Route::get('xoa-mtri/{id}', [TreatmentController::class, 'destroy'])->name('mattri.destroy');
        // Loạn thần
        Route::get('dieu-tri-loanthan', [TreatmentController::class, 'index_loanthan'])->name('loanthan.views');
        Route::get('theo-doi-loanthan', [TreatmentController::class, 'create_loanthan'])->name('loanthan.create');
        Route::post('luu-lai-loanthan', [TreatmentController::class, 'store_loanthan'])->name('loanthan.store');
        Route::get('chi-tiet-loanthan/{id}', [TreatmentController::class, 'details_loanthan'])->name('loanthan.index');
        Route::post('dieu-tri-loanthan/{id}', [TreatmentController::class, 'updated_loanthan'])->name('loanthan.updated');
        Route::get('xoa-loanthan/{id}', [TreatmentController::class, 'destroy'])->name('loanthan.destroy');
        // Lo âu
        Route::get('dieu-tri-loau', [TreatmentController::class, 'index_loau'])->name('loau.views');
        Route::get('theo-doi-loau', [TreatmentController::class, 'create_loau'])->name('loau.create');
        Route::post('luu-lai-loau', [TreatmentController::class, 'store_loau'])->name('loau.store');
        Route::get('chi-tiet-loau/{id}', [TreatmentController::class, 'details_loau'])->name('loau.index');
        Route::post('dieu-tri-loau/{id}', [TreatmentController::class, 'updated_loau'])->name('loau.updated');
        Route::get('xoa-loau/{id}', [TreatmentController::class, 'destroy'])->name('loau.destroy');
        // Hưng cảm
        Route::get('dieu-tri-hungcam', [TreatmentController::class, 'index_hcam'])->name('hungcam.views');
        Route::get('theo-doi-hungcam', [TreatmentController::class, 'create_hcam'])->name('hungcam.create');
        Route::post('luu-lai-hungcam', [TreatmentController::class, 'store_hcam'])->name('hungcam.store');
        Route::get('chi-tiet-hungcam/{id}', [TreatmentController::class, 'details_hcam'])->name('hungcam.index');
        Route::post('dieu-tri-hungcam/{id}', [TreatmentController::class, 'updated_hcam'])->name('hungcam.updated');
        Route::get('xoa-hungcam/{id}', [TreatmentController::class, 'destroy'])->name('hungcam.destroy');
        // Hoảng loạn
        Route::get('dieu-tri-hoangloan', [TreatmentController::class, 'index_hloan'])->name('hoangloan.views');
        Route::get('theo-doi-hoangloan', [TreatmentController::class, 'create_hloan'])->name('hoangloan.create');
        Route::post('luu-lai-hoangloan', [TreatmentController::class, 'store_hloan'])->name('hoangloan.store');
        Route::get('chi-tiet-hoangloan/{id}', [TreatmentController::class, 'details_hloan'])->name('hoangloan.index');
        Route::post('dieu-tri-hoangloan/{id}', [TreatmentController::class, 'updated_hloan'])->name('hoangloan.updated');
        Route::get('xoa-hoangloan/{id}', [TreatmentController::class, 'destroy'])->name('hoangloan.destroy');
        // Động kinh
        Route::get('dieu-tri-dongkinh', [TreatmentController::class, 'index_dkinh'])->name('dongkinh.views');
        Route::get('theo-doi-dongkinh', [TreatmentController::class, 'create_dkinh'])->name('dongkinh.create');
        Route::post('luu-lai-dongkinh', [TreatmentController::class, 'store_dkinh'])->name('dongkinh.store');
        Route::get('chi-tiet-dongkinh/{id}', [TreatmentController::class, 'details_dkinh'])->name('dongkinh.index');
        Route::post('dieu-tri-dongkinh/{id}', [TreatmentController::class, 'updated_dkinh'])->name('dongkinh.updated');
        Route::get('xoa-dongkinh/{id}', [TreatmentController::class, 'destroy'])->name('dongkinh.destroy');
        // Ám ảnh
        Route::get('dieu-tri-amanh', [TreatmentController::class, 'index_amanh'])->name('amanh.views');
        Route::get('theo-doi-amanh', [TreatmentController::class, 'create_amanh'])->name('amanh.create');
        Route::post('luu-lai-amanh', [TreatmentController::class, 'store_amanh'])->name('amanh.store');
        Route::get('chi-tiet-amanh/{id}', [TreatmentController::class, 'details_amanh'])->name('amanh.index');
        Route::post('dieu-tri-amanh/{id}', [TreatmentController::class, 'updated_amanh'])->name('amanh.updated');
        Route::get('xoa-amanh/{id}', [TreatmentController::class, 'destroy'])->name('amanh.destroy');
    });
});


Route::prefix('/admin')->middleware('check-admin-role')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::prefix('cates')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('cates.index');
        Route::get('them-danh-muc', [CategoryController::class, 'create'])->name('cates.add');
        Route::post('them-danh-muc', [CategoryController::class, 'store'])->name('cates.store');
        Route::get('remove/{id}', [CategoryController::class, 'destroy'])->name('cates.destroy');
        Route::get('sua-danh-muc/{id}', [CategoryController::class, 'edit'])->name('cates.edit');
        Route::post('sua-danh-muc/{id}', [CategoryController::class, 'update'])->name('cates.update');
    });

    Route::prefix('posts')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('posts.index');
        Route::get('them-bai-viet', [PostController::class, 'create'])->name('posts.create');
        Route::post('them-bai-viet', [PostController::class, 'store'])->name('posts.store');
        Route::get('sua-bai-viet/{id}', [PostController::class, 'edit'])->name('posts.edit');
        Route::post('sua-bai-viet/{id}', [PostController::class, 'update'])->name('posts.update');
        Route::get('remove/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
    });

    // ---------Types
    Route::prefix('type')->group(function () {
        Route::get('/', [TypeController::class, 'show'])->name('type.index');
        Route::get('loai-benh', [TypeController::class, 'create'])->name('type.add');
        Route::post('loai-benh', [TypeController::class, 'store'])->name('type.store');
        Route::get('remove/{id}', [TypeController::class, 'destroy'])->name('type.destroy');
        Route::get('edit/{id}', [TypeController::class, 'edit'])->name('type.edit');
        Route::post('edit/{id}', [TypeController::class, 'update'])->name('type.update');
    });

    // ---------Syms
    Route::prefix('sym')->group(function () {
        Route::get('/', [TypeController::class, 'index'])->name('sym.index');
        Route::get('them-trieu-chung', [TypeController::class, 'addnew'])->name('sym.addnew');
        Route::post('them-trieu-chung', [TypeController::class, 'storage'])->name('sym.storage');
        Route::get('remove/{id}', [TypeController::class, 'remove'])->name('sym.remove');
        Route::get('edited/{id}', [TypeController::class, 'edited'])->name('sym.edited');
        Route::post('edited/{id}', [TypeController::class, 'updated'])->name('sym.updated');
    });
    // ---------Fields
    Route::prefix('field')->group(function () {
        Route::get('/', [FieldController::class, 'show'])->name('field.index');
        Route::get('them', [FieldController::class, 'create'])->name('field.add');
        Route::post('them', [FieldController::class, 'store'])->name('field.store');
        Route::get('remove/{id}', [FieldController::class, 'remove'])->name('field.remove');
        Route::get('edit/{id}', [FieldController::class, 'edit'])->name('field.edit');
        Route::post('edit/{id}', [FieldController::class, 'update'])->name('field.update');
    });
});

Route::get('chi-tiet/{id}', [PostController::class, 'details'])->name('posts.details');

// Route::resource('diagnose', DiaController::class)->only(['index', 'create', 'store', 'edit', 'destroy']);
// Route::post('diagnose/{id}', [DiaController::class, 'update'])->name('diagnose.update');

// Search Medicine
Route::get('search', [MedicineController::class, 'search']);
Route::post('autocomplete', [MedicineController::class, 'AutoSearch'])->name('autocomplete');
Route::post('save', [DianoseController::class, 'store'])->name('store');
// Route::post('save', [TreatmentController::class, 'stores'])->name('stores');
Route::get('show', [DiaController::class, 'index']);
Route::get('getallfields', [DiaController::class, 'getAllFields'])->name('getallfields');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
