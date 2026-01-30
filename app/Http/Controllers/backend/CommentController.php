<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function addComment()
    {
        return view("backend.comments.add-comment");
    }

    public function submitToAddComment(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'comment' => 'required|string',
            'profile' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096'
        ]);

        $filename = null;

        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('assets/comments/profile'), $filename);
        }

        DB::table('comments')->insert([
            'name' => $request->name,
            'comment' => $request->comment,
            'profile' => $filename,
            'created_at' => now()
        ]);

        return redirect()->route('view.comment')->with("message", "Comment added successfully!");
    }

    public function viewComment()
    {
        $row = DB::table('comments')->get();
        return view("backend.comments.view-comment", compact('row'));
    }

    public function editComment($id)
    {
        $row = DB::table('comments')->where('id', $id)->first();
        return view("backend.comments.update-comment", compact('row'));
    }

    public function submitToEditComment(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',
            'name' => 'required|string|max:255',
            'comment' => 'required|string',
            'profile' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096'
        ]);

        $old = DB::table('comments')->where('id', $request->id)->first();
        $filename = $old->profile;

        // Upload new profile
        if ($request->hasFile('profile')) {
            // Delete old
            if ($old->profile && file_exists(public_path('assets/comments/profile/'.$old->profile))) {
                unlink(public_path('assets/comments/profile/'.$old->profile));
            }

            $file = $request->file('profile');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('assets/comments/profile'), $filename);
        }

        DB::table('comments')->where('id', $request->id)->update([
            'name' => $request->name,
            'comment' => $request->comment,
            'profile' => $filename,
            'updated_at' => now()
        ]);

        return redirect()->route('view.comment')->with("message", "Comment updated successfully!");
    }
     public function submitToRemoveComment(Request $request){
          $remove_id = $request->input('remove_id');

        $result = DB::table('comments')->where('id', $remove_id)->delete();

        if($result){
            return redirect()->route('view.credibility')->with('success','delated success');
        }
    }
}
