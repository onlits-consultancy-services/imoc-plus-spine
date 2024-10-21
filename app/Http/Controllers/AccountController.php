<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Http\Requests\StoreAccountRequest;
use App\Http\Requests\UpdateAccountRequest;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::all();
        return response()->json($accounts);
    }

    public function store(StoreAccountRequest $request)
    {
        $account = new Account();
        $account->account_no = Account::generateAccountNo();
        $account->name = $request->name;
        $account->group = $request->group;
        $account->save();
        return response()->json($account, 201);
    }

    public function show(string $accountNo)
    {
        $account = Account::find($accountNo);
        return response()->json($account);
    }

    public function update(UpdateAccountRequest $request, string $accountNo)
    {
        $account = Account::find($accountNo);
    }

    public function destroy(string $accountNo)
    {
        $account = Account::find($accountNo);
    }
}
