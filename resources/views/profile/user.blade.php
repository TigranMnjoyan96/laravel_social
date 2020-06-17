@extends('layouts.default')


@section('content')
    <p>{{ $username->username }}</p>
    <p>{{ $username->email }}</p>
@endsection
