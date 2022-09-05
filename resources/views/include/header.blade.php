<div class="shadow-md py-4 justify-between flex">
    <div class="flex gap-6 items-center">
        <img src="assets/logo.svg" class="ml-10" width="10%" alt="">
        <button id="dropdownDefault" data-dropdown-toggle="dropdown" class=" flex items-center" type="button">All Courses<svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
        <div id="dropdown" class="hidden z-10 w-44 rounded divide-y divide-gray-100 shadow-3xl bg-gray-50 dark:bg-gray-700">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
              <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Web Development</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Business</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Design</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Marketing</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Photography & Video</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Health & Fitness</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Music</a>
              </li>
              <li>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Teaching & Academics</a>
              </li>
            </ul>
        </div>
        <form action="" class="gap-0 flex">
            <input type="search" placeholder="Search for courses"
                class="border border-purple-500 rounded-tl-lg rounded-bl-lg py-2 px-3 border-r-0" size="60">
            <button type="submit"
                class="border border-purple-500 rounded-tr-lg rounded-br-lg p-2 bg-gray-100 boredr-l-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd" />
                </svg></button>
        </form>
    </div>
    <ul class="flex gap-5 items-center">
        <li><a href="{{ route('homepage') }}">Home</a></li>
        @guest
            <li><a href="{{ route('login') }}"
                    class="border border-black py-1 px-3 hover:bg-gray-100 font-semibold rounded">Login</a>
            </li>
            <li><a href="{{ route('register') }}"
                    class="border border-black py-1 px-3 bg-black text-white font-semibold rounded">Sign
                    up</a></li>
        @endguest
        @auth
            <li><a href="{{ route('logout') }}"
                    class="border border-red-500 py-1 px-3 bg-red-500 text-white font-semibold rounded">Logout</a></li>
        @endauth
        <li class="text-2xl mr-10"><a href=""><i class="bi bi-cart"></i></a></li>
    </ul>
</div>
