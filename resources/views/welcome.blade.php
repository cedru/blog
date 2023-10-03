@extends('layout')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-row flex-wrap">

            @foreach($articles as $article)
                <div class="basis-1/4 mb-4">
                    <div class="card w-96 bg-base-100 shadow-xl h-full">
                        <div class="card-body">
                            <h2 class="card-title">{{ $article->title }}</h2>
                            <p>{{ $article->body }}</p>
                        </div>
                        <figure><img src="/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
