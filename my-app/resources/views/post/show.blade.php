<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            個別表示
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto px-6">
        @if (session('message'))
            <p class="text-red-600 font-bold">
                {{ session('message') }}
            </p>
        @endif
        <div class="mt-6 p-6 bg-white rounded-2xl shadow-md border border-gray-200">
            <div class="mt-4 p-4">
                <h1 class="text-lg font-semibold">{{ $post->title }}</h1>
                <div class="text-right flex">
                    <a href="{{ route('post.edit', $post) }}" class="flex-1">
                        <x-primary-button>編集</x-primary-button>
                    </a>
                    <form action="{{ route('post.destroy', $post) }}" method="POST" class="flex-2">
                        @csrf
                        @method('delete')
                        <x-primary-button class="bg-red-700 ml-2">削除</x-primary-button>
                    </form>
                </div>
                <hr class="w-full">
                <p class="mt-4 whitespace-pre-line">{{ $post->body }}</p>
                <div class="flex justify-end w-full text-sm font-semibold">
                    <p>{{ $post->created_at }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
