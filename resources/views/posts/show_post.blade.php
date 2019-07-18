@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-7 pt-5 pl-5">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex pt-5 align-items-center">
                <a href="/profile/{{ $post->user->id }}" style="color: black"><img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px">
                <div class="pl-3 d-flex font-weight-bold">
                    {{ $post->user->username }}</a>
                    <a href="#" class="pl-3">Follow</a>
                </div>
            </div>
            <hr>
            <div class="d-flex align-items-center">
                <a href="/profile/{{ $post->user->id }}"  style="color: black"><img src="/storage/{{ $post->user->profile->profileImage() }}" class="   rounded-circle w-100" style="max-width: 40px">
                <div class="pl-3">
                    <strong>{{ $post->user->username }}</a></strong>  {{ $post->caption }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
