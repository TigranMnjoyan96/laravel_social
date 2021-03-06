@extends('layouts.default')


@section('content')
    <div class="col-5 mx-auto">
        <h2>Sign Up</h2>
        <form action="{{ route('signup') }}" method="POST" novalidate>
            @csrf
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ Request::old('email') ?: '' }}" name="email" id="email" placeholder="Enter email">
              @if ($errors->has('email'))
                  <span class="help-block text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" value="{{ Request::old('username') ?: '' }}" name="username" id="username"  placeholder="Enter username">
                @if ($errors->has('username'))
                    <span class="help-block text-danger">{{ $errors->first('username') }}</span>
                @endif
              </div>


            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" id="password" placeholder="Password">
              @if ($errors->has('password'))
              <span class="help-block text-danger">{{ $errors->first('password') }}</span>
          @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection
