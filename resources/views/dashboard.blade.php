<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0                ">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>                                                 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZmHnM+YIY7q3F9+o+1pLZCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5Y=" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>                                 
<body>  
<x-app-layout>
        {{-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    <div class="py-9">
        <div class=" grid grid-cols-4">
            <div class="bg-gray-700 col-span-1  dark:bg-gray-800 overflow-hidden shadow-sm">
                 <h2 class="font-serif py-4 text-center bg-gray-700 text-2xl  text-white dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
        <div class="flex flex-col gap-4 min-h-screen h-fit">
            <div class="flex gap-2 px-4 pt-2">
            <i class="fas fa-circle-user"></i>
              <h2 class=" text-xl  text-white  leading-tight">
            Employee
        </h2>
            </div>
             <div class="flex gap-2 px-4 ">
            <i class="fas fa-user"></i>
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
            <div class="col-span-3 bg-gray-100 dark:bg-gray-800 overflow-hidden shadow-sm">
                <h1 class="text-2xl ">Employee</h1>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html> 
