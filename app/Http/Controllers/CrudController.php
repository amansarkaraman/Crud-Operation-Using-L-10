<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use App\Models\crud_two;


use Illuminate\Support\Facades\Session;



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
        // Validation Starts
        $rules = [
            'name' => 'required | max:10',
            'email' => 'required | email',
        ];

        $custom_message = [
            'name.required' => 'Please Enter Your Name',
            'name.max' => 'Your name should not exced the 10 caracter limit',
            'email.required' => 'Enter your Email',
            'email.email' => 'Enter a valid Email Address',
        ];
        $this->validate($request, $rules, $custom_message);
        // Validation Ends

        // Data Insert Starts
        // Create a instance for upload data and the instance is made for 
        // Acknowledging database vaibles with form valiable
        $instance_for_inser_data= new crud_two();
        // $instance_for_inser_data-> DataBase column Name =$request->Form feild name;
        $instance_for_inser_data->name=$request->name;
        $instance_for_inser_data->email=$request->email;
        $instance_for_inser_data->save();
        Session::flash('msg','Data Added');

        // Data Insert E    nds

        return redirect()->back();
    }
}
