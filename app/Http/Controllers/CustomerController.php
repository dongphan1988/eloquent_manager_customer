<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->birthday = $request->birthday;
        $customer->andress = $request->andress;
        if($request->hasFile('inputFile')){
            $file = $request->inputFile;
            $path = $file->store('image', 'public');
            $customer->image = $path;
        }
        $customer->save();
        return redirect()->route('customers.index');
    }

    public function edit($id)
    {
$customer = Customer::find($id);
return view('customers.update', compact('customer'));
    }

    public function update(Request $request,$id)
    {
$customer = Customer::find($id);
$customer->name = $request->name;
$customer->birthday = $request->birthday;
$customer->andress = $request->andress;
if($request->hasFile('inputFile')){
    $file = $request->inputFile;
    $path = $file->store('image','public');
    $customer->image = $path;
}
$customer->save();
return redirect()->route('customers.index');
    }

    public function destroy($id)
    {
$customer = Customer::find($id);
$customer->delete();
return redirect()->route('customers.index');
    }
}
