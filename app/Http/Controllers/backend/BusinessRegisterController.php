<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusinessRegisterController extends Controller
{
     public function addBusinessCertificate(){
        return view("backend.businessRegister.add-business");
    }
    public function viewBusinessCertificate(){
        $row = DB::table("business_register")->get();
        return view("backend.businessRegister.view-business", compact('row'));
    }
    public function submitToAddBusinessCertificate(Request $request){
        $request -> validate([
            'thumbnail' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:20480',
        ]);

         // Handle file upload image
        $thumbnail = $request->file('thumbnail');
        $path = 'storage/local_product';
        $image = time() . '-' . $thumbnail->getClientOriginalName();
        $thumbnail->move(public_path($path), $image);

            // Insert into database
        $result = DB::table('business_register')->insert([
            'thumbnail' => $image,
        ]);

        if ($result) {
            return redirect()->route('view.Business')->with('success', 'created successfully!');
        } else {
            return back()->with('error', 'Something went wrong, try again.');
        }
    }
    public function updateBusinessCertificate($id){
        $row = DB::table('business_register')->where('id', $id)->first();
        return view('backend.businessRegister.update-business', compact('row'));
    }
    public function submitToUpdateBusinessCertificate(Request $request){
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
        $result = DB::table('business_register')->where('id', $update_id)->update([
            'thumbnail' => $image,
            'updated_at'  => now(),
        ]);

        if ($result) {
            return redirect()->route('view.Business')->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'Something went wrong, try again.');
        }
    }
    public function submitToRemoveBusiness(Request $request){
          $remove_id = $request->input('remove_id');

        $result = DB::table('business_register')->where('id', $remove_id)->delete();

        if($result){
            return redirect()->route('view.Business')->with('success','delated success');
        }
    }
}
