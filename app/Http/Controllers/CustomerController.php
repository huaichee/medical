<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index(Request $request)
    {
        $customers = Customer::query()
            ->withCount('medicalSessions')
            ->lastVisit()
            ->paginate(20);

        return view('customer.index', compact('customers'));
    }


    public function create()
    {
        return view('customer.create');
    }


    public function store(NewCustomerRequest $request)
    {
        Customer::create($request->validated());
        return back();
    }


    public function show(Customer $customer)
    {
        $customer->load('medicalSessions');
        return view('customer.show', compact('customer'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
