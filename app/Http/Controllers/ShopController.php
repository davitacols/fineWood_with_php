<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display the shop page.
     *
     * @return \Illuminate\View\View
     */
    public function shop()
    {
        return view('shop');
    }
}