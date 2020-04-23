@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if(count($posts) > 0)
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Body</th>
                                    <th scope="col">Author</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td>{{Str::limit($post->body, 10)}}</td>
                                        <td>{{Auth::user()->name}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                        <p class="lead">You have no posts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
