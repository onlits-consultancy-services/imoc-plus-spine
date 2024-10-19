<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AttendanceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_get_attendances(): void
    {
        $response = $this->get('/api/attendances');

        $response->assertStatus(200);
    }
}
