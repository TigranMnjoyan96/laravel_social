@extends('layouts.default')


@section('content')
    <div class="col-5 mx-auto">
        <h2>Sign In</h2>
        <form action="{{ route('signin') }}" method="POST" novalidate>
            @csrf
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ Request::old('email') ?: '' }}" name="email" id="email" placeholder="Enter email">
              @if ($errors->has('email'))
                  <span class="help-block text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>


            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" id="password" placeholder="Password">
              @if ($errors->has('password'))
              <span class="help-block text-danger">{{ $errors->first('password') }}</span>
          @endif
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection
