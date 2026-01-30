<?php

use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\backend\ApprovedCertificateController;
use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\AwardWiningController;
use App\Http\Controllers\backend\BusinessRegisterController;
use App\Http\Controllers\backend\CommentController;
use App\Http\Controllers\backend\CredibilityCertificateController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\LocalSalesController;
use App\Http\Controllers\backend\MediaController;
use App\Http\Controllers\backend\NewsController;
use App\Http\Controllers\backend\ProductForExportController;
use App\Http\Controllers\frontend\ClientContrller;
use App\Http\Controllers\frontend\TelegramController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*============================================================================================
                                    @@ Route Frontend
============================================================================================ */

// Route::get("/client/login", [AuthClientController::class,"cliendtLogin"])->name('client.login');
// Route::get("/client/register", [AuthClientController::class,"cliendtRegister"])->name('client.register');
// Route::post('/client/submit/register', [AuthClientController::class,'clientSubmitRegister'])->name('client.submit.register');
// Route::post('/client/submit/login', [AuthClientController::class,'clientSubmitLogin'])->name('client.submit.login');
// Route::post('/submit/client/logout',[AuthClientController::class,'submitClientLogout'])->name('client.logout.submit');
// // Route::middleware(['auth:customer'])->group(function () {});
// Route::get('/client/view/user', [AuthClientController::class,'viewUser'])->name('view.user');

// // Google
// Route::get('auth/google', [SocialLoginController::class, 'redirectToGoogle'])->name('google.login');
// Route::get('auth/google/callback', [SocialLoginController::class, 'handleGoogleCallback']);

// Facebook
// Route::get('auth/facebook', [SocialLoginController::class, 'redirectToFacebook'])->name('facebook.login');
// Route::get('auth/facebook/callback', [SocialLoginController::class, 'handleFacebookCallback']);
// FACEBOOK ROUTES
Route::get('/auth/facebook', [SocialLoginController::class, 'redirectToFacebook'])->name('facebook.login');
Route::get('/auth/facebook/callback', [SocialLoginController::class, 'handleFacebookCallback']);

// Button for buy alert to telegram
Route::post('/telegram-notify', [TelegramController::class, 'sendMessage'])->name('telegram.notify');
Route::get('/test-telegram', function () {
    $botToken = '7587916418:AAEzLlsLWCnIYlo0TPEPm0TRIRpcaP0VEyg';
    $chatId = '-4819861863'; // or '6821010793' for private test

    $response = Http::post("https://api.telegram.org/bot{$botToken}/sendMessage", [
        'chat_id' => $chatId,
        'text' => ' Hello from Laravel — Telegram integration works perfectly!',
    ]);

    return $response->json();
});

Route::get("/",[ClientContrller::class,"index"])->name("home");
Route::get("/export",[ClientContrller::class,'export'])->name('export');
Route::get("/about",[ClientContrller::class,'aboutUs'])->name('about');
Route::get('/news',[ClientContrller::class,'newsMedia'])->name('news');
Route::get('/career',[ClientContrller::class,'career'])->name('career');
Route::get('/contact',[ClientContrller::class,'contact'])->name('contact');


// Add comment of user or Customer
// Route::get('/comments', [ClientContrller::class, 'showComments'])->name('comments.show');
// Route::post('/comments', [ClientContrller::class, 'submitComment'])->name('comments.submit');



/*==========================================================================================================================================
                                                  @@ Route Backend
============================================================================================================================================ */
//=============================================== Auth=========================================================================================
Route::get('/admin/register', [AuthController::class,'register'])->name('register');
Route::get('/admin/login', [AuthController::class,'login'])->name('login');
Route::post('/submit/register', [AuthController::class,'submitRegister'])->name('submit.register');
Route::post('/submit/login', [AuthController::class,'submitLogin'])->name('submit.login');
// ============================================ Route Logout ===================================================================================
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::post('/submit/logout',[AuthController::class,'submitLogout'])->name('logout.submit');

