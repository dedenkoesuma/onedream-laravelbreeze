@extends('Dashboard.layouts.main')
@section('container')
      <a class="btn btn-primary mt-4 align-items-center d-flex m-0 col-lg-3" href="/dashboard/post">
          <span data-feather="arrow-left" width="15"class="me-3" ></span>
          Back to all my post
      </a>
    <img src="{{asset('storage/' . $posts->image)}}" width="500px"  class="pt-5"alt="img">
    <h1 class="display-4 fw-bold">{{ $posts->title }}</h1>
    <p class="lead">{{ $posts->subtitle }}</p>
@endsection


