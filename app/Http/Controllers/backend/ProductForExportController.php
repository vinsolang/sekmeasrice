<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductForExportController extends Controller
{
    public function addExport(){
        return view("backend.export.add-export");
    }
    public function viewExport(){
        $row = DB::table("for_export")->limit(12)->get();
        return view("backend.export.view-export", ["row"=> $row]);
    }
     public function submitToAddExport(Request $request){
       $request->validate([
        'brand'        => 'required|string|max:255',
        'name'        => 'required|string|max:255',
        'type'        => 'nullable|string|max:255',
        'price'       => 'required|numeric|min:0',
        'capacity'    => 'required|string|max:255',
        'image_export' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:20480',
        ]);

         // Handle file upload image
        $image_export = $request->file('image_export');
        $path = 'storage/local_product';
        $image = time() . '-' . $image_export->getClientOriginalName();
        $image_export->move(public_path($path), $image);

        // Insert into database
        $result = DB::table('for_export')->insert([
            'brand'     => $request->brand,
            'name'        => $request->name,
            'type'        => $request->type,
            'price'       => $request->price,
            'capacity'    => $request->capacity,
            'image_export' => $image,
        ]);

        if ($result) {
            return redirect()->route('view.export')->with('success', 'Product created successfully!');
        } else {
            return back()->with('error', 'Something went wrong, try again.');
        }
    }
    public function updateExport($id){
        $row = DB::table('for_export')->where('id', $id)->first();
        return view('backend.export.update-export', compact('row'));
    }
    public function submitToUpdateExport(Request $request){
        $request->validate([
        'update_id'        => 'required|numeric|min:0',
        'update_brand'     => 'required|string|max:255',
        'update_name'      => 'required|string|max:255',
        'update_type'      => 'nullable|string|max:255',
        'update_price'     => 'required|numeric|min:0',
        'update_capacity'  => 'required|string|max:255',
        'update_image_export' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:20480',
        'old_image_export' => 'nullable|string|max:255',
        ]);

        $update_id = $request->input('update_id');

        $update_image_export = $request-> file('update_image_export');
        $old_image_export = $request-> input('old_image_export');
        $path = 'storage/local_product';
        if($update_image_export){
            $image = time().'-'.$update_image_export->getClientOriginalName();
            $update_image_export -> move($path, $image);
        }elseif($old_image_export){
            $image = $old_image_export;
        }

        $result = DB::table('for_export')->where('id', $update_id)->update([
            'brand'        => $request->update_brand,
            'name'         => $request->update_name,
            'type'         => $request->update_type,
            'price'        => $request->update_price,
            'capacity'     => $request->update_capacity,
            'image_export' => $image,
        ]);

        if ($result !== false) {
            return redirect()->route('view.export')->with('success', 'Product updated successfully!');
        } else {
            return back()->with('error', 'Update failed, try again.');
        }
    }
    public function removeExport(Request $request){
          $remove_id = $request->input('remove_id');

        $result = DB::table('for_export')->where('id', $remove_id)->delete();

        if($result){
            return redirect()->route('view.export')->with('success','delated success');
        }
    }
}
