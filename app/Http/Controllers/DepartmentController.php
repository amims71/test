<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function index()
    {
        $departments = Department::all()->sortByDesc("id");
        return view('department.index', compact('departments'));
    }


    public function create()
    {
        $department= new Department();
        return view('department.create', compact('department'));
    }


    public function store(Request $request)
    {
//        dd();
        if($department = Department::create($this->validateDepartment())){
            toast('Department information Created Successfully ','success');
        }
        else{
            toast('Please Try again ','error');
        }


        return redirect('department');
    }
    private function validateDepartment()
    {
        return request()->validate(['department' => 'required']);
    }


    public function edit(Department $department)
    {
        return view('department.edit', compact('department'));
    }

    public function update(Department $department)
    {
        if($department->update($this->validateDepartment())){

            toast(' Department information  Edited Successfully','success');
        }
        else{
            toast(' Failed ! Please Try again Later','error');
        }

        return redirect('department');
    }


    public function destroy(Department $department)
    {
        if ($department->delete()) {
            toast(' Department Status  has been Deleted ', 'success');
        } else {
            toast(' Failed ! Please Try again Later', 'error');
        }

        return redirect('department');
    }
}
