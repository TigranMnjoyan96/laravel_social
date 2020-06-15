@extends('layouts.default')


@section('content')
    <h2>Sign Up</h2>
    @if ($errors)
        @foreach ($errors as $err)
            <div class="alert-alert-danger">
                {{ $err }}
            </div>
        @endforeach
    @endif
    <form action="{{ route('signup') }}" method="POST" novalidate>
        @csrf
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="pass" id="password" placeholder="Password">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
