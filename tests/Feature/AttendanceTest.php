<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AttendanceTest extends TestCase
{
    public function test_get_attendances_request(): void
    {
        $response = $this->getJson('/api/attendances');

        $response->assertStatus(200);
    }

    public function test_get_attendance_request(): void
    {
        $response = $this->getJson('/api/attendances/id');

        $response->assertStatus(200);
    }
}
