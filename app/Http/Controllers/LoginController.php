<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $req)
    {
        return view('login');
    }

    public function register(Request $req)
    {
        $val = [
            'email' => 'required|email',
            'password' => 'required|min:4|max:10',
            // 'image' => 'required|mimes:jpg,png,jpeg'
        ];
        $validated = $req->validate($val);


        if (Auth::guard('webuser')->attempt($validated)) {
            return redirect()->intended('employee');
        }

        // $newName = $req->email . '.' . $req->image->extension();
        // $req->image->move(public_path('uploads'), $newName);
        // print_r($validated);
        // $validated['password'] = Hash::make($validated['password']);
        // $employee = new Employee($validated);
        // foreach ($validated as $key => $item) {
        //     $employee->$key = $item;
        // }
        // $employee->save();
        // return view('login');

        return back()->withErrors(['email' => "Invalid Credentials"]);
    }

    public function employee()
    {

        $employee = Employee::paginate(4);
        // $employee =  Employee::Where('emp_id', 101)->get();
        $data = ['employee' => $employee];
        return view('employee', $data);
    }
}