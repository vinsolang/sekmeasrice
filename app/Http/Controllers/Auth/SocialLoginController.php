<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\InfoCustomer;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;

class SocialLoginController extends Controller
{
    // GOOGLE
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $customer = InfoCustomer::firstOrCreate(
                ['email' => $googleUser->getEmail()],
                [
                    'username' => $googleUser->getName(),
                    'email_verified_at' => now(),
                    'password' => bcrypt('default_password'),
                    'avatar' => $googleUser->getAvatar(),
                    'provider' => 'google',
                    'provider_id' => $googleUser->getId(),
                ]
            );

            // Important: use the customer guard
            Auth::guard('customer')->login($customer);

            return redirect()->route('home');
        } catch (\Exception $e) {
            return redirect()->route('client.login')->with('message', 'Google login failed!');
        }
    }

    // FACEBOOK
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
{
    try {
        $facebookUser = Socialite::driver('facebook')->user();

        $customer = InfoCustomer::updateOrCreate(
            ['email' => $facebookUser->getEmail()],
            [
                'username' => $facebookUser->getName(),
                'email_verified_at' => now(),
                'password' => bcrypt('default_password'),
                'avatar' => $facebookUser->getAvatar(),
                'provider' => 'facebook',
                'provider_id' => $facebookUser->getId(),
            ]
        );

        // Log in using the customer guard
        Auth::guard('customer')->login($customer);

        return redirect()->route('home');
    } catch (Exception $e) {
        return redirect()->route('client.login')->with('message', 'Facebook login failed!');
    }
}

}
