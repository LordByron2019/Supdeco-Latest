<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supdeco</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

<header>
    <div style="
        background-image: url({{asset('images/home-img.jpg')}});
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;"
         {{$attributes->merge(['class' => 'h-screen w-full'])}}>
        <div class="h-full w-full relative  bg-blue-600 bg-opacity-30">
            @include('layouts.user-nav')
            {{$header}}
        </div>
    </div>
</header>

{{$slot}}

<footer class="">
    <div style="
        background-image: url({{asset('images/home-img.jpg')}});
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;"
         class="">
        <div class="px-28 py-28 flex justify-center items-center bg-blue-600 bg-opacity-40">
            <div class="space-x-4 text-white">
                <span class="text-lg uppercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                <a href="{{route('admissions.index')}}"
                   class="px-6 py-3 uppercase border border-yellow-600
                               bg-yellow-600 hover:bg-transparent transition
                               duration-400 ease-in">Admissions</a>
            </div>
        </div>
    </div>
    <div class="px-28 py-16 space-y-28 bg-blue-900">
        <div class="grid grid-cols-4 gap-12 text-white">
            <div class="space-y-2">
                <div class="">
                    <a href="/">
                        <x-application-logo class="w-12 h-12 fill-current text-white"/>
                    </a>
                </div>
                <div class="space-y-4">
                    <p class="">
                        Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit.
                        Assumenda atque beatae debitis dicta eum, facilis nemo,
                        numquam, odio quam qui quis quos reprehenderit rerum similique!</p>
                    <a href="" class="text-yellow-500">plus sur nous...</a>
                </div>
            </div>
            <div class="space-y-4">
                {{--Section Title--}}
                <div class="">
                    <div class="">
                        <h1 class="text-lg text-white font-medium uppercase">Nos formations</h1>
                        <div class="flex justify-start py-1">
                            <div class="w-1/3 border-b-4 border-yellow-600"></div>
                        </div>
                    </div>
                </div>
                {{--Section Title end--}}
                <div class="">
                    <ul class="text-yellow-500">
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="space-y-4">
                {{--Section Title--}}
                <div class="">
                    <div class="">
                        <h1 class="text-lg text-white font-medium uppercase">Nos formations</h1>
                        <div class="flex justify-start py-1">
                            <div class="w-1/3 border-b-4 border-yellow-600"></div>
                        </div>
                    </div>
                </div>
                {{--Section Title end--}}
                <div class="">
                    <ul class="text-yellow-500">
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="space-y-4">
                {{--Section Title--}}
                <div class="">
                    <div class="">
                        <h1 class="text-lg text-white font-medium uppercase">Nos formations</h1>
                        <div class="flex justify-start py-1">
                            <div class="w-1/3 border-b-4 border-yellow-600"></div>
                        </div>
                    </div>
                </div>
                {{--Section Title end--}}
                <div class="">
                    <ul class="text-yellow-500">
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                        <li class="">
                            <a href="" class="">Lorem ipsum dolor.</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright text-center">
            <span class="uppercase text-white">
                Copyright &copy;2021 SUPDECO All rights reserved
            </span>
        </div>
    </div>
</footer>

</body>
</html>
