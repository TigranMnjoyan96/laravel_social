@extends('layouts.default')


@section('content')
    <h2>Sign Up</h2>
    <form action="{{ route('signup') }}" method="POST" novalidate>
        @csrf
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="pass" id="password" placeholder="Password">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
