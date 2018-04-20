@extends('layouts.app')

@section('content')

  @php
    foreach ($posts as $post) {
      echo $post->title;
      echo $post->abstract;
      echo $post->content;
      echo $post->user()->username;
      //echo $post->user->username;
    }

  @endphp
@endsection
