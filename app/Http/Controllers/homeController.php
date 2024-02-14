<?php

namespace App\Http\Controllers;
use App\Models\Buy;
use Illuminate\Http\Request;

class homeController extends Controller
{
  public function index(){
    return view('welcome');
  }


}
