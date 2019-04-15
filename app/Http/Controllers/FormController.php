<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FormController extends Controller {
    //This method return welcome page view with a verification code to ensure the human input
    public function welcome() {
      $code = Str::random(4);
      return view('welcome')->with(['code'=>$code]);
    }

    //This method return form page view
    public function form() {
      return view('form');
    }

    public function process_form(Request $request) {
      // Validation
      $request->validate([
        'species' => 'required',
        'age' => 'required|digits:2',
        'gender' => 'required',
        'symptom'=> 'required'
      ]);

      return redirect('/confirmation')->with([
        'species'=>$request->input('species'),
        'age'=>$request->input('age'),
        'gender'=>$request->input('gender'),
        'visited'=>$request->input('visited'),
        'symptom'=>$request->input('symptom')
      ]);
    }

    public function confirm_page(Request $request) {
      return view('confirm')->with([
        'species'=>$request->session()->get('species',''),
        'age'=>$request->session()->get('age',''),
        'gender'=>$request->session()->get('gender',''),
        'visited'=>$request->session()->get('visited',''),
        'symptom'=>$request->session()->get('symptom',''),
      ]);
    }

    //Practice for quiz
    public function practice($title = null){
      dump($title);
      return view('practice');
    }
}
