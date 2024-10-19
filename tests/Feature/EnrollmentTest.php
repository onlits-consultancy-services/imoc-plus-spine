<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnrollmentTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_enrollments_request(): void
    {
        $response = $this->getJson('/api/enrollments');

        $response->assertStatus(200);
    }

    public function test_get_enrollment_request(): void
    {
        $response = $this->getJson('/api/enrollment');

        $response->assertStatus(200);
    }
}
