<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Http\Requests\StoreOrganizationRequest;
use App\Http\Requests\UpdateOrganizationRequest;

class OrganizationController extends Controller
{
    public function index()
    {
        $organizations = Organization::all();
        return response()->json($organizations);
    }

    public function store(StoreOrganizationRequest $request)
    {
        $organization = new Organization();
        $organization->oid = Organization::generateOid();
        $organization->name = $request->name;
        $organization->street = $request->street;
        $organization->city = $request->city;
        $organization->state = $request->state;
        $organization->pin = $request->pin;
        $organization->pan = $request->pan;
        $organization->gstin = $request->gstin;
        $organization->save();
        return response()->json($organization, 201);
    }

    public function show(string $oid)
    {
        $organization = Organization::find($oid);
        return response()->json($organization);
    }

    public function update(UpdateOrganizationRequest $request, string $oid)
    {
        $organization = Organization::find($oid);
        $organization->name = $request->name;
        $organization->street = $request->street;
        $organization->city = $request->city;
        $organization->state = $request->state;
        $organization->pin = $request->pin;
        $organization->pan = $request->pan;
        $organization->gstin = $request->gstin;
        $organization->save();
        return response()->json($organization);
        
    }

    public function destroy(string $oid)
    {
        $organization = Organization::find($oid);
        $organization->delete();
        return response()->json($organization);
    }
}
