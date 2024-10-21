<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Http\Requests\StoreLeadRequest;
use App\Http\Requests\UpdateLeadRequest;

class LeadController extends Controller
{
    public function index()
    {
        $leads = Lead::all();
        return response()->json($leads);
    }

    public function store(StoreLeadRequest $request)
    {
        $lead = new Lead();

        $lead->save();
        return response()->json($lead, 201);
    }

    public function show(string $id)
    {
        $lead = Lead::find($id);
        return response()->json($lead);
    }

    public function update(UpdateLeadRequest $request, string $id)
    {
        $lead = Lead::find($id);
        
    }

    public function destroy(int $id)
    {
        $lead = Lead::find($id);
        
    }
}
