@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <a href="/">⬅ Cancel</a><br/>

                <div class="panel panel-default">
                    <div class="panel-heading">Create Post</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        {!! Form::open(
                            [
                                'url' => route('admin.post.store'),
                                'method' => 'POST',
                                'class' => 'form-horizontal'
                            ]
                        ) !!}
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <label for="title">Title:</label>
                            <input class="w3-input" type="text" name="title" required/>

                            <label for="body">Content:</label>
                            <textarea class="w3-input w3-border" style="resize:none" name="body" required></textarea>

                            <br/>
                            <input type="checkbox" name="published"/>
                            <label for="published">Publish ?</label>

                            <br/>
                            <p><button type="submit" class="w3-btn w3-padding w3-teal" style="width:120px">Create &nbsp; ❯</button></p>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection