<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use App\Models\Tx;
use Illuminate\Http\Request;

class monitoringController extends Controller
{
    public function update(Request $request, Tx $tx)
    {
        $request->validate([
            'frequensi',
            'mode',
            'fwd_power',
            'vswr',
            'line_in',
            'mod_depth',
            'offset',
            'step'
        ]);
        // $getOneMonitoring = Monitoring::where('tx_id', $tx->id)->first();
        // $getOneMonitoring->step = $request->step ? $request->step : $getOneMonitoring->step;
        // $getOneMonitoring->frequensi = $request->frequensi ? $request->frequensi : $getOneMonitoring->frequensi;
        // $getOneMonitoring->mode = $request->mode ? $request->mode : $getOneMonitoring->mode;
        // $getOneMonitoring->fwd_power = $request->fwd_power ? $request->fwd_power : $getOneMonitoring->fwd_power;
        // $getOneMonitoring->vswr = $request->vswr ? $request->vswr : $getOneMonitoring->vswr;
        // $getOneMonitoring->line_in = $request->line_in ? $request->line_in : $getOneMonitoring->line_in;
        // $getOneMonitoring->mod_depth = $request->mod_depth ? $request->mod_depth : $getOneMonitoring->mod_depth;
        // $getOneMonitoring->offset = $request->offset ? $request->offset : $getOneMonitoring->offset;
        // $getOneMonitoring->save();
        $data = Monitoring::where('tx_id', $tx->id)->first();
        $data->update([
            'frequensi' => $request->frequensi,
            'mode'=> $request->mode,
            'fwd_power' => $request->fwd_power,
            'vswr' => $request->vswr,
            'line_in' => $request->line_in,
            'mod_depth' => $request->mod_depth,
            'offset' => $request->offset,
            'step' => $request->step
        ]);



        if($tx->id == 1){
            $txOne = Tx::where('id', $tx->id)->first();
            return view('tx1', compact('txOne'));
        }else{
            $txTwo = Tx::where('id', $tx->id)->first();    
            return view('tx2', compact('txTwo'));
        }
    }
    public function edit(Tx $tx)
    {
        $data = Monitoring::where('tx_id', $tx->id)->first();
        return view('form', compact('data'));
    }
}
