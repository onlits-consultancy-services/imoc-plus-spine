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
        $organization->name = $request->name;
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
        
    }

    public function destroy(string $oid)
    {
        $organization = Organization::find($oid);
        
    }
}
