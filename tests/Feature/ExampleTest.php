<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200)->assertJson([]);

        $response = $this->get('/query');
        $response->assertStatus(400);

        $response = $this->get('/query/deadwood');

        $response->assertStatus(200)->assertJson($response->json());
        $response->assertStatus(200)->assertSeeText('deadwood')->assert;

        $response = $this->get('/query/sopranos');

        $response->assertStatus(200)->assertJson($response->json());
        $response->assertStatus(200)->assertSeeText('The Sopranos');
    }
}
