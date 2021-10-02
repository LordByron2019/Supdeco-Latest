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
<body>²

<header>
    <div style="
        background-image: url({{asset('images/home-img.jpg')}});
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;"
        class="h-screen w-full">
        <div class="h-full w-full relative  bg-blue-600 bg-opacity-30">
            <div class="fixed inset-x-0 px-28 py-5 bg-blue-900 bg-opacity-90 flex items-center justify-between shadow-lg z-50">
                <div class="">
                    <a href="/">
                        <x-application-logo class="w-12 h-12 fill-current text-white"/>
                    </a>
                </div>
                <div class="text-white">
                    <ul class="text-md uppercase font-bold flex items-center space-x-8">
                        <li class="hover:text-white transition duration-200 ease-in-out">
                            <a href="" class="">Formations</a>
                        </li>
                        <li class="hover:text-white transition duration-200 ease-in-out">
                            <a href="" class="">Contact</a>
                        </li>
                        <li class="hover:text-white transition duration-200 ease-in-out">
                            <a href=""
                               class="px-6 py-3 uppercase border border-yellow-600
                               bg-yellow-600 hover:bg-transparent transition
                               duration-400 ease-in">Admissions</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="h-full grid place-items-center place-content-center pt-20">
                <div class="w-3/4 space-y-10 flex flex-col items-center text-white uppercase font-extrabold">
                    <h1 class="text-5xl text-center tracking-wider leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores facilis in laboriosam</h1>
                    <div class="">
                        <a href="" class="px-6 py-3 uppercase border border-yellow-600 bg-yellow-600 hover:bg-transparent transition duration-400 ease-in">Admissions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="formation" class="relative">
    <div class="flex flex-col items-center space-y-10 my-20 px-28">
        {{--Section Title--}}
        <div class="border-b-4 border-yellow-600 pb-1">
            <h1 class="text-3xl font-medium uppercase">Nos formations</h1>
        </div>
        {{--Section Title end--}}

        {{--Section Description--}}
        <div class="">
            <p class="text-md font-medium uppercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis ipsam minus!</p>
        </div>
        {{--Section Description end--}}

        {{--Section content--}}
        <div class="">
            <div class="grid grid-cols-4 gap-8">
                <div class="w-full shadow-lg bg-white bg-opacity-60">
                    <div class="h-60 relative">
                        <img src="{{asset('images/home-img.jpg')}}" alt="" class="w-full h-full">
                        <div class="absolute inset-0 bg-blue-600 bg-opacity-30 flex items-end">
                            <div class="py-3 px-2 w-full bg-blue-600 bg-opacity-95 relative">
                                <div class="w-4/5">
                                    <h3 class="text-lg font-extrabold text-white uppercase">Licence</h3>
                                    <div class="absolute -top-8 right-0 inline p-3 bg-yellow-600 bg-opacity-95">
                                        <span class="uppercase text-md text-white">2 an(s)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 px-2 space-y-5">
                        <h1 class="text-2xl text-center font-medium line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
                        <p class="text-center text-md line-clamp-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aliquid consequuntur corporis cupiditate debitis deserunt dolore,
                            ducimus eaque fugit hic ipsam iure minima nam nesciunt, odio,
                            perspiciatis praesentium quae quasi quos recusandae sequi velit veritatis voluptatem.
                        </p>

                        <div class="text-center py-2">
                            <a href=""
                               class="px-6 py-3 uppercase border border-yellow-600
                               bg-yellow-600 hover:bg-transparent transition
                               duration-400 ease-in">Consulter</a>
                        </div>
                    </div>
                </div>
                <div class="w-full shadow-lg bg-white bg-opacity-60">
                    <div class="h-60 relative">
                        <img src="{{asset('images/home-img.jpg')}}" alt="" class="w-full h-full">
                        <div class="absolute inset-0 bg-blue-600 bg-opacity-30 flex items-end">
                            <div class="py-3 px-2 w-full bg-blue-600 bg-opacity-95 relative">
                                <div class="w-4/5">
                                    <h3 class="text-lg font-extrabold text-white uppercase">Licence</h3>
                                    <div class="absolute -top-8 right-0 inline p-3 bg-yellow-600 bg-opacity-95">
                                        <span class="uppercase text-md text-white">2 an(s)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 px-2 space-y-5">
                        <h1 class="text-2xl text-center font-medium line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
                        <p class="text-center text-md line-clamp-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aliquid consequuntur corporis cupiditate debitis deserunt dolore,
                            ducimus eaque fugit hic ipsam iure minima nam nesciunt, odio,
                            perspiciatis praesentium quae quasi quos recusandae sequi velit veritatis voluptatem.
                        </p>

                        <div class="text-center py-2">
                            <a href=""
                               class="px-6 py-3 uppercase border border-yellow-600
                               bg-yellow-600 hover:bg-transparent transition
                               duration-400 ease-in">Consulter</a>
                        </div>
                    </div>
                </div>
                <div class="w-full shadow-lg bg-white bg-opacity-60">
                    <div class="h-60 relative">
                        <img src="{{asset('images/home-img.jpg')}}" alt="" class="w-full h-full">
                        <div class="absolute inset-0 bg-blue-600 bg-opacity-30 flex items-end">
                            <div class="py-3 px-2 w-full bg-blue-600 bg-opacity-95 relative">
                                <div class="w-4/5">
                                    <h3 class="text-lg font-extrabold text-white uppercase">Licence</h3>
                                    <div class="absolute -top-8 right-0 inline p-3 bg-yellow-600 bg-opacity-95">
                                        <span class="uppercase text-md text-white">2 an(s)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 px-2 space-y-5">
                        <h1 class="text-2xl text-center font-medium line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
                        <p class="text-center text-md line-clamp-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aliquid consequuntur corporis cupiditate debitis deserunt dolore,
                            ducimus eaque fugit hic ipsam iure minima nam nesciunt, odio,
                            perspiciatis praesentium quae quasi quos recusandae sequi velit veritatis voluptatem.
                        </p>

                        <div class="text-center py-2">
                            <a href=""
                               class="px-6 py-3 uppercase border border-yellow-600
                               bg-yellow-600 hover:bg-transparent transition
                               duration-400 ease-in">Consulter</a>
                        </div>
                    </div>
                </div>
                <div class="w-full shadow-lg bg-white bg-opacity-60">
                    <div class="h-60 relative">
                        <img src="{{asset('images/home-img.jpg')}}" alt="" class="w-full h-full">
                        <div class="absolute inset-0 bg-blue-600 bg-opacity-30 flex items-end">
                            <div class="py-3 px-2 w-full bg-blue-600 bg-opacity-95 relative">
                                <div class="w-4/5">
                                    <h3 class="text-lg font-extrabold text-white uppercase">Licence</h3>
                                    <div class="absolute -top-8 right-0 inline p-3 bg-yellow-600 bg-opacity-95">
                                        <span class="uppercase text-md text-white">2 an(s)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 px-2 space-y-5">
                        <h1 class="text-2xl text-center font-medium line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
                        <p class="text-center text-md line-clamp-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aliquid consequuntur corporis cupiditate debitis deserunt dolore,
                            ducimus eaque fugit hic ipsam iure minima nam nesciunt, odio,
                            perspiciatis praesentium quae quasi quos recusandae sequi velit veritatis voluptatem.
                        </p>

                        <div class="text-center py-2">
                            <a href=""
                               class="px-6 py-3 uppercase border border-yellow-600
                               bg-yellow-600 hover:bg-transparent transition
                               duration-400 ease-in">Consulter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--Section content end--}}


    </div>
