<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            一覧表示
        </h2>
    </x-slot>
    <div class="mx-auto px-6">
        @if (session('message'))
            <p class="text-red-600 font-bold">
                {{ session('message') }}
            </p>
        @endif
        @foreach ($posts as $post)
            <div class="mt-6 p-6 bg-white rounded-2xl shadow-md border border-gray-200">
                <p class="p-4 text-lg font-semibold">
                    <a href="{{ route('post.show', $post) }}" class="text-blue-600">{{ $post->title }}</a>
                </p>
                <hr class="w-full">
                <p class="p-4">{{ $post->body }}</p>
            </div>
            <div class="p-4 text-sm font-semibold">
                <p>
                    {{ $post->created_at }} / {{ $post->user->name ?? '匿名' }}
                </p>
            </div>
        @endforeach
        <div class="mb-4">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
