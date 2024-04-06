@extends('Dashboard.layouts.main')
@section('container')
        <a class="btn btn-primary mt-4 align-items-center d-flex m-0 col-lg-3" href="/dashboard/post">
            <span data-feather="arrow-left" width="15"class="me-3" ></span>
            Back to all my post
        </a>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
          <h1 class="h2">My Post</h1>
        </div>

      <div class="col-lg-8 mt-5"> 
       <form method="post" action="/dashboard/post" enctype="multipart/form-data">
          @csrf
          <!-- title -->
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"  name="title"placeholder="Input Title" required autofocus value="{{ old('title') }}">
            @error('title')
          <div class="Invalid-feedback">
              {{ $message }}
          </div>
          @enderror
          </div>
          <!-- end title -->

          <!-- category -->
          <div class="mb-3">
              <label for="category" class="form-label">Category</label>
              <select class="form-select @error('category') is-invalid @enderror" id='category' name="category">
                <option selected>select category</option>
                <option value="fotografi">Fotografi</option>
                <option value="desaingrafis">Desain Grafis</option>
                <option value="videografi">Videografi</option>
              </select>
              @error('category')
              <div class="Invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
            </div>
          <!-- end category -->

          <!-- post image -->
          <div class="mb-3" id="imageInput">
              <label for="image" class="form-label">Post Image</label>
              <input class="form-control @error('image') is-invalid @enderror border-1 p-1" type="file" id="image" name="image">
              @error('image')
              <div class="Invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
          </div>
        <!-- post image -->

        <!-- post video -->
        <div class="mb-3" id="videoInput" style ="display:none">
          <label for="video" class="form-label">Video Link</label>
          <input type="text" class="form-control" id="video" name="video">
        </div>
        <!-- post video -->
        </div>        
        <button type="submit" class="btn btn-primary" style="background-color: #0f143b;">Submit</button>
       </form>
      </div>

  @endsection