<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    
    public function ShowCustomers($customers = null)
    {
        $customers = Customer::all();

        return view('viewCustomers')->with('customers',$customers);
    }

    public function insert(Request $request)
    {
        $customers = new Customer();
        $customers->name = $request->name;
        $customers->email = $request->email;
        $customers->phone = $request->phone;
        $customers->address1 = $request->address1;
        $customers->address2 = $request->address2;
        $customers->city = $request->city;
        $customers->postcode = $request->postcode;

        $customers->save();

        return redirect('/viewCustomers')->with('staus', "Inserted Successfully");
    }

    public function EditCustomer($id) { 
        $customer = new Customer();        
        $customer = Customer::find($id);

        return view('editCustomer')->with(compact('customer'));
    }
    
    public function UpdateCustomer($id, Request $request) { 
        
        $customer = new Customer();   
        $customer = Customer::find($id);

        /*
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address1 = $request->address1;
        $customer->address2 = $request->address2;
        $customer->city = $request->city;
        $customer->postcode = $request->postcode;
*/



        $customer->name = $request->input('name', $customer->name);
        $customer->email = $request->input('email', $customer->email);
        $customer->phone = $request->input('phone', $customer->phone);
        $customer->address1 = $request->input('address1', $customer->address1);
        $customer->address2 = $request->input('address2', $customer->address2);
        $customer->city = $request->input('city', $customer->city);
        $customer->postcode = $request->input('postcode', $customer->postcode);






        $customer->update();

        return redirect('/viewCustomers')->with('staus', "Inserted Successfully");
    }

    public function DeleteCustomer($id)
    {
        $customer = new Customer();        
        $customer = Customer::find($id);
        $customer->delete();

        return redirect('/viewCustomers')->with('staus', "Deleted Successfully");
    }

    /*
    public function edit($id)
    {
        $customer = new Customer();
        $customer = Customer::find($id);
     //return view('customerDetails/{$id}', compact('customer'));
     //return view('editCustomer')->with('customers',$customer);
     return view('editCustomer/{id}', compact('customer'));

    } */
}


