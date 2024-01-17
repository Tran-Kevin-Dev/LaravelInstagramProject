@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://hips.hearstapps.com/vidthumb/images/attack-on-titan-64a2f3943cf21.jpg?crop=0.563xw:1.00xh;0.219xw,0&resize=1200:*" alt="Annie titan" class="rounded-circle" style="width: 200px;">
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>3</strong> following</div>
            </div>
            <div class="pt-4">
                <b> {{$user->profile->title}} </b>
            </div>
            <div>
                {{$user->profile->description}}
            </div>
            <div>
                {{$user->profile->url ?? 'I got no links'}}
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>
        @endforeach
    </div>
</div>
@endsection