Route::middleware(['auth:web'])->group(function () {
    
    //================================================= Dashboard====================================================================================
    Route::get('/admin',[DashboardController::class,'dashboard'])->name('admin');
    //=========================================== Profile View and Update=============================================================================

    Route::get('/admin/profile', [AuthController::class,'profile'])->name('profile');
    Route::post('/admin/submit_profile',[AuthController::class,'submitUpdateUser'])->name('submit.update.profile');
    // =========================================Local for sales of products============================================================================
    Route::get('/admin/sale',[LocalSalesController::class,'localSales'])->name('local.sales');
    Route::get('/admin/view',[LocalSalesController::class,'localSalesView'])->name('local.sales.view');
    // Submit to add Product for local sales
    Route::post('/admin/submit',[LocalSalesController::class,'submitToAddLocalProduct'])->name('submit.add.local');
    // Edit Product for lacal sales
    Route::get('/edit/local/sales/{id}',[LocalSalesController::class,'editLocalSales'])->name('edit.localsales');
    Route::post('/submit/edit/localsales',[LocalSalesController::class,'submitUpdateLocalsales'])->name('submit.update.localsales');
    // Remove Product for local selling
    Route::post('/remove/localSelling', [LocalSalesController::class,'removeLocalSelling'])->name('remove.local.selling');
    // =========================================Award Wining============================================================================
    Route::get('/add/award', [AwardWiningController::class,'addAwardWining'])->name('add.award');
    Route::get('/view/award', [AwardWiningController::class,'viewAwardWining'])->name('view.award');
    // sunmit ti add image new award
    Route::post('/submit/add/award', [AwardWiningController::class,'submitToaddAwrdWining'])->name('submit.award');
    // Update
    Route::get('/update/award/{id}', [AwardWiningController::class,'updateAward'])->name('update.award');
    Route::post('/submit/update/award', [AwardWiningController::class,'submitToUpdateAward'])->name('submit.update.award');
    // Remove
    Route::post('/remove/award', [AwardWiningController::class,'submitToRemove'])->name('submit.remove.award');
    // ========================================= Credibility Certificate =========================================================================
    Route::get('/add/credibility', [CredibilityCertificateController::class,'addCredibilityCertificate'])->name('add.credibility');
    Route::get('/view/credibility', [CredibilityCertificateController::class,'viewCredibilityCertificate'])->name('view.credibility');
    // sunmit ti add image new award
    Route::post('/submit/add/credibility', [CredibilityCertificateController::class,'submitToAddCredibilityCertificate'])->name('submit.credibility');
    // Update
    Route::get('/update/credibility/{id}', [CredibilityCertificateController::class,'updateCredibilityCertificate'])->name('update.credibility');
    Route::post('/submit/update/credibility', [CredibilityCertificateController::class,'submitToUpdateCredibilityCertificate'])->name('submit.update.credibility');
    // Remove
    Route::post('/remove/credibility', [CredibilityCertificateController::class,'submitToRemoveCer'])->name('submit.remove.credibility');
    // ========================================= Credibility Certificate =========================================================================
    Route::get('/add/export', [ProductForExportController::class,'addExport'])->name('add.export');
    Route::get('/view/export', [ProductForExportController::class,'viewExport'])->name('view.export');
    // submit to add new product
    Route::post('/submit/add/export', [ProductForExportController::class,'submitToAddExport'])->name('submit.add.export');
    // Update prodect for export
    Route::get('/update/export/{id}', [ProductForExportController::class,'updateExport'])->name('update.export');
    Route::post('/submit/update/export', [ProductForExportController::class,'submitToUpdateExport'])->name('submit.update.export');
    // Remove Export
    Route::post('/remove/export', [ProductForExportController::class,'removeExport'])->name('remove.export');
     // ========================================= Business Registeration =========================================================================
    Route::get('/add/Business', [BusinessRegisterController::class,'addBusinessCertificate'])->name('add.Business');
    Route::get('/view/Business', [BusinessRegisterController::class,'viewBusinessCertificate'])->name('view.Business');
    // sunmit ti add image new award
    Route::post('/submit/add/Business', [BusinessRegisterController::class,'submitToAddBusinessCertificate'])->name('submit.Business');
    // Update
    Route::get('/update/Business/{id}', [BusinessRegisterController::class,'updateBusinessCertificate'])->name('update.Business');
    Route::post('/submit/update/Business', [BusinessRegisterController::class,'submitToUpdateBusinessCertificate'])->name('submit.update.Business');
    // RemovesubmitToRemoveCer
    Route::post('/remove/Business', [BusinessRegisterController::class,'submitToRemoveBusiness'])->name('submit.remove.Business');
    // ========================================= Approved Certificate =========================================================================
    Route::get('/add/approved', [ApprovedCertificateController::class,'addApprovedCertificate'])->name('add.approved');
    Route::get('/view/approved', [ApprovedCertificateController::class,'viewApprovedCertificate'])->name('view.approved');
    // sunmit ti add image new award
    Route::post('/submit/add/approved', [ApprovedCertificateController::class,'submitToAddApprovedCertificate'])->name('submit.approved');
    // Update
    Route::get('/update/approved/{id}', [ApprovedCertificateController::class,'updateApprovedCertificate'])->name('update.approved');
    Route::post('/submit/update/approved', [ApprovedCertificateController::class,'submitToUpdateApprovedCertificate'])->name('submit.update.approved');
    // RemovesubmitToRemoveCer
    Route::post('/remove/approved', [ApprovedCertificateController::class,'submitToRemoveApproved'])->name('submit.remove.approved');
    // =========================================  Activity Media =========================================================================
    Route::get('/add/media', [MediaController::class,'addMedia'])->name('add.media');
    Route::get('/view/media', [MediaController::class,'viewMedia'])->name('view.media');
    // Summit to add new media
    Route::post('/submit/add/media', [MediaController::class,'submitToAddMedia'])->name('submit.add.media');
    // Update Media
    Route::get('/edit/media/{id}', [MediaController::class,'editMedia'])->name('edit.media');
    Route::post('/submit/edit/media', [MediaController::class,'submitToEditMedia'])->name('submit.update.media');
    // Remove Media
    Route::post('/remove/media', [MediaController::class,'submitToRemoveMedia'])->name('submit.remove.media');
    // =========================================  Activity News Block =========================================================================
    Route::get('/add/news', [NewsController::class,'addNews'])->name('add.news');
    Route::get('/view/news', [NewsController::class,'viewNews'])->name('view.news');
    // Summit to add new news
    Route::post('/submit/add/news', [NewsController::class,'submitToAddNews'])->name('submit.add.news');
    // Update news
    Route::get('/edit/news/{id}', [NewsController::class,'editNews'])->name('edit.news');
    Route::post('/submit/edit/news', [NewsController::class,'submitToEditNews'])->name('submit.update.news');
    // Remove news
    Route::post('/remove/news', [NewsController::class,'submitToRemoveNews'])->name('submit.remove.news');
     // =========================================  Comment =========================================================================
    Route::get('/add/comment', [CommentController::class,'addComment'])->name('add.comment');
    Route::get('/view/comment', [CommentController::class,'viewComment'])->name('view.comment');
    // Summit to add new comment
    Route::post('/submit/add/comment', [CommentController::class,'submitToAddComment'])->name('submit.add.comment');
    // Update comment
    Route::get('/edit/comment/{id}', [CommentController::class,'editComment'])->name('edit.comment');
    Route::post('/submit/edit/comment', [CommentController::class,'submitToEditComment'])->name('submit.update.comment');
    
    // Remove comment
    Route::post('/remove/comment', [CommentController::class,'submitToRemoveComment'])->name('submit.remove.comment');
});