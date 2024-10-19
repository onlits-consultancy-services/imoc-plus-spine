<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LearnerTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_learners_request(): void
    {
        $response = $this->getJson('/api/learners');

        $response->assertStatus(200);
    }

    public function test_get_learner_request(): void
    {
        $response = $this->getJson('/api/learner');

        $response->assertStatus(200);
    }
}
