<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
  public function index($id)
  {
    return "You are in index with id: $id";
  }
}
