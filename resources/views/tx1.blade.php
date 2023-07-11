@extends('layout.monitoring')
@section('ready')
    <div class="ready flex gap-5">
        <div class="bg-green-400 rounded-2xl h-5 w-10"></div>
        <h4>Ready</h4>
    </div>
@endsection

@section('standBy')
    <div class="stand-by flex gap-5">
        <div class="bg-green-700 rounded-2xl h-5 w-10"></div>
        <h4>Stand By</h4>
    </div>
@endsection

@section('data')
    <h4>{{ $txOne->monitoring->frequensi }}</h4>
    <h4>{{ $txOne->monitoring->mode }}</h4>
    <h4>{{ $txOne->monitoring->line_in }}</h4>
    <h4>{{ $txOne->monitoring->mod_depth }}</h4>
    <h4>{{ $txOne->monitoring->offset }}</h4>
    <h4>{{ $txOne->monitoring->step }}</h4>
@endsection

@section('bar')
    <div class="flex gap-5 mt-10">
        <div class="w-full bg-gray-200 rounded-full">
            <div class="bg-green-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: {{ $txOne->monitoring->fwd_power }}%"> 
            {{ $txOne->monitoring->fwd_power }}</div>
        </div>
        <div class="w-full bg-gray-200 rounded-full">
            <div class="bg-green-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: {{ $txOne->monitoring->vswr }}%">{{ $txOne->monitoring->vswr }}</div>
        </div>
    </div>    
@endsection

@section('button')
    <a href="{{ route('edit', $txOne) }}" class="bg-blue-600 text-white rounded-md p-2 w-20 text-center hover:bg-blue-700 mb-5">Settings</a>
@endsection