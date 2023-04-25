<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function random()
    {
        $quote = Quote::inRandomOrder()->first();

        return view('dashboard', ['quote' => $quote]);
    }
}
