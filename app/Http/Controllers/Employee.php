<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class Employee extends Controller
{
    //
    public function index() {
        return view('welcome');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'firstname'     => 'required',
            'middlename'    => '',
            'lastname'      => 'required',
            'suffix'        => '',
            'email'         => 'required',
            'division'      => 'required',
            'position'      => 'required'
        ]);

        if(User::create($data)) {
            return back()->with('success', "Save successfully");
        }
    }

    public function employee_list() {
        $employees = User::all();

        return view('employee_list')->with([
            'employees' => $employees
        ]);
    }
}
