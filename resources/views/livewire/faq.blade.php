<div class="max-w-6xl mx-auto felx flex-col text-center pt-4 bg-white mt-6">
    <div class="w-full grid grid-cols-3 gap-2 justify-between " >
        <div class="w-full col-span-1 rounded-lg ">
            <h1 class="text-2xl md:text-4xl lg:text-7xl text-brand py-3 px-4 font-serif">Frequently Ask Qestion</h1>
    <p class="font-meduim pt-6">The Thinges You Need To Know</p>
        </div>
    <div class=" w-full col-span-2 rounded-lg bg-white">
         <h1 class="text-xl md:text-2xl lg:text-3xl text-brand px-4 font-serif">FAQ</h1>
    @foreach ($data as $q)
        <h1 class="border border-b border-0 border-b-2 border-black w-[55%] px-2 py-3">{{ $q[0]}}</h1>
        <button></button>
    @endforeach
    </div>
    </div>
    {{-- Care about people's approval and you will be their prisoner. --}}
</div>
{{-- <div class="w-full grid grid-cols-3 gap-2" > --}}