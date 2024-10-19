<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AccountGroupTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_account_groups_request(): void
    {
        $response = $this->getJson('/api/account-groups');

        $response->assertStatus(200);
    }

    public function test_get_account_group_request(): void
    {
        $response = $this->getJson('/api/account-group');

        $response->assertStatus(200);
    }
}
