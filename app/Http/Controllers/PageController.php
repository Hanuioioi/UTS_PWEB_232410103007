<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if ($credentials['username'] === 'admin' && $credentials['password'] === 'admin') {
            // Set username in session
            $request->session()->put('username', $credentials['username']);
            // Redirect to dashboard without query parameter
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    public function dashboard(Request $request)
    {
        $username = $request->session()->get('username', 'Guest');
        return view('dashboard', ['username' => $username]);
    }

    public function profile(Request $request)
    {
        $username = $request->session()->get('username', 'Guest');
        return view('profile', ['username' => $username]);
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->session()->get('username', 'Guest');

        // Sample data array
        $sampleData = [
            ['id' => 1, 'name' => 'Product A', 'price' => 100],
            ['id' => 2, 'name' => 'Product B', 'price' => 150],
            ['id' => 3, 'name' => 'Product C', 'price' => 200],
        ];

        return view('pengelolaan', [
            'username' => $username,
            'sampleData' => $sampleData,
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('username');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