</section>

<section id="about"
         style="
             background-image: url({{asset('images/home-img.jpg')}});
             background-repeat: no-repeat;
             background-position: center;
             background-size: cover;"
         class="relative">
    <div class="grid grid-cols-3 space-x-10 space-y-10 my-20 py-16 px-28 bg-blue-600 bg-opacity-80">
        {{--Section Title--}}
        <div class="">
            <div class="">
                <h1 class="text-2xl text-white font-medium uppercase">A Propos de notre université</h1>
                <div class="flex justify-start py-1">
                    <div class="w-1/2 border-b-4 border-yellow-600"></div>
                </div>
            </div>
        </div>
        {{--Section Title end--}}

        {{--Section content--}}
        <div class="col-span-2">
            <p class="text-xl text-white text-opacity-75 tracking-10">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Adipisci alias aperiam asperiores consectetur,
                deleniti error fugit ipsa ipsam libero magnam molestias non pariatur,
                porro possimus provident quibusdam, reiciendis repellendus temporibus.
                Ab beatae corporis eaque earum explicabo facere fuga inventore maxime nisi,
                officiis quidem quo voluptate, voluptates.
                Accusantium architecto aut cumque deleniti eos et exercitationem hic inventore minus
                necessitatibus possimus ratione rerum similique sit, sunt tempora tenetur totam! Animi
                aperiam atque consequuntur corporis culpa eveniet fugit in, incidunt ipsa iusto
                laboriosam magnam magni modi molestias necessitatibus nihil nostrum odit
                placeat porro quasi recusandae rerum saepe sit ut vel
                veniam vero voluptatum!
            </p>
        </div>
        {{--Section content end--}}
    </div>
</section>

<section id="partners" class="relative">
    <div class="flex flex-col items-center space-y-10 my-20 px-28">
        {{--Section Title--}}
        <div class="border-b-4 border-yellow-600 pb-1">
            <h1 class="text-3xl font-medium uppercase">Nos partenaires</h1>
        </div>
        {{--Section Title end--}}

        {{--Section Description--}}
        <div class="">
            <p class="text-md font-medium uppercase">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam corporis ipsam minus!</p>
        </div>
        {{--Section Description end--}}

        {{--Section content--}}
        <div class="">
            <div class="flex space-x-4">
                <a href="/">
                    <x-application-logo class="w-12 h-12 fill-current text-black"/>
                </a>
                <a href="/">
                    <x-application-logo class="w-12 h-12 fill-current text-black"/>
                </a>
            </div>
        </div>
        {{--Section content end--}}


    </div>
</section>

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
                <a href=""
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
