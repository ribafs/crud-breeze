<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>
    <x-auth-validation-errors :errors="$errors" />
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{ route('posts.update',$post->id) }}">
                    @method('PUT')
                    @csrf
                    <div class="p-2 flex items-center">
                        <label for="title" class="w-20">Title:</label>
                        <input type="text" class="rounded-md border-gray-300 hover:border-gray-600 flex-1" name="title" value="{{ $post->title }}"/>
                    </div>
                    <div class="p-2 flex items-center">
                        <label for="body" class="w-20">Body:</label>
                        <input type="text" class="rounded-md border-gray-300 hover:border-gray-600 flex-1" name="body" value="{{ $post->body }}"/>
                    </div>
                    <div class="p-6">
                        <x-button> {{ __('Edit Post') }} </x-button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
