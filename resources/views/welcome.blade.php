<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-200">
        <main class="relative inset-0 xl:py-10">
            <div class="flex mx-auto bg-white shadow max-w-7xl">
                <div class="max-w-2xl bg-white border-r w-96">
                    <div class="h-16 bg-gray-100 border-b">
                        <x-randon-img id="1" class="float-left w-10 h-10 mt-3 ml-4" />
                    </div>
                    <div class="p-2">
                        <x-text-input class="w-full h-10 px-4 py-4" type="text" placeholder="Search" />
                    </div>
                    <div class="overflow-y-auto h-[37rem]">
                        @for ($i = 10; $i < 16; $i++)
                            <div class="flex items-center gap-2 px-4 py-4 border-b cursor-pointer hover:bg-gray-50">
                                <x-randon-img id="{{ $i }}" class="w-10 h-10" />
                                <div>
                                    <span class="font-semibold text-gray-900">User {{ $i }}</span>
                                    <p class="text-sm text-gray-500">Last message more.....</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="flex flex-col justify-between w-full">
                    <div class="flex items-center h-16 gap-2 p-5 bg-gray-100 border-b">
                        <div class="flex items-center gap-3">
                            <x-randon-img id="2" class="float-left w-10 h-10" />
                            <span class="font-semibold text-gray-900">User {{ $i }}</span>
                        </div>
                    </div>
                    <div class="overflow-y-auto max-h-[36rem]">
                            @for ($i = 1; $i < 5; $i++)
                                <div class="flex justify-end gap-2 px-4 py-4">
                                    <div class="max-w-xl px-4 py-2 text-white bg-blue-500 rounded-lg">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum fuga, facere non
                                        magnam reprehenderit, consectetur sit suscipit explicabo dolore quod et quis
                                        facilis tenetur voluptates temporibus nobis, reiciendis totam ad.
                                    </div>
                                </div>
                            @endfor
                            @for ($i = 1; $i < 5; $i++)
                                <div class="flex justify-start gap-2 px-4 py-4">
                                    <div class="max-w-xl px-4 py-2 text-white bg-blue-500 rounded-lg">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum fuga, facere non
                                        magnam reprehenderit, consectetur sit suscipit explicabo dolore quod et quis
                                        facilis tenetur voluptates temporibus nobis, reiciendis totam ad.
                                    </div>
                                </div>
                            @endfor
                    </div>
                    <div class="h-16 bg-gray-100 border-t">
                        <div class="px-4 py-3">
                            <x-text-input class="w-full h-10 px-4 py-4 " type="text" placeholder="Type your message" />
                        </div>
                    </div>
                </div>

        </main>
    </div>
</body>

</html>
