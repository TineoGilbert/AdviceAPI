<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdviceController extends Controller
{
    public function index(){

      $advices =  Http::get('https://api.adviceslip.com/advice');
      $a = $advices->json();

        return view('Advice', compact('a'));
    }
}
