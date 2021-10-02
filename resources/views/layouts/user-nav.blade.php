<div id="navbar" class="fixed text-white inset-x-0 px-28 py-5 bg-blue-900 bg-opacity-90 flex items-center justify-between shadow-lg z-50 transition duration-500 ease-in-out">
    <div class="">
        <a href="/">
            <x-application-logo class="w-12 h-12 fill-current "/>
        </a>
    </div>
    <div class="">
        <ul id="nav-list" class="text-md uppercase font-bold flex items-center space-x-8">
            <li class="transition duration-200 ease-in-out">
                <a href="" class="">Formations</a>
            </li>
            <li class="transition duration-200 ease-in-out">
                <a href="{{route('contact')}}" class="">Contact</a>
            </li>
            <li class="transition duration-200 ease-in-out">
                <a href=""
                   class="px-6 py-3 uppercase border border-yellow-600
                               bg-yellow-600 hover:bg-transparent transition
                               duration-400 ease-in">Admissions</a>
            </li>
        </ul>
    </div>
</div>
