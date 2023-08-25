<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!! SEO::generate() !!}

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="bg-gray-900">
        <x-header-component />

        <main class="h-full mb-20 relative max-w-[52rem] mx-auto px-4 sm:px-6 md:px-8 xl:px-12 lg:max-w-7xl md:w-auto">

            <div class="mb-16 md:mb-36 flex mt-20">
                <div class="md:w-3/4 text-md md:text-lg md:leading-8 mt-24">
                    <h1 class="text-4xl md:text-6xl font-extrabold text-amber-700">Stories
                    </h1>

                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                
                @foreach($stories as $story)
                    <div class="bg-white rounded shadow-lg overflow-hidden">
                        @if($story->featured_image)
                        <img src="{{ $story->featured_image->getUrl('preview') }}" alt="{{ $story->title}}" class="w-full h-auto object-cover">
                        @endif
                        <div class="p-4">
                            <h2 class="text-lg font-semibold mb-2">{{ $story->title}}</h2>
                            <p class="text-gray-600">{{ Str::limit($story->body,200) }}</p>
                            <div class="mt-4">
                                <a href="{{ route('stories.show',$story->slug)}}" class="text-amber-500 hover:underline">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>

        <livewire:subscriber-component />
    </div>
    <x-footer-component />
</body>

</html>