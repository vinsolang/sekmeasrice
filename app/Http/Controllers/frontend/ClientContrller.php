<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientContrller extends Controller
{
    public function index(){
        $showProducrLocal = DB::table("local_sales")->limit(12)->get();
        $showWining = DB::table("award_wining")->limit(8)->get();
        $showCredibility = DB::table("credibility_certificate")->limit(5)->get();
        $showComment = DB::table('comments')->limit(15)->get();
        return view("frontend.home", compact("showProducrLocal","showWining","showCredibility", "showComment"));
    }
    // Add Comment of Customer or Users
    // public function submitComment(Request $request) {
    //     $request->validate([
    //     'comment' => 'required|string|max:1000'
    // ]);

    // $comment = Comment::create([
    //     'user_id' => Auth::guard('customer')->id(),
    //     'comment' => $request->comment
    // ]);

    // // Load user relationship
    // $comment->load('user');

    // return response()->json([
    //     'comment' => $comment
    // ]);
    // }
    public function export(){
        $showExport = DB::table("for_export")->limit(12)->get();
        return view("frontend.export", compact("showExport"));
    }
    public function aboutUs(){
        $showAboutBusiness = DB::table("business_register")->limit(3)->get();
        $showAboutApproved = DB::table("approved_certificate")->limit(3)->get();
        return view("frontend.about-us", compact("showAboutBusiness", "showAboutApproved"));
    }
    public function newsMedia(){
        $showMedia = DB::table("media")->limit(4)->get();
        $showNews = DB::table("news")->limit(4)->get();
        return view("frontend.news-media", compact("showMedia","showNews"));
    }
    public function career(){
        return view("frontend.career");
    }
    public function contact(){
        return view("frontend.contact-us");
    }
}
