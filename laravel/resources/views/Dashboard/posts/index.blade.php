@extends('Dashboard.layouts.main')
@section('container')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
          <h1 class="h2">My Post</h1>
        </div>
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
          {{ session('success') }}
        </div>
        @endif
        <a href="/dashboard/post/create" class="btn btn-primary mb-3">Uploud Your Image</a>
        <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Image</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->category }}</td>
              <td>{{ $post->image }}</td>  
              <td>
              <a class="badge bg-info" href="/dashboard/post/{{ $post->id }}">
                <span data-feather="eye" width="15"></span>
              </a>
              <a class="badge bg-warning" href="/dashboard/post/{{ $post->id }}/edit">
                <span data-feather="edit" width="15"></span>
              </a>
              <form action="/dashboard/post/{{ $post->id }}" method="post" class="d-inline-block">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><span data-feather="x-circle" width="15" ></button>
              </form>
              </td>  
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  @endsection

