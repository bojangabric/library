<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;

class UserController extends Controller
{
    public function ajaxRequestAddBookToCart()
    {
        return view('auth.user.addBookToCart');
    }

    public function ajaxRequestDeleteBookFromCart()
    {
        return view('auth.user.deleteBookFromCart');
    }

    public function showSettings()
    {
        return view('auth.user.settings');
    }

    public function showCart()
    {
        return view('auth.user.cart');
    }

    public function checkout()
    {
        return view('auth.user.checkout');
    }

    public function changeSettings(Request $request)
    {
        $user = Auth::user();

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password doesn't match with the password you provided. Please try again.");
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            //Current password and new password are same
            return redirect()->back()->with("error", "New password cannot be the same as your current password. Please choose a different password.");
        }

        if (\App\User::where('email', $request->get('email'))->where('id', '<>', $user->id)->exists()) {
            return redirect()->back()->with("error", "There is already a user registered with that email adress. Please choose a different email.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
        ]);

        if (!empty($request->get('new-password')) && (strcmp($request->get('new-password'), $request->get('new-password-confirm')) == 0))
            $user->password = bcrypt($request->get('new-password'));

        if (!empty($request->get('new-password')) && (strcmp($request->get('new-password'), $request->get('new-password-confirm')) != 0))
            return redirect()->back()->with("error", "New password confirmation doesn't match with the provided new password. Please try again.");

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();

        return redirect()->back()->with("success", "Settings changed successfully!");
    }
}
