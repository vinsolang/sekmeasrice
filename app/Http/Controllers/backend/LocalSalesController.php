<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocalSalesController extends Controller
{
    // For Local Product
    public function localSales(){
        return view("backend.local-sales.add-local-sale");
    }
    public function localSalesView(){
        $row = DB::table("local_sales")->get();
        return view("backend.local-sales.view-local-sale", compact("row"));
    }
    public function submitToAddLocalProduct(Request $request){
       $request->validate([
        'brand'        => 'required|string|max:255',
        'name'        => 'required|string|max:255',
        'type'        => 'nullable|string|max:255',
        'price'       => 'required|numeric|min:0',
        'capacity'    => 'required|string|max:255',
        'image_local' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:20480',
    ]);

    // Handle file upload image
    $image_local = $request->file('image_local');
    $path = 'storage/local_product';
    $image = time() . '-' . $image_local->getClientOriginalName();
    $image_local->move(public_path($path), $image);
    

    // Insert into database
    $result = DB::table('local_sales')->insert([
        'brand'        => $request->brand,
        'name'        => $request->name,
        'type'        => $request->type,
        'price'       => $request->price,
        'capacity'    => $request->capacity,
        'image_local' => $image,
    ]);

    if ($result) {
        return redirect()->route('local.sales.view')->with('success', 'Product created successfully!');
    } else {
        return back()->with('error', 'Something went wrong, try again.');
    }
    }
    // Edit product for Lacal sales
    public function editLocalSales($id){
        $localSale = DB::table('local_sales')->where('id', $id)->first();
        return view('backend.local-sales.update-local-sale', compact('localSale'));
    }
    public function submitUpdateLocalsales(Request $request){
        $request->validate([
        'update_id'        => 'required|numeric|min:0',
        'update_brand'      => 'required|string|max:255',
        'update_name'      => 'required|string|max:255',
        'update_type'      => 'nullable|string|max:255',
        'update_price'     => 'required|numeric|min:0',
        'update_capacity'  => 'required|string|max:255',
        'update_image_local' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:20480',
        'old_image_local'  => 'nullable|string|max:255',
        ]);

        $update_id = $request->input('update_id');

        $update_image_local = $request-> file('update_image_local');
        $old_image_local = $request-> input('old_image_local');
        $path = 'storage/local_product';
        if($update_image_local){
            $image = time().'-'.$update_image_local->getClientOriginalName();
            $update_image_local -> move($path, $image);
        }elseif($old_image_local){
            $image = $old_image_local;
        }


        // Handle file upload
        // if ($request->hasFile('update_image_local')) {
        //     $path = $request->file('update_image_local')->store('local_product', 'public');
        // } else {
        //     $path = $request->input('old_image_local'); // Keep old image path
        // }

        // Update record
        $result = DB::table('local_sales')->where('id', $update_id)->update([
            'brand'      => $request->update_brand,
            'name'        => $request->update_name,
            'type'        => $request->update_type,
            'price'       => $request->update_price,
            'capacity'    => $request->update_capacity,
            'image_local' => $image,
            'updated_at'  => now(),
        ]);

        if ($result) {
            return redirect()->route('local.sales.view')->with('success', 'Product updated successfully!');
        } else {
            return back()->with('error', 'Something went wrong, try again.');
        }
    }
    public function removeLocalSelling(Request $request){
          $remove_id = $request->input('remove_id');

        $result = DB::table('local_sales')->where('id', $remove_id)->delete();

        if($result){
            return redirect()->route('local.sales.view')->with('success','delated success');
        }
    }
}
