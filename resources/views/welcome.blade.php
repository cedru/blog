@extends('partials.layout')

@section('content')
    <div class="container mx-auto">
        {{$articles->links()}}
        <div class="flex flex-row flex-wrap">
            @foreach($articles as $article)
                <div class="basis-1/4 mb-4">
                    <div class="card mx-3 bg-base-100 shadow-xl h-full">
                        @if($article->image)
                            <figure><img src="{{$article->image}}"/></figure>
                        @endif
                        <div class="card-body">
                            <h2 class="card-title">{{ $article->title }}</h2>
                            <p>{{ $article->snippet }}</p>
                            <div class="stat">
                                <div class="stat-desc">{{ $article->user->name }}</div>
                                <div class="stat-desc"><b>Comments: </b>{{ $article->comments()->count() }}</div>
                                <div class="stat-desc"><b>Likes: </b>{{ $article->likes()->count() }}</div>
                                <div class="stat-desc">{{ $article->created_at->diffForHumans() }}</div>
                            </div>
                            <div class="card-actions justify-end">
                                <form action="{{route('like', ['article' => $article])}}" method="POST">
                                    @csrf
                                    <input type="submit" class="btn btn-primary" value="Like">
                                </form>
                                <a href="{{route('public.article', ['article' => $article])}}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
