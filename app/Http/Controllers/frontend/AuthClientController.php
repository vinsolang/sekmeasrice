<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthClientController extends Controller
{
    public function cliendtLogin(){
        return view("frontend.auth.login");
    }
     public function cliendtRegister(){
        return view("frontend.auth.register");
    }

    public function clientSubmitRegister(Request $request)
{
  // Manual validation (you can customize messages as needed)
    if (empty($request->username) || empty($request->email) || empty($request->password)) {
        return back()->with('error', 'Please fill in all required fields.');
    }

    // Check if email already exists
    $existing = DB::table('info_customer')->where('email', $request->email)->first();
    if ($existing) {
        return back()->with('error', 'Email already exists!');
    }

    // Handle file upload image
        $profile = $request->file('profile');
        $path = 'storage/profiles';
        $image = time() . '-' . $profile->getClientOriginalName();
        $profile->move(public_path($path), $image);
    

    // Insert into database
    $result = DB::table('info_customer')->insert([
        'username'=> $request->username,
        'email'=> $request->email,
        'password'=> Hash::make($request->password),
        'profile' => $image,
        'created_at' => now(),
        'updated_at' => now()
    ]);

    if ($result) {
        return redirect()->route('client.login')->with('message', 'Registration successful!');
    } else {
        return back()->with('error', 'Failed to register. Please try again.');
    }
}



    // Submit Login
    public function clientSubmitLogin(Request $request){
         $request->validate([
        'name_email' => 'required',
        'password' => 'required',
    ]);

    // Try username login
    if (Auth::guard('customer')->attempt([
        'username' => $request->name_email,
        'password' => $request->password
    ])) {
        return redirect()->route('home');
    }

    // Try email login
    if (Auth::guard('customer')->attempt([
        'email' => $request->name_email,
        'password' => $request->password
    ])) {
        return redirect()->route('home');
    }

    return back()->with('message', 'Failed to login. Please check credentials.');
    }
   public function viewUser() {
    $rows = \App\Models\Customer::orderBy('id', 'desc')->where('created_at', '>=', Carbon::now()->subDays(3))->get(); // get all users
    return view('backend.user', ['rows' => $rows]);
}
     public function submitUpdateUser(Request $request){
        $id = $request->input('id'); // Make sure you pass user id from form

        $username = $request->input('update_username');
        $email = $request->input('update_email');
        $password = $request->input('update_password');
        $old_password = $request->input('old_passwprd');
        $old_profile = $request->input('old_profile');

        if (!empty($password)) {
             // Hash and update new password
            $hashedPassword = bcrypt($password);
        } else {
            // Keep the old password
            $hashedPassword = $old_password;
        }
            
        $path = 'storage/profiles';
        $image = $old_profile; // Default: keep old image

        //  Check if new file uploaded
        if ($request->hasFile('update_profile')) {
            $profile = $request->file('update_profile');
            $image = time() . '-' . $profile->getClientOriginalName();
            $profile->move($path, $image);

            //  Delete old image if exists
            if (!empty($old_profile) && file_exists($path . '/' . $old_profile)) {
                unlink($path . '/' . $old_profile);
            }
        }

        //  Update user info
        $result = DB::table('users')
            ->where('id', $id)
            ->update([
                'username' => $username,
                'email' => $email,
                'password' => $hashedPassword,
                'profile' => $image,
                'updated_at' => now(),
            ]);

        if ($result) {
            return redirect()->route('profile')->with('success', 'Profile updated successfully!');
        } else {
            return back()->with('error', 'Update failed. Please try again.');
        }
    }

    // Submit Logout
   public function submitClientLogout(Request $request)
{
    Auth::guard('customer')->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('home');
}


}
