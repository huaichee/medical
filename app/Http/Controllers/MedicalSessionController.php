<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewMedicalSessionDetailRequest;
use App\Http\Requests\MedicalSessionRequest;
use App\Models\BodyPosition;
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


    public function createMedicalDetail(MedicalSession $medicalSession)
    {
        $bodyPositions = BodyPosition::query()->get();
        return view('medical-session.detail.create', compact('medicalSession', 'bodyPositions'));
    }

    public function storeMedicalDetail(NewMedicalSessionDetailRequest $request, MedicalSession $medicalSession)
    {
        $medicalSession->medicalSessionDetails()->create($request->validated());
        return redirect()->route('medical-session.show', $medicalSession->id)->with('success', 'Medication Session Added.');
    }



    public function createFromCustomer(Customer $customer)
    {
        return view('customer.medical.create', compact('customer'));
    }


    public function storeFromCustomer(MedicalSessionRequest $request, Customer $customer)
    {
        $medicalSession = $customer->medicalSessions()->create($request->validated());

        return redirect()->route('medical-session.show', $medicalSession->id)->with('success', 'Medication Session Added.');
    }


    public function show(MedicalSession $medicalSession)
    {
        $medicalSession->load('customer', 'medicalSessionDetails.bodyPosition');
        return view('medical-session.show', compact('medicalSession'));
    }

    public function edit(MedicalSession $medicalSession)
    {
        return view('medical-session.edit', compact('medicalSession'));
    }


    public function update(MedicalSessionRequest $request, MedicalSession $medicalSession)
    {
        $medicalSession->update($request->validated());
        return redirect()->route('medical-session.show', $medicalSession->id)->with('success', 'Medical session information updated.');
    }

    public function destroy(MedicalSession $medicalSession)
    {
        $medicalSession->delete();
        return back()->with('success', 'Medical session was deleted.');
    }
}
