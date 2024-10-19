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
        return response()->json($organization);
    }

    public function show(Organization $organization)
    {
        
    }

    public function update(UpdateOrganizationRequest $request, Organization $organization)
    {
        //
    }

    public function destroy(Organization $organization)
    {
        //
    }
}
