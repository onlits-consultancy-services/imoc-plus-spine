<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LeadTest extends TestCase
{
    public function test_get_leads_request(): void
    {
        $response = $this->getJson('/api/leads');

        $response->assertStatus(200);
    }

    public function test_get_lead_request(): void
    {
        $response = $this->getJson('/api/leads/id');

        $response->assertStatus(200);
    }
}
