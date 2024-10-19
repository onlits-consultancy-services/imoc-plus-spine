<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrganizationTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_organizations_request(): void
    {
        $response = $this->getJson('/api/organizations');

        $response->assertStatus(200);
    }

    public function test_get_organization_request(): void
    {
        $response = $this->getJson('/api/organization');

        $response->assertStatus(200);
    }
}
