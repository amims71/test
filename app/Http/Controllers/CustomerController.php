<?php

namespace App\Http\Controllers;

use App\Customer;
use App\CustomerDepartment;
use App\Department;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::paginate(2);
//        dd($customers);
        return view('customer.index', compact('customers'));
    }


    public function create()
    {
        $customer= new Customer();
        $departments = Department::all()->sortByDesc("id");
        return view('customer.create', compact('customer','departments'));
    }


    public function store(Request $request)
    {
//        dd();
        if($customer=Customer::create(['name'=>$request->name])){
            CustomerDepartment::create(['customer_id'=>$customer->id,'department_id'=>$request->department_id]);
            toast('Customer information Created Successfully ','success');
        }
        else{
            toast('Please Try again ','error');
        }


        return redirect('customer');
    }


    public function edit(Customer $customer)
    {
        $departments = Department::all()->sortByDesc("id");
        return view('customer.edit', compact('customer','departments'));
    }

    public function update(Customer $customer, Request $request)
    {
        if($customer->update(['name'=>$request->name])){
            $customer->customerDepartment->update(['customer_id'=>$customer->id,'department_id'=>$request->department_id]);
            toast(' Customer information  Edited Successfully','success');
        }
        else{
            toast(' Failed ! Please Try again Later','error');
        }

        return redirect('customer');
    }


    public function destroy(Customer $customer)
    {
        if ($customer->delete()) {
            $customer->customerDepartment->delete();
            toast(' Customer  has been Deleted ', 'success');
        } else {
            toast(' Failed ! Please Try again Later', 'error');
        }

        return redirect('customer');
    }
}
