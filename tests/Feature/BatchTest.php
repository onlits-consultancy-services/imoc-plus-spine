<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BatchTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_batches_request(): void
    {
        $response = $this->getJson('/api/batches');

        $response->assertStatus(200);
    }

    public function test_get_batch_request(): void
    {
        $response = $this->getJson('/api/batch');

        $response->assertStatus(200);
    }
}
