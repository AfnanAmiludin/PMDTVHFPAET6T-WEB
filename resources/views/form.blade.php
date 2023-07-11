<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Edit</title>
</head>
<body>
    <div class="flex items-center justify-center h-screen">
        <div class="w-1/2 m-auto p-6 bg-white border border-gray-200 rounded-lg shadow">
            <form action="{{ route('update', $data) }}" method="POST"> 
                @csrf
                @method('put')
                <div class="mb-6">
                    <label for="frequensi" class="block mb-2 text-sm font-medium text-gray-900">Frekuensi (MHz)</label>
                    <input type="number" id="frequensi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 0" placeholder="" name="frequensi" value="{{ $data->frequensi }}" required>
                </div>

                <div class="mb-6">
                    <label for="mode" class="block mb-2 text-sm font-medium text-gray-900">Mode</label>
                    <input type="text" id="mode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 0" placeholder="" name="mode" value="{{ $data->mode }}" required>
                </div>

                <div class="mb-6">
                    <label for="line_in" class="block mb-2 text-sm font-medium text-gray-900">Line in</label>
                    <input type="number" id="line_in" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 0" placeholder="" name="line_in" value="{{ $data->line_in }}" required>
                </div>
                
                <div class="mb-6">
                    <label for="mod_depth" class="block mb-2 text-sm font-medium text-gray-900">Mod depth (%)</label>
                    <input type="number" id="mod_depth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 0" placeholder="" name="mod_depth" value="{{ $data->mod_depth }}" required>
                </div>

                <div class="mb-6">
                    <label for="offset" class="block mb-2 text-sm font-medium text-gray-900">Offset (KHz)</label>
                    <input type="number" id="offset" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 0" placeholder="" name="offset" value="{{ $data->offset }}" required>
                </div>

                <div class="mb-6">
                    <label for="step" class="block mb-2 text-sm font-medium text-gray-900">Step (KHz)</label>
                    <input type="number" id="step" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 0" placeholder="" name="step" value="{{ $data->step }}" required>
                </div>

                <div class="mb-6">
                    <label for="fwd_power" class="block mb-2 text-sm font-medium text-gray-900">Fwd power</label>
                    <input type="number" id="fwd_power" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 0" placeholder="" name="fwd_power" value="{{ $data->fwd_power }}" required>
                </div>

                <div class="mb-6">
                    <label for="vswr" class="block mb-2 text-sm font-medium text-gray-900">VSWR</label>
                    <input type="number" id="vswr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 0" placeholder="" name="vswr" value="{{ $data->vswr }}" required>
                </div>
                
                <div class="flex justify-end">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Update</button>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://kit.fontawesome.com/06b851ab81.js" crossorigin="anonymous"></script>
</body>
</html>