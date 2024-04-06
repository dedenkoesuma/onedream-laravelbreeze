@extends('Dashboard.layouts.main')

@section('container')
  <a class="btn btn-primary mt-4 align-items-center d-flex m-0 col-lg-3" href="/dashboard/post">
    <span data-feather="arrow-left" width="15" class="me-3"></span>
    Back to all my post
  </a>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit My Post</h1>
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="col-lg-8 mt-5">
    <form method="post" action="/dashboard/post/{{ $posts->id }}" enctype="multipart/form-data">
      @method('put')
      @csrf
      <!-- title -->
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Input Title" required autofocus value="{{ old('title', $posts->title) }}">
        @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <!-- end title -->

      <!-- category -->
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select @error('category') is-invalid @enderror" id="category" name="category" required>
          <option value="fotografi" @if(old('category', $posts->category) === 'fotografi') selected @endif>Fotografi</option>
          <option value="desaingrafis" @if(old('category', $posts->category) === 'desaingrafis') selected @endif>Desain Grafis</option>
          <option value="videografi" @if(old('category', $posts->category) === 'videografi') selected @endif>Videografi</option>
        </select>
        @error('category')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <!-- end category -->

      <!-- img -->
      <div class="mb-3" id="imageInput">
        <label for="image" class="form-label">Post Image</label>
        @if($posts->image)
        <img src="{{ asset('storage/'.$posts->image) }}" class="img-preview img-fluid mb-3 col-sm-5">
        @else
        <img class="img-preview img-fluid mb-3 col-sm-5">
        @endif

        <input class="form-control @error('image') is-invalid @enderror border-1 p-1" type="file" id="image" name="image" onchange="previewImage()">
        @error('image')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <!-- Menambahkan input untuk tautan video -->
      <div class="mb-3" id="videoInput">
        <label for="video" class="form-label">Video Link</label>
        <input type="text" class="form-control @error('video') is-invalid @enderror" id="video" name="video" placeholder="Input Video Link" required value="{{ old('video', $posts->video) }}">
        @error('video')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary" style="background-color: #0f143b;">Submit</button>
    </form>
  </div>
@endsection
