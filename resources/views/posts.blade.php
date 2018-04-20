@extends('layouts.app')

@section('content')
<div class='col-sm-6 offset-sm-3'>
  @php
    foreach ($posts as $post) {
      echo "<div class='card'>";
      echo "<div class='card-header'>";
        echo $post->title;
      echo "</div>";

      echo "<div class='card-body'>";
      echo "<p>";
      echo App\User::find($post->user_id)->get()[0]->username;
      echo "</p><p>";
      echo $post->abstract;
      echo "</p></div></div>";
    }

  @endphp
</div>
@endsection
