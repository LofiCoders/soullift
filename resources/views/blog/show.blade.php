<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!! SEO::generate() !!}

    <meta name="description" content="{!! $post->body !!}">
    <meta name="keywords" content="comma, separated, keywords, related, to, your, content">
    <meta name="author" content="{{ $post->author->name }}">

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
    <title>{{ $post->title }}</title>
</head>

<body class="bg-gray-900">
    <x-header-component />
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8 py-24 px-4 flex">
            <article class="prose max-w-none text-white">
                <h1 class="text-4xl font-bold mb-4">{{ $post->title }}</h1>
                <p class="mb-4">Published on {{ $post->updated_at}}</p>
                @if($post->featured_image)
                <img src="{{ $post->featured_image->getUrl('preview') }}" alt="Blog Post Image" class="mb-8 rounded-lg">
                @endif
                <p class="mt-5">{!! $post->body !!}</p>
            </article>
        </div>
    </div>
    <livewire:subscriber-component />
    <x-footer-component />
</body>

</html>