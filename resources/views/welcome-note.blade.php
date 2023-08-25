<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Greetings, dear souls, and welcome to Soul Lift! This is a haven of emotional well-being, a space where you become a part of a community rooted in shared experiences, boundless compassion, and the unbreakable spirit of growth. Life's journey is peppered with trials and tribulations, shaping us through both darkness and transformation. ">
    <meta name="keywords" content="Greetings, souls, welcom,emotional,well-being">
    <link rel="canonical" href="https://www.soullift.info/welcome-note">
    <meta name="robots" content="index, follow">
    <!-- Open Graph (OG) Meta Tags -->
    <meta property="og:title" content="Welcome note">
    <meta property="og:description" content="Greetings, dear souls, and welcome to Soul Lift! This is a haven of emotional well-being, a space where you become a part of a community rooted in shared experiences, boundless compassion, and the unbreakable spirit of growth. Life's journey is peppered with trials and tribulations, shaping us through both darkness and transformation.">
    <meta property="og:image" content="{{ asset('images/hero.png') }}">
    <meta property="og:url" content="https://www.soullift.info/welcome-note">
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Welcome note">
    <meta name="twitter:description" content="Greetings, dear souls, and welcome to Soul Lift! This is a haven of emotional well-being, a space where you become a part of a community rooted in shared experiences, boundless compassion, and the unbreakable spirit of growth. Life's journey is peppered with trials and tribulations, shaping us through both darkness and transformation.">
    <meta name="twitter:image" content="{{ asset('images/hero.png') }}">

    <title>Welcome note</title>

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
    <x-header-component/>
    <main class="relative isolate bg-gray-900">
        <div class="absolute inset-x-0 top-4 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl" aria-hidden="true">
            <div class="aspect-[1108/632] w-[69.25rem] flex-none bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-25" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"></div>
        </div>
        <!-- Header section -->
        <div class="px-6 pt-14">
            <div class="mx-auto max-w-7xl pt-24 text-left sm:pt-40  lg:px-8">
                <h2 class="text-4xl font-bold tracking-tight text-amber-600 sm:text-6xl">Welcome to Soul Lift – A Sanctuary of Resilience and Connection</h2>
                <p class="mt-6 text-lg leading-8 text-gray-300">
                    Greetings, dear souls, and welcome to Soul Lift! This is a haven of emotional well-being, a space where you become a part of a community rooted in shared experiences, boundless compassion, and the unbreakable spirit of growth. Life's journey is peppered with trials and tribulations, shaping us through both darkness and transformation.
                </p>
            </div>
        </div>
        <!-- Content section -->
        <div class="mx-auto mt-20 max-w-7xl px-6 lg:px-8">
            <div class="text-white text-lg leading-8">
                <p>The path we tread might be lined with diverse traumas, igniting an unwavering passion for nurturing emotional wellness. Soul Lift is more than a blog; it's a vision that believes every individual, irrespective of their background, deserves a place of belonging and the promise of brighter tomorrows. Through the power of personal stories and the connection that blooms from shared experiences, we aim to construct bridges of understanding, dismantle the chains of stigma, and sow the seeds of openness. While not a professional counselor, the advocacy for emotional well-being stems from a journey of resilience and an enduring empathy for all souls treading this intricate path of life. Dignissim sed eget risus enim. Mattis mauris semper sed amet vitae sed turpis id.</p>
                <p class="mt-8">Here, we embark on a joint expedition of self-discovery – a journey where everyone uplifts one another, learns from experts, and weaves a tapestry of empowerment and support. Soul Lift is more than just a space; it's a sanctuary where we celebrate growth, nurture resilience, and ignite the flames of hope. In our collective stories, we find strength, solace, and the realization that none of us are alone in our struggles. Together, we become a force that uplifts, heals, and renews. So, whether seeking comfort, understanding, or simply a sense of connection, know that you have found a warm and welcoming corner of the internet right here at Soul Lift. From the depths of each heart to the depths of yours, an invitation stands to join this remarkable journey of healing, growth, and unwavering hope with boundless warmth.</p>
            </div>
        </div>

        <!-- Image section -->
        <div class="mt-12 sm:mt-40 xl:mx-auto xl:max-w-7xl xl:px-8">
            <img src="{{ asset('images/welcome.jpg')}}" alt="" class="aspect-[9/4] w-full object-cover xl:rounded-3xl">
        </div>
        <x-blog-component/>
    </main>
    <x-footer-component/>
</body>
</html>