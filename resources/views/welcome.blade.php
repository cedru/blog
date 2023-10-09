@extends('partials.layout')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-row flex-wrap">

            @foreach($articles as $article)
                <div class="basis-1/4 mb-4">
                    <div class="card w-96 bg-base-100 shadow-xl h-full">
                        <div class="card-body">
                            <h2 class="card-title">{{ $article->title }}</h2>
                            <p>{{ $article->snippet }}</p>
                                <div class="stat-desc">{{ $article->created_at->diffForHumans() }}</div>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary">Like</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
