@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Latest Posts:</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (empty($posts) === true)

                        <h3>No posts just yet, check in again soon 😉👍 </h3>

                    @else

                        {{--TODO: Create separate template for this--}}
                        @foreach ($posts->collection as $index => $post)
                            <a class="post-title w3-hover-shadow" href="/post/{{ $post->slug }}">
                                <div class="w3-card-4">
                                    <header class="w3-container w3-center @if ($index % 2 === 0) w3-flat-turquoise @else w3-flat-pumpkin @endif ">
                                        <h3>{{ $post->title }}</h3>
                                    </header>

                                    <div class="w3-container w3-center post-body" style="min-height: 200px; padding-top: 10px">
                                        <p>{{ $post->body }}</p>
                                    </div>

                                    <footer class="w3-container @if ($index % 2 === 0) w3-flat-orange @else w3-flat-green-sea @endif">
                                        <h5>author: {{ $post->user->name }}</h5>
                                        <h5>created: {{ $post->created_at }}</h5>
                                    </footer>
                                </div>
                            </a>
                            <br/>
                        @endforeach

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
