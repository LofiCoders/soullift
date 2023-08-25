<div>
    <header x-data="{ open: false }" @keydown.window.escape="open = false" class="absolute inset-x-0 top-0 z-50 bg-gray-600">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="/" class="-m-1.5 p-1.5">
                    <h1 class="h-8 w-auto text-2xl font-extrabold text-white">{{ trans('blog.site_title') }}</h1>
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white font-extrabold"
                    @click="open = true">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="/" class="uppercase italic hover:not-italic  font-extrabold leading-6 text-white">Home</a>
                <a href="/welcome-note" class="uppercase italic hover:not-italic font-extrabold leading-6 text-white">
                    Welcome
                </a>
                <a href="/blog" class="uppercase italic hover:not-italic  font-extrabold leading-6 text-white">Blog</a>
                <a href="" class="uppercase italic hover:not-italic font-extrabold leading-6 text-white">
                Contact</a>


            </div>

        </nav>
        <div x-description="Mobile menu, show/hide based on menu open state." class="lg:hidden" x-ref="dialog"
            x-show="open" aria-modal="true">
            <div x-description="Background backdrop, show/hide based on slide-over state." class="fixed inset-0 z-50">
            </div>
            <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-800 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
                @click.away="open = false">
                <div class="flex items-center justify-between">
                    <a href="/" class="-m-1.5 p-1.5">
                        <h1 class="h-8 w-auto text-2xl font-bold text-white">{{ trans('blog.site_title') }}</h1>

                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="open = false">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a href="#"
                                class="uppercase -mx-3 block rounded-lg px-3 py-2 text-base font-extrabold leading-7 text-white hover:bg-gray-50">About
                                me</a>
                            <a href="/blog"
                                class="uppercase -mx-3 block rounded-lg px-3 py-2 text-base font-extrabold leading-7 text-white hover:bg-gray-50">Blog</a>
                            <a href="{{ route('stories.index')}}"
                                class="uppercase -mx-3 block rounded-lg px-3 py-2 text-base font-extrabold leading-7 text-white hover:bg-gray-50">Stories</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>