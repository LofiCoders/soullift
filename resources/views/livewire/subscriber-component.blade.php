<div class="bg-gray-600 py-16 sm:py-24">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div
            class="relative isolate flex flex-col gap-10 overflow-hidden bg-gray-400 px-6 py-24 shadow-2xl sm:rounded-3xl sm:px-24 xl:flex-row xl:items-center xl:py-32">
            <h2 class="max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl xl:max-w-none xl:flex-auto">
                Get
                notified when we publish new article or post.</h2>
            <form wire:submit="subscribe" class="w-full max-w-md">
                <div class="flex gap-x-4">
                    <label for="email-address" class="sr-only">Email address</label>
                    <input id="email-address" wire:model.blur="email" name="email" type="email" autocomplete="email"
                           required=""
                           class="min-w-0 flex-auto rounded-md border-0 bg-white/500 px-3.5 py-2 text-black shadow-sm ring-1 ring-inset ring-white/100 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6"
                           placeholder="Enter your email">


                    <button type="submit"
                            class="flex-none rounded-md bg-gray-900 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-amber-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                        Notify
                        me
                    </button>


                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-2xl font-semibold"/>

            </form>
            <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2"
                 aria-hidden="true">
                <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7">
                </circle>
                <defs>
                    <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641" cx="0" cy="0" r="1"
                                    gradientUnits="userSpaceOnUse"
                                    gradientTransform="translate(512 512) rotate(90) scale(512)">
                        <stop stop-color="#7775D6"></stop>
                        <stop offset="1" stop-color="#E935C1" stop-opacity="0"></stop>
                    </radialGradient>
                </defs>
            </svg>
        </div>
    </div>
</div>
