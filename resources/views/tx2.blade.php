@extends('layout.monitoring')
@section('ready')
    <div class="ready flex gap-5">
        <div class="bg-green-400 rounded-2xl h-5 w-10"></div>
        <h4>Ready</h4>
    </div>
@endsection

@section('standBy')
    <div class="stand-by flex gap-5">
        <div class="bg-gray-600 rounded-2xl h-5 w-10"></div>
        <h4>Stand By</h4>
    </div>
@endsection
@section('alarm')
    <div class="alarm flex gap-5">

        @if ($txTwo->monitoring->vswr == 1)
            <div class="bg-gray-600 rounded-2xl h-5 w-10"></div> 
        @else
            <div class="bg-red-600 rounded-2xl h-5 w-10"></div> 
        @endif
        <h4>Alarm</h4>
    </div>
@endsection

@section('data')
<h4>{{ $txTwo->monitoring->frequensi }} MHz</h4>
<h4>{{ $txTwo->monitoring->mode }}</h4>
<h4>{{ $txTwo->monitoring->line_in }}</h4>
<h4>{{ $txTwo->monitoring->mod_depth }} %</h4>
<h4>{{ $txTwo->monitoring->offset }} KHz</h4>
<h4>{{ $txTwo->monitoring->step }} KHz</h4>
@endsection

@section('bar')
    <div class="flex gap-5 mt-10">
        <div class="w-full bg-gray-200 rounded-full">
            <div class="bg-green-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: {{ $txTwo->monitoring->fwd_power }}%"> 
            {{ $txTwo->monitoring->fwd_power }}</div>
        </div>
        <div class="w-full bg-gray-200 rounded-full">
            <div class="bg-green-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: {{ $txTwo->monitoring->vswr }}%">{{ $txTwo->monitoring->vswr }}</div>
        </div>
    </div>    
@endsection

@section('button')
    <a href="{{ route('edit', $txTwo) }}" class="bg-blue-600 text-white rounded-md p-2 w-20 text-center hover:bg-blue-700 mb-5">Settings</a>
@endsection