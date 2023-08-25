<div class="bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight uppercase text-amber-600 sm:text-4xl">Blog</h2>

        </div>
        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">

            @foreach ($posts as $post)

            <div class="h-full border-0 border-white border-opacity-60 rounded-lg overflow-hidden">
                @if($post->featured_image)
                <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                    src="{{ $post->featured_image->getUrl('preview') }}" alt="{{ $post->title }}">
                @endif
                <div class="p-6 bg-white">
                    @foreach ($post->categories as $key => $category)
                    <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{ $category->title }}
                    </h2>
                    @endforeach
                    <h1 class="title-fonttext-lg font-bold text-gray-900 mb-3">{{ $post->title }}</h1>
                    <p class="leading-relaxed mb-3">{!!Str::limit($post->body,
                        100) !!}</p>
                    <div class="flex items-center flex-wrap mt-5 ">
                        <a href="{{ route('blog.show',$post->slug) }}"
                            class="text-amber-500 inline-flex items-center md:mb-2 lg:mb-0">Read More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>