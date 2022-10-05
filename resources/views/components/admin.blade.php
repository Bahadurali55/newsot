<header class="text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
                viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-4xl font-serif">SOT</span>
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
            <a href="{{url('courses')}}" class="mr-5 hover:text-gray-900 font-bold font-serif">Cources</a>
            <a href="{{url('instructors')}}" class="mr-5 hover:text-gray-900 font-bold font-serif">Instructor</a>
            <a href="{{url('students')}}" class="mr-5 hover:text-gray-900 font-bold font-serif">Student</a>
            <a href="{{url('summaries')}}" class="mr-5 hover:text-gray-900 font-bold font-serif">Summary</a>
        </nav>
        <div>
            admin |
        </div>
        <div class="pl-2"><a href="{{url('login')}}">Logout</a></div>
    </div>
</header>