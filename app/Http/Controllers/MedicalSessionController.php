<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewMedicalSessionRequest;
use App\Models\Customer;
use App\Models\MedicalSession;
use Illuminate\Http\Request;

class MedicalSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function createFromCustomer(Customer $customer)
    {
        return view('customer.medical.create', compact('customer'));
    }


    public function storeFromCustomer(NewMedicalSessionRequest $request, Customer $customer)
    {
        $medicationSession = $customer->medicalSessions()->create($request->validated());

        return redirect()->route('medication-session.show', $medicationSession->id)->with('success', 'Medication Session Added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalSession $medicalSession)
    {
        $medicalSession->delete();
        return back()->with('success', 'Medical session was deleted.');
    }
}
