@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/post" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h2>Update Your post</h2>
                </div>
                <div class="form-group-row">
                    <label for="caption" class="col-md-4 col-form-label">post caption</label>

                    <div class="col-md-6">
                        <input id="caption" name="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">post Image</label>

                        <input type="file" class="form-control-file" id="image" name="image">

                        @error('image')
                            <strong>{{ $message }}</strong> 
                        @enderror
                    </div>
                </div>

                <div class="row pt-4">
                    <div class="col-3">
                        <button class="btn btn-success">Add New Post</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection