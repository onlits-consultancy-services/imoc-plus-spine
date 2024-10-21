<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProgramTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_programs_request(): void
    {
        $response = $this->getJson('/api/programs');

        $response->assertStatus(200);
    }

    public function test_get_program_request(): void
    {
        $response = $this->getJson('/api/programs/program_id');

        $response->assertStatus(200);
    }
}
