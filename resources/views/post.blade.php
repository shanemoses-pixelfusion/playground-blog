@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <a href="/">⬅ Go Back</a><br/>

            <div class="panel panel-default">
                <div class="panel-heading">{{ $post->title }}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>author: <b>{{ $post->user->name }}</b></h5>
                    <h5>created: <b>{{ date_format($post->created_at, 'd F Y') }}</b></h5>

                    <p>{{ $post->body }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
