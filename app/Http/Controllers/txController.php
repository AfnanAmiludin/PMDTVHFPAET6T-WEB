<?php

namespace App\Http\Controllers;

use App\Models\Tx;
use Illuminate\Http\Request;

class txController extends Controller
{
    public function getTxOne()
    {
        $txOne = Tx::where('id', 1)->first();
        return view('', compact('txOne'));
    }
    public function getTxTwo()
    {
        $txTwo = Tx::where('id', 2)->first();
        return view('', compact('txTwo'));
    }
}
