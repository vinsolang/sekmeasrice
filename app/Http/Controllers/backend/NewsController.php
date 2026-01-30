<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function addNews(){
        return view("backend.news.add-news");
    }
    public function viewNews(){
        $row = DB::table("news")->get();
        return view("backend.news.view-news", ["row"=> $row]);
    }
    public function submitToAddNews(Request $request){
        $request->validate([
            'title'        => 'required|string|max:255',
            'description'  => 'required|string|max:5000',
            'image_news'  => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:20480',
        ]);

         // Handle file upload image
        $image_news = $request->file('image_news');
        $path = 'storage/local_product';
        $image = time() . '-' . $image_news->getClientOriginalName();
        $image_news->move(public_path($path), $image);


        // Insert into database
        $result = DB::table('news')->insert([
            'title'     => $request->title,
            'description'        => $request->description,
            'image_news' => $image,
        ]);

        if ($result) {
            return redirect()->route('view.news')->with('success', 'created successfully!');
        } else {
            return back()->with('error', 'Something went wrong, try again.');
        }
    }
    public function editNews($id){
        $row = DB::table('news')->where('id',$id)->first();
        return view('backend.news.edite-news', ['row'=> $row]);
    }
     public function submitToEditNews(Request $request){
        $request->validate([
        'update_id'          => 'required|numeric|min:1',
        'update_title'       => 'required|string|max:255',
        'update_description' => 'required|string|max:5000',
        'update_image_news' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:20480',
        'old_image_news'    => 'nullable|string|max:255',
        ]);

        $update_id = $request->input('update_id');

          $update_image_news = $request-> file('update_image_news');
        $old_image_news = $request-> input('old_image_news');
        $path = 'storage/local_product';
        if($update_image_news){
            $image = time().'-'.$update_image_news->getClientOriginalName();
            $update_image_news -> move($path, $image);
        }elseif($old_image_news){
            $image = $old_image_news;
        }

        // Update database
        $result = DB::table('news')->where('id', $update_id)->update([
            'title'        => $request->update_title,
            'description'  => $request->update_description,
            'image_news'  => $image,
            'updated_at'   => now(),
        ]);

        if ($result) {
            return redirect()->route('view.news')->with('success', 'news updated successfully!');
        } else {
            return back()->with('error', 'No changes were made.');
        }
    }
    public function submitToRemoveNews(Request $request){
          $remove_id = $request->input('remove_id');

        $result = DB::table('news')->where('id', $remove_id)->delete();

        if($result){
            return redirect()->route('view.news')->with('success','delated success');
        }
    }
}
