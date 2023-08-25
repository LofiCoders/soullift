<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Don't hesitate to contact soullift anytime and engage with our social media where we share daily contents.">
    <meta name="keywords" content="Greetings, souls, welcom,emotional,well-being,contact-us,contact">
    <link rel="canonical" href="https://www.soullift.info/welcome-note">
    <meta name="robots" content="index, follow">
    <!-- Open Graph (OG) Meta Tags -->
    <meta property="og:title" content="Contact">
    <meta property="og:description" content="Don't hesitate to contact soullift anytime and engage with our social media where we share daily contents.">
    <meta property="og:image" content="{{ asset('images/hero.png') }}">
    <meta property="og:url" content="https://www.soullift.info/contact-us">
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contact">
    <meta name="twitter:description" content="Don't hesitate to contact soullift anytime and engage with our social media where we share daily contents.">
    <meta name="twitter:image" content="{{ asset('images/hero.png') }}">

    <title>Contact</title>

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
    <x-header-component />
    <div class="relative isolate overflow-hidden bg-gray-900">
        <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
            aria-hidden="true">
            <defs>
                <pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%" y="-1"
                    patternUnits="userSpaceOnUse">
                    <path d="M.5 200V.5H200" fill="none" />
                </pattern>
            </defs>
            <svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
                <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                    stroke-width="0" />
            </svg>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)" />
        </svg>
        <div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]"
            aria-hidden="true">
            <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
                style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
            </div>
        </div>
        
        <div class="mx-auto max-w-7xl py-12 text-left sm:pt-40  lg:px-8">
            <h2 class="text-4xl font-bold tracking-tight text-amber-600 sm:text-3xl">Contact us</h2>
            
        </div>
        
        <div class="mx-auto max-w-7xl py-12 text-left sm:pt-20  lg:px-8">
            <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-3">
                <div>
                    <p class="mt-4 leading-7 text-white">Reach out to us by using the following channels.</p>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:col-span-2 lg:gap-8">
                    <div class="rounded-2xl bg-gray-50 p-10">
                        <h3 class="text-base font-semibold leading-7 text-gray-900">Email us</h3>
                        <dl class="mt-3 space-y-1 text-sm leading-6 text-gray-600">
                            <div>
                                <dt class="sr-only">Email</dt>
                                <dd>
                                    <a class="font-semibold text-gray-900" href="mailto:{{ $biography->email }}">{{ $biography->email }}</a>
                                </dd>
                            </div>
                        </dl>
                    </div>
                    <div class="rounded-2xl bg-gray-50 p-10">
                        <h3 class="text-base font-semibold leading-7 text-gray-900">Follow us</h3>
                        <dl class="mt-3 space-y-1 text-sm leading-6 text-gray-600">
                            <div>
                                <dt class="sr-only">X(Twitter)</dt>
                                <dd><a class="font-semibold text-gray-900" href="{{ $biography->twitter ?? '' }}" target="_blank">Soul Lift</a></dd>
                            </div>
                          
                        </dl>
                    </div>
                    <div class="rounded-2xl bg-gray-50 p-10">
                        <h3 class="text-base font-semibold leading-7 text-gray-900">Follow us</h3>
                        <dl class="mt-3 space-y-1 text-sm leading-6 text-gray-600">
                            <div>
                                <dt class="sr-only">Instagram</dt>
                                <dd><a class="font-semibold text-gray-900" href="{{ $biography->twitter }}" target="_blank">Soul Lift</a></dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <livewire:subscriber-component />
    <x-footer-component />
</body>

</html>