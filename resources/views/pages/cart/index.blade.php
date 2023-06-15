<x-guest-layout>
    <h1>Cart</h1>
    @livewire('cart')

    <div>
        <a href="{{ route('home') }}" class="">Home</a>
    </div>

    @for ($i = 0; $i < 20; $i++)
        <p>Teste</p>
        <p>Teste</p>
    @endfor
</x-guest-layout>