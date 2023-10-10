@extends('partials.layout')

@section('content')
    <div class="container mx-auto">
        <form action="{{route('articles.update', ['article' => $article])}}" method="POST">
            @csrf
            <div class="field w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                <div class="flex items-center justify-between px-3 py-2 border-b dark:border-gray-600">
                    <div class="flex flex-wrap items-center divide-gray-200 sm:divide-x dark:divide-gray-600">
                        <div class="flex items-center space-x-1 sm:pr-4">
                            <label>
                                <input type="text" name="title" value="{{$article->title}}" class="text text-gray-800 w-full rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600"/>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="field px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                    <label for="editor" class="sr-only">Publish post</label>
                    <textarea id="editor" name="body" rows="8" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write an article..." required>{{$article->body}}</textarea>
                </div>
            </div>
            <div class="field space-x-4">
                <input type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-black bg-pink-400 rounded-lg focus:ring-4 focus:ring-pink-200 dark:focus:ring-pink-900 hover:bg-pink-800"/>
            </div>
        </form>
    </div>
@endsection
