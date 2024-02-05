@extends('Dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">User</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-6" role="alert">
  {{ session('success') }}
</div>
@endif
<div class="table-responsive col-lg-6">
  <a href="/dashboard/user/create" class="btn btn-primary mb-3">Create New User</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($user as $user)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $user->name }}</td>
        <td>
          <a href="/dashboard/password/{{ $user->id }}" class="badge bg-warning"><span data-feather="edit"></span></a>
          <!-- <form action="/dashboard/user/{{ $user->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="confirm('Are You Sure?')"><span data-feather="x-circle"></span></button>
          </form> -->

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

{{-- pagination --}}

{{-- <div class="d-flex justify-content-end col-lg-8">
    {{ $posts->links() }}
</div> --}}
@endsection