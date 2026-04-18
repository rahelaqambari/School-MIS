<x-app-layout>
        {{-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}

    <div class="py-9">
        <div class=" grid grid-cols-4">
            <div class="bg-gray-700 col-span-1  dark:bg-gray-800 overflow-hidden shadow-sm">
                 <h2 class="font-serif text-center bg-gray-700 text-xl  text-white dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
        <div class="flex flex-col gap-4 min-h-screen h-fit">
            <div class="flex gap-2 px-4 pt-4">
            <i class="fa fas-user"></i>
              <h2 class=" text-xl  text-white  leading-tight">
            Employee
        </h2>
            </div>
             <div class="flex gap-2 px-4 ">
            <i class="fa fas-user"></i>
              <h2 class=" text-xl  text-white  leading-tight">
            Contract
        </h2>
            </div>
             <div class="flex gap-2 px-4 ">
            <i class="fa fas-user"></i>
              <h2 class=" text-xl  text-white  leading-tight">
            Student
        </h2>
            </div>
             <div class="flex gap-2 px-4 ">
            <i class="fa fas-user"></i>
              <h2 class=" text-xl  text-white  leading-tight">
            Teacher
        </h2>
            </div>
        </div>
            </div>
        </div>
    </div>
</x-app-layout>
