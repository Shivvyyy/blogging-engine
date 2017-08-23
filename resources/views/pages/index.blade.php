<!doctype html>
@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
    <h1>Welcome To Laravel</h1>
    <p>This is the laravel blogging engine made by Shivyan</p>
    @if(Auth::guest())
    <p><a class="btn btn-primary-btn-lg" href="/login" role="button">Login</a> <a class="btn btn-sucess btn-lg" href="/register" role="button">Register</a></p>
    @endif
    </div>
@endsection