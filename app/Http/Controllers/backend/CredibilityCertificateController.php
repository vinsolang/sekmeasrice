<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CredibilityCertificateController extends Controller
{
    public function addCredibilityCertificate(){
        return view("backend.credibilityCertificate.add-credibilityCer");
    }
    public function viewCredibilityCertificate(){
        $row = DB::table("credibility_certificate")->get();
        return view("backend.credibilityCertificate.view-credibilityCer", compact('row'));
    }
    public function submitToAddCredibilityCertificate(Request $request){
        $request -> validate([
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:20480',
        ]);

       // Handle file upload image
        $thumbnail = $request->file('thumbnail');
        $path = 'storage/local_product';
        $image = time() . '-' . $thumbnail->getClientOriginalName();
        $thumbnail->move(public_path($path), $image);
    
            // Insert into database
        $result = DB::table('credibility_certificate')->insert([
            'thumbnail' => $image,
        ]);

        if ($result) {
            return redirect()->route('view.credibility')->with('success', 'created successfully!');
        } else {
            return back()->with('error', 'Something went wrong, try again.');
        }
    }
    public function updateCredibilityCertificate($id){
        $row = DB::table('credibility_certificate')->where('id', $id)->first();
        return view('backend.credibilityCertificate.update-credibilityCer', compact('row'));
    }
    public function submitToUpdateCredibilityCertificate(Request $request){
    $request->validate([
        'update_id'        => 'required|numeric|min:0',
        'update_thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:20480',
        'old_thumbnail'  => 'nullable|string|max:255',
        ]);

        $update_id = $request->input('update_id');

        $update_thumbnail = $request-> file('update_thumbnail');
        $old_thumbnail = $request-> input('old_thumbnail');
        $path = 'storage/local_product';
        if($update_thumbnail){
            $image = time().'-'.$update_thumbnail->getClientOriginalName();
            $update_thumbnail -> move($path, $image);
        }elseif($old_thumbnail){
            $image = $old_thumbnail;
        }

        // Update record
        $result = DB::table('credibility_certificate')->where('id', $update_id)->update([
            'thumbnail' => $image,
            'updated_at'  => now(),
        ]);

        if ($result) {
            return redirect()->route('view.credibility')->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'Something went wrong, try again.');
        }
    }
    public function submitToRemoveCer(Request $request){
          $remove_id = $request->input('remove_id');

        $result = DB::table('credibility_certificate')->where('id', $remove_id)->delete();

        if($result){
            return redirect()->route('view.credibility')->with('success','delated success');
        }
    }
}
