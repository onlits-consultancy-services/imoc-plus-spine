<?php

namespace App\Http\Controllers;

use App\Models\AccountGroup;
use App\Http\Requests\StoreAccountGroupRequest;
use App\Http\Requests\UpdateAccountGroupRequest;

class AccountGroupController extends Controller
{
    public function index()
    {
        $accountGroups = AccountGroup::all();
        return response()->json($accountGroups);
    }

    public function store(StoreAccountGroupRequest $request)
    {
        $accountGroup = new AccountGroup();
        $accountGroup->name = $request->name;
        $accountGroup->parent = $request->parent;
        $accountGroup->type = $request->type;
        $accountGroup->save();
        return response()->json($accountGroup, 201);
    }

    public function show(string $name)
    {
        $accountGroup = AccountGroup::find($name);
        return response()->json($accountGroup);
    }

    public function update(UpdateAccountGroupRequest $request, string $name)
    {
        $accountGroup = AccountGroup::find($name);
    }

    public function destroy(string $name)
    {
        $accountGroup = AccountGroup::find($name);
    }
}
