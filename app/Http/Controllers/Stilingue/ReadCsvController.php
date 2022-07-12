<?php

namespace App\Http\Controllers\Stilingue;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ReadCsvController extends Controller
{
    /**
     * Show the form input file CSV view.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('stilingue.read');
    }

    /**
     * Save file CSV the DB
     *
     * @param  \Illuminate\Http\Request $objRequest
     * @return mixed
     */
    public function store(Request $objRequest)
    {
        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
