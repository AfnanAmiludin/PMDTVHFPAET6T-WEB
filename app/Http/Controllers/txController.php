<?php

namespace App\Http\Controllers;

use App\Models\Tx;
use Illuminate\Http\Request;

class txController extends Controller
{
    public function getTxOne()
    {
        $txOne = Tx::where('id', 1)->first();
        return view('tx1', compact('txOne'));
    }
    public function getTxTwo()
    {
        $txTwo = Tx::where('id', 2)->first();
        return view('tx2', compact('txTwo'));
    }

    public function processTx(Request $request)
    {
        $choice = $request->input('choice');

        if ($choice == 'tx1') 
            return redirect()->route('tx-1');
        elseif ($choice == 'tx2') 
            return redirect()->route('tx-2');
    }

    public function showPageA()
    {
        return view('tx1');
    }

    public function showPageB()
    {
        return view('tx2');
    }
}
