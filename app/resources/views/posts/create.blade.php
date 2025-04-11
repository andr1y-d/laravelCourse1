@extends('layouts.main')

@section('title')
    <title>Add post</title>
@endsection

@section('content')
    <h1>{{ $title }}</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Post title" value="{{ old('title') }}">
            @if($errors->has('title'))
                <div class="invalid-feedback">
                    {{ $errors->first('title') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="Post slug" value="{{ old('slug') }}">
            @if($errors->has('slug'))
                <div class="invalid-feedback">
                    {{ $errors->first('slug') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <input type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content" placeholder="Post content" value="{{ old('content') }}">
            @if($errors->has('content'))
                <div class="invalid-feedback">
                    {{ $errors->first('content') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category ID</label>
            <select class="form-select" name="category_id" aria-label="Default select example" value="{{ old('category_id') }}">
                <option value="1">Category One</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection

