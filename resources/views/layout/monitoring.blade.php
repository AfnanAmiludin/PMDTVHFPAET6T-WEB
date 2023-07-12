<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Monitoring</title>
</head>
<body>
    <div class="flex items-center justify-around h-screen">
        <div class="w-1/2 m-auto p-6 bg-white border border-gray-200 rounded-lg shadow">
            <div class="flex justify-end">
                @yield('button')
            </div>
            <div class="bg-gray-300 p-5 flex justify-between">
                <div class="grid grid-cols-3 p-6 bg-blue-500 rounded-full items-center w-3/4">
                    <div class="information text-white font-semibold text-lg">
                        @yield('ready')
                        @yield('alarm')

                        <div class="transmit flex gap-5">
                            <div class="bg-gray-400 rounded-2xl h-5 w-10" id="transmit"></div>
                            <h4>Transmit</h4>
                        </div>

                        @yield('standBy')
                    </div>
                    <div class="data bg-blue-300 border-black border grid grid-cols-2">
                        <div class="freq">
                            <h4>Freq</h4>
                            <h4>Mode</h4>
                            <h4>Line in</h4>
                            <h4>Mod Depth</h4>
                            <h4>Offset</h4>
                            <h4>Step</h4>
                        </div>
                        <div class="freq justify-self-end">
                            @yield('data')
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-center gap-3">
                    <h4>PAE TET</h4>
                    <div class="bg-black rounded-full h-14 w-32"></div>
                    <div class="bg-black rounded-full h-14 w-32"></div>
                </div>
            </div>

            @yield('bar')

            <div class="grid grid-cols-2 text-center">
                <h4>Fwd Power (W)</h4>
                <h4>VSWR</h4>
            </div>

            <div class="flex justify-between">
                <a href="/choose" class="bg-blue-600 text-white rounded-md p-2 w-20 text-center hover:bg-blue-700 mb-5">Back</a>
                <a href="/logout" class="bg-red-600 text-white rounded-md p-2 w-20 text-center hover:bg-red-700 mb-5">Logout</a>
            </div>

        </div>
    </div>
    
    <script src="https://kit.fontawesome.com/06b851ab81.js" crossorigin="anonymous"></script>
    <script>
        function changeColor() {
            var element = document.getElementById("transmit");
            element.classList.toggle("bg-gray-600");
        }
        setInterval(changeColor, 1000);
    </script>
</body>
</html>