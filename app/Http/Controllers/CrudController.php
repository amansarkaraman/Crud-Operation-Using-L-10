<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use App\Models\crud_two;

use Illuminate\Support\Facades\Session;

class CrudController extends Controller
{
    public function index()
    {
        return view('welcome');
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
        $instance_for_inser_data = new crud_two();
        // $instance_for_inser_data-> DataBase column Name =$request->Form feild name;
        $instance_for_inser_data->name = $request->name;
        $instance_for_inser_data->email = $request->email;
        $instance_for_inser_data->save();
        Session::flash('msg', 'Data Added');

        // Data Insert Ends
        return redirect('show_data');
    }
    // Show Data Starts
    public function show_data()
    {
        // $showData = crud_two::all();
        $showData = crud_two::paginate(5);
        return view('show_data', compact('showData'));
    }

    // Show Data Ends
    // Edit Data Starts
    public function edit_data($From_web_php_paased_value_catcher = null)
    {
        // return $From_web_php_paased_value_catcher;
        // Now we need to create an Instance for update the specific value
        $editable_data = crud_two::find($From_web_php_paased_value_catcher);
        return view('edit_data', compact('editable_data'));
    }
    // Upadte data Starts
    public function update_data(Request $request,$id)
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
        $instance_for_inser_data = crud_two::find($id);
        // $instance_for_inser_data-> DataBase column Name =$request->Form feild name;
        $instance_for_inser_data->name = $request->name;
        $instance_for_inser_data->email = $request->email;
        $instance_for_inser_data->save();
        Session::flash('msg', 'Data Added');

        // Data Insert Ends
        return redirect('show_data');
    }
    public function delete_data($From_web_php_paased_value_catcher = null)
    {
        // return $From_web_php_paased_value_catcher;
        // Now we need to create an Instance for update the specific value
        $delete_data = crud_two::find($From_web_php_paased_value_catcher);
        $delete_data->delete();
        Session::flash('msg','deleted Successfully');
        return redirect('/show_data');
    }
}
