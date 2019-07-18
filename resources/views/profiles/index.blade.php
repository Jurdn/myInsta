@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" style="width: 200px" class="rounded-circle">
        </div>
        <div class="col-9 pt-5 pl-5">
            <div class="d-flex"><h1><strong>{{ $user->username }}</strong></h1>
                <div>
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit" style="text-align: right">Edit profile</a>
            @endcan
            <div class="d-flex">
                <div class="pt-3 pb-3"><strong>{{ $user->posts->count() }}</strong> publications</div>
                <div class="pt-3 pb-3 pl-3"><strong>{{ $user->profile->follower->count() }}</strong> abonnés</div>
                <div class="pt-3 pb-3 pl-3"><strong>{{ $user->following->count() }}</strong> abonnements</div>
            </div>
            <div><strong>{{ $user->profile->title }}</strong></div>
            <div>
                {{ $user->profile->bio }}
            </div>
            <div class="d-flex justify-content-between">
                <a href="https://google.com">{{ $user->profile->url ?? 'https://www.saint-gobain.com/fr'}}</a>
                @can('update', $user->profile)
                <a href="/post/create" style="color: white;"><button class="btn btn-primary">[ + ] Post</button></a>
                @endcan
            </div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/post/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
