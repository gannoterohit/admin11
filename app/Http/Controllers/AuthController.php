<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function show_login()
    {
        return view('login');
    }

    public function login(Request $request)
    {
      //  dd('hello');
                $credentials = $request->validate([
                    'name' => 'required',
            'password' => 'required',
        ]);
       // dd($credentials);
        // Retrieve the user based on the email provided
        $user = User::where('name', $credentials['name'])->first();
       //dd($user);

//dd($user->password,($credentials['password']));

        // If a user was found and the provided password matches
        if ($user && password_verify($credentials['password'], $user->password)) {
            Auth::login($user);
          // dd($user);
            return redirect()->intended('/home'); // Change this to your desired redirect path
        }

        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ]);
    }

   
    public function logout(Request $request)
    {
        // Log the user out
        Auth::logout();

        // Clear the session data
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect the user to the desired location after logout
        return redirect('/login');
    }
}