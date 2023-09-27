<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>@yield('title','welcome')</title>
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">

</head>
<body>

<nav id="header" class="w-full z-30 top-0 py-1">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

        <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <box-icon name='arrow-back'></box-icon>
        </label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-1" id="menu">

            <a class="hover:no-underline" href="{{ route("tfc.index") }}">
                <box-icon name='arrow-back'></box-icon>
            </a>
        </div>

        <div class="order-1 md:order-2">
            <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl " href="{{ route("tfc.index") }}">
                <box-icon type='solid' name='book-bookmark'></box-icon>
                ESIS TFC
            </a>
        </div>


            <div class="order-2 md:order-3 flex items-center" id="nav-content">
                <box-icon type='solid' name='universal-access'></box-icon>
            </div>
    </div>
</nav>
<div class="relative overflow-x-auto p-8">
    {{--<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Student
            </th>
            <th scope="col" class="px-6 py-3">
                Filiere
            </th>
            <th scope="col" class="px-6 py-3">
                Date
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($tfcs as $tfs)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $tfs->student_name }}
            </th>
            <th class="px-6 py-4">
                {{ $tfs->filiere }}
            </th>
            <th class="px-6 py-4">
                {{ $tfs->date }}
            </th>
        </tr>
        @endforeach
        </tbody>
    </table>--}}

    @livewire('tfc.list-tfc')
</div>
<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <strong class="hover:underline">Safety,io</strong>. All Rights Reserved.</span>
    </div>
</footer>
</body>
</html>
