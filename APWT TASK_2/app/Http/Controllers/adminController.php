<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class adminController extends Controller
{
    public function registerList(){
        
          
        $customers = Customer::all();
        

        return view('registerList')->with('customers', $customers);
    }
    
    public function registration(){
        return view('registration');
    }
    
    public function login(){
        return view('login');
    }
    public function userEdit(Request $request){
        
        $customer = Customer::where('id', $request->id)->first();
        // return $student;
        return view('customer.userEdit')->with('customer', $customer);
        // return view('student.studentCreate')->with('student', $student);

    }
    public function userEditSubmitted(Request $request){
        $customer = Customer::where('id', $request->id)->first();
        // return  $student;
        $customer->name = $request->name;
        $customer->id = $request->id;
        $customer->save();
        return redirect()->route('registerList');

    }

    public function userDelete(Request $request){
        $customer = Customer::where('id', $request->id)->first();
        $customer->delete();

        return redirect()->route('registerList');
    }
    public function userCreateSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:30",
            "username"=>"required|min:5|max:30",
            'email'=>'email',
            'dob'=>'required',
            "gender"=>"required",
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            "password"=>"required|min:8|max:15",
            "confirm password"=>"required|min:8|max:15"
        ],
        ['name.required'=>"Please put you name here"]
    );
    $customer = new  Customer();
    $customer->name = $request->name;
    $customer->id = $request->id;
    $customer->email = $request->email;
    $customer->save();

    return redirect()->route('registerList');
       
    }
    public function userLogSubmitted(Request $request){
        $validate = $request->validate([
            "username"=>"required|min:5|max:20",
            "password"=>"required|min:8|max:15",
        ],
        ['username.required'=>"Please put you name here"]
    );
        return $request;
    }
}
