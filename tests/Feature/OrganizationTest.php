<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrganizationTest extends TestCase
{
    public function test_get_organizations_request(): void
    {
        $response = $this->getJson('/api/organizations');

        $response->assertStatus(200);
    }

    public function test_get_organization_request(): void
    {
        $response = $this->getJson('/api/organizations/oid');

        $response->assertStatus(200);
    }
}
