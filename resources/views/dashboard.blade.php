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
        <div class=" grid grid-cols-4">
           <livewire:dashboard.sidebar/>
            <div class="col-span-3 shadow-sm">
                <div class="grid-cols-2 w-full min-h-screen gap-4 ">
                   <div>
                     <h1 class="text-2xl ">Employee</h1>
                   </div>
                </diiv>
            </div>
        </div>
</x-app-layout>
</body>
</html> 
