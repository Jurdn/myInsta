@extends('layouts.app')

@section('content')
<div class="container card-header align-middle">
    <form action="/post" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <h1>New Post</h1>
        </div>
        <div class="row">
            <label for="image" class="col-md-4 col-form-label"><Strong>Image</Strong></label>
            <input type="file", class="form-control-file" id="image" name="image">

            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <div class="form-group row">
            <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

            <input id="caption"
                   type="text"
                   class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}"
                   name="caption"
                   value="{{ old('caption') }}"
                   autocomplete="caption" autofocus>

            @if ($errors->has('caption'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('caption') }}</strong>
                </span>
            @endif
        </div>
        <div class="row pt-5 float-right">
            <button class="btn btn-primary">Add Post</button>
        </div>
    </form>
</div>
@endsection
