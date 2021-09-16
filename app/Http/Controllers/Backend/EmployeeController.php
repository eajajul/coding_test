<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class EmployeeController extends Controller
{
    public function Index()
    {
        $employee=User::where('user_type',2)->paginate(10);
        return view('employee.index',compact('employee'));
    }

    public function Add()
    {
        return view('employee.add');
    }

    public function Insert(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email|unique:users,email,'.$request->id.',id',
            'name'=>'required',
            'phone'=>'required|numeric|unique:users,phone,'.$request->id.',id',
            'password'=>'required|confirmed|min:6'
        ]);

        $employee=!empty($request->id) ? User::findOrfail($request->id) : new User();
        $employee->email=$request->email;
        $employee->name=$request->name;
        $employee->phone=$request->phone;
        $employee->user_type=2;
        $employee->password=Hash::make($request->password);
        $employee->save();

        Session::flash('success','Employee added successfully');
        return redirect()->route('Employee.index');

    }

    public function Edit($id)
    {
        $employee=User::findOrfail($id);
        return view('employee.edit',compact('employee'));
    }

    public function Delete(Request $request)
    {
        $employee=User::findOrfail($request->id);
        $employee->delete();

        Session::flash('success','Deleted successfully');
        return back();
    }
}
