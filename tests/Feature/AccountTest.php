<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AccountTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_get_accounts(): void
    {
        $response = $this->get('/api/accounts');

        $response->assertStatus(200);
    }
}
