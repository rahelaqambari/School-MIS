<div class="max-w-6xl mx-auto felx flex-col text-center pt-4 bg-white mt-6">
    <div class="w-full grid grid-cols-2 gap-2 justify-between " >
        <div class="w-full col-span-1 rounded-lg ">
            <h1 class="text-2xl md:text-4xl lg:text-7xl text-brand py-3 px-4 font-serif">Frequently</h1>
            <h1 class="text-2xl md:text-4xl lg:text-7xl text-brand py-3 px-4 font-serif"> Ask Qestion</h1>
    <p class="font-meduim pt-6">The Thinges You Need To Know</p>
        </div>
    <div class=" w-full col-span-1 rounded-lg bg-white">
         <h1 class="text-xl md:text-2xl lg:text-3xl text-brand px-4 font-serif">FAQ</h1>
    @foreach ($this->faq as $q=>$value )
    <div class = "flex w-full items-center">
        <h1 class="border border-b border-0 border-black  px-2 pt-2 pb-6 w-fit ">{{ $value[0]}}</h1>
      {{-- <button wire:click="change({{ $q }})"
    class="px-2 transform transition duration-200 {{ $value[2] ? 'rotate-180' : '' }}">
    ⬇️
</button>
       @if ($value[2])
    <p class="mt-2 transition-all duration-300">
        {{ $value[1] }}
    </p>
@endif --}}
       
    </div>
    @endforeach
    </div>
    </div>
   <script>
    
   </script>
</div>
