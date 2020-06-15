@extends('layouts.default')


@section('content')
    <div class="col-lg-4">
        <h2>Search Results: <span>{{ Request::input('user') }}</span></h2>
         @include('user.userBlock')
    </div>
@endsection



