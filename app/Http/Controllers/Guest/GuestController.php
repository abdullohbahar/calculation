<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function hrCalculation()
    {
        return view('guest.hr-calculation');
    }
}