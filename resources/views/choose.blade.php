<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Choose</title>
</head>
<body>
    <div class="flex items-center justify-center h-screen">
        <div class="w-1/2 m-auto p-6 bg-white border border-gray-200 rounded-lg shadow">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-black text-center">T6T 50w</h5>

            <form action="/processtx" method="POST">
                @csrf
                <div class="flex flex-col gap-5">
                    <div class="flex items-center pl-4 border border-gray-200 rounded">
                        <input id="bordered-checkbox-1" type="radio" value="tx1" name="choice" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                        <label for="bordered-checkbox-1" class="w-full py-4 ml-2 text-sm font-medium text-gray-900">TX 1 126.5 MHz</label>
                    </div>
                    <div class="flex items-center pl-4 border border-gray-200 rounded">
                        <input id="bordered-checkbox-2" type="radio" value="tx2" name="choice" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                        <label for="bordered-checkbox-2" class="w-full py-4 ml-2 text-sm font-medium text-gray-900">TX 2 126.5 MHz</label>
                    </div>
                </div>
    
                <div class="flex justify-between mt-6">
                    <a href="/logout" class="inline-flex items-center gap-5 px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Logout<i class="fa-solid fa-power-off"></i>
                    </a>
                    <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Next
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div>
            </form>
            
        </div>
    </div>
    <script src="https://kit.fontawesome.com/06b851ab81.js" crossorigin="anonymous"></script>
</body>
</html>