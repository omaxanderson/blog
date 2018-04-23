@extends('layouts.app')

@section('content')
<h3 class='d-flex justify-content-center'>Admin Dashboard</h3>

<form action='/uploadPost' method='POST' enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class='form-group'>
    <label for='file-upload'>File</label><br>
    <input class='form-control col-sm-4' type='file' name='file-upload' accept='.html,.txt'>
    <button type='submit' class='btn btn-primary mt-2' value='submit'>Submit</button>
  </div>

</form>

@php
  if (isset($uploadMessage)) {
    if (strpos($uploadMessage, "success") !== false) {
      echo "<p class='text-success'>" . $uploadMessage . "</p>";
    } else {
      echo "<p class='text-danger'>" . $uploadMessage . "</p>";
    }
  }
@endphp

@endsection
