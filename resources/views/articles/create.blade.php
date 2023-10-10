@extends('partials.layout')

@section('content')
    <div class="container mx-auto">
        <div class="w-250 y-250 space-y-4">
            <div>
                <h1 class="text-2xl font-bold">Publish an article</h1>
            </div>
            <form action="{{route('articles.store')}}" method="POST">
                @csrf
                <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                    <div class="flex items-center justify-between px-3 py-2 border-b dark:border-gray-600">
                        <div class="flex flex-wrap items-center divide-gray-200 sm:divide-x dark:divide-gray-600">
                            <div class="flex items-center space-x-1 sm:pr-4">
                                <input type="text" name="title" placeholder="Title" class="text text-gray-800 w-full rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                        <label for="editor" class="sr-only">Publish post</label>
                        <textarea id="editor" name="body" rows="8" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write an article..." required></textarea>
                    </div>
                </div>
                <div class="space-x-4">
                <button type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-black bg-pink-400 rounded-lg focus:ring-4 focus:ring-pink-200 dark:focus:ring-pink-900 hover:bg-pink-800">
                    Publish post
                </button>
                <input type="file" class="file-input file-input-primary w-full max-w-xs" />
                </div>
            </form>

        </div>
    </div>
@endsection
