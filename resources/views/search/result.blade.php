@extends('layouts.default')


@section('content')
    <div class="col-lg-4">
        <h2>Search Results: <span>{{ Request::input('user') }}</span></h2>
        @if (!$users->count())
            <p>User not found</p>
        @else
        <div class="row">
            <div class="col-lg-4">
                @foreach ($users as $user)
                    @include('user.userBlock')
                @endforeach
            </div>
        </div>
        @endif
    </div>
@endsection



