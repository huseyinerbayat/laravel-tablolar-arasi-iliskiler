<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index() {
        $phones = Phone::with('user')->take(10)->get();

        return view('phones.index', compact(['phones']));
    }
}
