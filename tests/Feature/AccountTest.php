<?php

namespace Tests\Feature;

use App\Models\Account;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AccountTest extends TestCase
{
    public function test_post_account_request(): void
    {
        $account = [
            'account_no' => Account::generateAccountNo(),
            'name' => 'Capital Account',
            'group' => 'Capital Account',
        ];

        $response = $this->postJson('/api/accounts', $account);

        $response
            ->assertStatus(201)
            ->assertJson([
                'account_no' => $account['account_no'],
                'name' => $account['name'],
                'group' => $account['group'],
            ]);
    }

    public function test_get_accounts_request(): void
    {
        $response = $this->getJson('/api/accounts');

        $response->assertStatus(200);
    }

    public function test_get_account_request(): void
    {
        $response = $this->getJson('/api/accounts/ac_no');

        $response->assertStatus(200);
    }
}
