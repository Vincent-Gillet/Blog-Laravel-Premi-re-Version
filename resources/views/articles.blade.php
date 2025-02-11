    @include('layouts.front.head')
    {{-- @include('layouts.front.article') --}}
    <div class="grid gap-4 grid-cols-2">
        @foreach($posts as $post)
            <div id="docs-card-content" class="flex-col flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->description }}</p>
                <p>{{ $post->content }}</p>
            </div>
        @endforeach         
    </div>


    @include('layouts.front.footer')