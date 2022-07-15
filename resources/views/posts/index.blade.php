<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>
    @if(session()->get('success'))
        <div class="p-2 bg-indigo-200 border-b border-indigo-400 rounded-md">
        {{ session()->get('success') }}
        </div>
    @endif
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <a href="{{ route('posts.create')}}" class="inline-flex items-center px-4 py-2 mb-4 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">New Post</a>
                    <table class="shadow-lg">
                        <thead>
                            <tr class="bg-gray-400 text-white font-extrabold" >
                            <td class="px-4 py-1 text-center" >ID</td>
                            <td class="px-4 py-1">Title</td>
                            <td class="px-4 py-1 text-center w-2/6" colspan = '2'>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td class="border px-4 py-1 text-center">{{ $post->id }}</td>
                                <td class="border px-4 py-1">{{ $post->title }}</td>
                                <td class="border px-4 py-1">
                                    <a href="{{ route('posts.edit',$post->id)}}" class="inline-flex items-center px-4 py-1 bg-green-800 border border-transparent rounded-lg font-semibold text-xs text-white tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">Edit</a>
                                </td>
                                <td class="border px-4 py-1">
                                    <form action="{{ route('posts.destroy', $post->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-4 py-1 bg-red-800 border border-transparent rounded-lg font-semibold text-xs text-white tracking-widest hover:bg-red-700 active:bg-red-900 focus:outline-none focus:border-red-900 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination-wrapper"> {!! $posts->appends(['search' => Request::get('search')])->render() !!} </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
