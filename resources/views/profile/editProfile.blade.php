@extends('layouts.default')


@section('content')
    <div class="row">
        <div class="container">
            <div class="col-lg-5 mx-auto">
                <h2>Edit Profile</h2>
                <form action="{{ route('signup') }}" method="POST" novalidate>
                    @csrf
                    <div class="form-group">
                      <label for="first_name">First Name</label>
                      <input type="text" class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" value="" name="first_name" id="first_name">
                      @if ($errors->has('first_name'))
                          <span class="help-block text-danger">{{ $errors->first('first_name') }}</span>
                      @endif
                    </div>

                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" value="" name="username" id="username">
                        @if ($errors->has('last_name'))
                            <span class="help-block text-danger">{{ $errors->first('last_name') }}</span>
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
        </div>
    </div>
@endsection
