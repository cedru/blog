@extends('partials.layout')

@section('content')
    <div class="container mx-auto">
        <div>
            <table class="table">
                <thead>
                <th>Id</th>
                <th>Title</th>
                <th>Created</th>
                <th>Updated</th>
                </thead>
                <tbody>

                    <tr>q
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->created_at}}</td>
                        <td>{{$article->updated_at}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <h1>Id</h1>
                <h2><?=$article->id?></h2>
            </div>
            <div class="card-body">
                <h1>Title</h1>
                <h2><?=$article->title?></h2>
            </div>
            <div class="card-body">
                <h1>Content</h1>
                <h2><?=$article->body?></h2>
            </div>
        </div>
    </div>
@endsection
