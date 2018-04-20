@extends('layouts.app')

@section('content')

@php
  echo $post->title;
  echo "<br>";
  echo $post->content;
@endphp
@endsection
