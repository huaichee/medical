<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index(Request $request)
    {
        $customers = Customer::query()
            ->when(!empty(request('search')), function($query){
                $query->where('name', 'LIKE', '%' . request('search') . '%');
            })
            ->withCount('medicalSessions')
            ->lastVisit()
            ->orderBy('name')
            ->paginate(10)
            ->withQueryString();

        return view('customer.index', compact('customers'));
    }


    public function create()
    {
        return view('customer.create');
    }


    public function store(NewCustomerRequest $request)
    {
        $customer = Customer::create($request->validated());
        return redirect()->route('customer.show', $customer->id);
    }


    public function show(Customer $customer)
    {
        $customer->load('medicalSessions.medicalSessionDetails.bodyPosition');
        return view('customer.show', compact('customer'));
    }


    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }


    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->validated());
        return redirect()->route('customer.show', $customer->id)->with('success', 'Customer information updated.');
    }

    public function destroy($id)
    {
        //
    }
}
