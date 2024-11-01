<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function showData()
    {
        return view('show_data');
    }
    public function add_data()
    {
        return view('add_data');
    }
    public function store_data(Request $request)
    {
        // $rules=$request->validate([
        //     'name'=>''
        // ]);
        $rules = [
            'name' => 'required | max:10',
            'email' => 'required | email',
        ];

      $custom_message = [
        'name.required'=> 'Please Enter Your Name',
        'name.max'=> 'Your name should not exced the 10 caracter limit',
        'email.required'=> 'Enter your Email',
        'email.email'=> 'Enter a valid Email Address',
      ];
        $this->validate($request, $rules, $custom_message);
        return $request->all();
    }
}
