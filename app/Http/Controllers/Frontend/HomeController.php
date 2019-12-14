<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.index');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function donate()
    {
        return view('frontend.donate');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function policies()
    {
        return view('frontend.policies');
    }
}
