@extends('layouts.app')

@section('content')
<div class="container card-header align-middle">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <h1>Edit Profile</h1>
        </div>
        <div class="row">
            <label for="image" class="col-md-4 col-form-label"><Strong>Profile Picture</Strong></label>
            <input type="file", class="form-control-file" id="image" name="image">

            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label">title</label>

            <input id="title"
                   type="text"
                   class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                   name="title"
                   value="{{ old('title') ?? $user->profile->title }}"
                   autocomplete="title" autofocus>

            @if ($errors->has('title'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group row">
            <label for="bio" class="col-md-4 col-form-label">Biography</label>

            <input id="bio"
                   type="text"
                   class="form-control{{ $errors->has('bio') ? ' is-invalid' : '' }}"
                   name="bio"
                   value="{{ old('bio') ?? $user->profile->bio}}"
                   autocomplete="bio" autofocus>

            @if ($errors->has('bio'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('bio') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group row">
            <label for="url" class="col-md-4 col-form-label">Website</label>

            <input id="url"
                   type="text"
                   class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}"
                   name="url"
                   value="{{ old('url') ?? $user->profile->url}}"
                   autocomplete="url" autofocus>

            @if ($errors->has('url'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('url') }}</strong>
                </span>
            @endif
        </div>
        <div class="row pt-5 float-right">
            <button class="btn btn-primary">Save Changes</button>
        </div>
    </form>
</div>
@endsection
