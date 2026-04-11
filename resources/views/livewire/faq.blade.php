<div class="max-w-6xl mx-auto felx flex-col text-center pt-4">
    <h1 class="text-xl md:text-2xl lg:text-3xl text-brand py-3 px-4 font-serif">Frequently Ask Qestion</h1>
    <p>The Thinges You Need To Know</p>
    @foreach ($data as $q)
        <h1 class="text-xl md:text-2xl lg:text-3xl text-brand py-3 px-4 font-serif">{{ $q[0]}}</h1>
        <button></button>
    @endforeach
    {{-- Care about people's approval and you will be their prisoner. --}}
</div>
