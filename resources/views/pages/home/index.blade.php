<x-guest-layout>

    @push('svgs')
        @component('svg.icons.social.facebook')@endcomponent
    @endpush

    <h1>Home</h1>
    @livewire('cart')

    <div>
        <a href="{{ route('cart') }}" class="">Cart</a>
    </div>


    <div class="w-full bg-header-light flex items-center dark:bg-header-dark bg-center bg-cover lg:h-screen py-24 relative">
        HEADER 2
        <svg class="w-12 h-12 inline-flex flex-shrink-0"
            viewBox="0 0 400 276.94">
            <use x="0" y="0" class="" xlink:href="#logo-talu"></use>
        </svg>
    </div>

</x-guest-layout>