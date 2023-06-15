<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        {{-- 
        VITE
        @vite(['resources/css/app.scss', 'resources/js/app.js'])
        --}}
        @vite('resources/scss/app.scss')

        @stack('styles')
        {{-- Styles --}}
        @livewireStyles
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div id="main" 
            class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" 
            data-turn-enter 
            data-turn-exit>

            @include('layouts.partials.header')

            {{ $slot }}

            @include('layouts.partials.footer')
        </div>
        
        @stack('modals')
        
        <svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                @component('svg.logos.talu')@endcomponent
                @component('svg.logos.goimobil-go')@endcomponent

                @component('svg.icons.bars-3')@endcomponent
                @component('svg.icons.x-mark')@endcomponent

                @component('svg.icons.social.facebook')@endcomponent
                @component('svg.icons.social.instagram')@endcomponent
                @component('svg.icons.social.linkedin')@endcomponent
                @component('svg.icons.social.youtube')@endcomponent
                @component('svg.icons.social.twitter')@endcomponent
                @component('svg.icons.social.whatsapp')@endcomponent

                @stack('svgs')
            </defs>
        </svg>

        @vite('resources/js/app.js')
        @stack('scripts')
        @livewireScripts
        <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
    </body>
</html>
