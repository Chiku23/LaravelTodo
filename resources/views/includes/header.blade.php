<header class="bg-gray-200 border-gray-400 border-b-2 mb-4">
    <div class="HeaderContainer min-h-32  text-black flex items-center flex-col">
        <div class="TopContainer text-2xl font-bold mt-4 border-b border-gray-800 w-1/2 text-center mx-auto pb-4">
            Laravel ToDo
        </div>
        <div class="BottomContainer mt-4">
            <div class="NavBar">
                <a href="{{route('home')}}"class="p-4 font-bold uppercase hover:bg-black hover:text-white {{Request::RouteIs('home') ? "bg-black text-white":""}}">Home</a>
                <a href="{{route('login')}}"class="p-4 font-bold uppercase hover:bg-black hover:text-white {{Request::RouteIs('login') ? "bg-black text-white":""}}">Login</a>
                <a href="{{route('register')}}"class="p-4 font-bold uppercase hover:bg-black hover:text-white {{Request::RouteIs('register') ? "bg-black text-white":""}}">Register</a>
                <a href="{{route('logout')}}"class="p-4 font-bold uppercase hover:bg-red-500 hover:text-white">Logout</a>
            </div>
        </div>
    </div>
</header>