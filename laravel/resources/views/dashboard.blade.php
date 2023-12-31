@extends('layouts.app')
@section('page')
@extends('Dashboard.layouts.main')
@section('container')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
          <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
        </div>

        <h2>Section title</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
                <th scope="col">Header</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1,001</td>
                <td>random</td>
                <td>data</td>
                <td>placeholder</td>
                <td>text</td>
                <td><a href="/dashboard/posts/" class="badge btn-dark"><span data-feather="eye"></span></a></td>
              </tr>
              <tr>
                <td>1,001</td>
                <td>random</td>
                <td>data</td>
                <td>placeholder</td>
                <td>text</td>
                <td><a href="#" class="badge btn-dark"><span data-feather="eye"></span></a></td>
              </tr>
            </tbody>
          </table>
        </div>
  @endsection
@endsection

