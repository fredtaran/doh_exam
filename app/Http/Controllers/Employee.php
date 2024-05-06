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

    public function edit_employee($id) {
        $emp = User::findOrFail($id);

        return view('edit')->with([
            'id'    => $id,
            'emp'   => $emp
        ]);
    }

    public function save_edit(Request $request, $id) {
        $data = $request->validate([
            'firstname'     => 'required',
            'middlename'    => '',
            'lastname'      => 'required',
            'suffix'        => '',
            'email'         => 'required',
            'division'      => 'required',
            'position'      => 'required'
        ]);

        $emp = User::findOrFail($id);
        $emp->firstname     = $data['firstname'];
        $emp->middlename    = $data['middlename'];
        $emp->lastname      = $data['lastname'];
        $emp->suffix        = $data['suffix'];
        $emp->email         = $data['email'];
        $emp->division      = $data['division'];
        $emp->position      = $data['position'];
        $emp->save();

        return back()->with('success', "Save successfully");
    }
}
