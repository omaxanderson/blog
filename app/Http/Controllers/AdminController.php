<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class AdminController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

}

?>
