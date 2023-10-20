<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\product;

class HomeController extends Controller
{
    public function index()
    {
        $products = product::all();
        return view('home.userpage', compact('products'));
    }

    public function redirect()
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == '1') {
                return view('admin.home');
            } else {
                return view('home.userpage');
            }
        } else {
            // Handle the case when the user is not authenticated.
            return redirect()->route('login'); // Redirect to the login page, for example.
        }
    }

    public function shop()
    {
        $products = product::all();
        return view('home.shop', compact('products'));
    }

    public function cart()
    {
        return view('home.cart');
    }

    public function home()
    {
        return view('home.userpage');
    }
}
