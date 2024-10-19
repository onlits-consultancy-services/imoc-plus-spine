<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AccountTest extends TestCase
{
    use RefreshDatabase;

    public function test_post_account_request(): void
    {
        $account = [
            'account_no' => 'ac_no',
            'name' => 'Capital Account'
        ];

        $response = $this->postJson('/api/accounts', $account);

        $response
            ->assertStatus(201)
            ->assertJson([
                'account_no' => 'ac_no',
                'name' => 'Capital Account',
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
