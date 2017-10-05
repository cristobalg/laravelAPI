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

        $response = $this->get('/?q=deadwood');

        $response->assertStatus(200)->assertJson($response->json());
        $response->assertStatus(200)->assertSeeText('Deadwood');

        $response = $this->get('/?q=The Sopranos');

        $response->assertStatus(200)->assertJson($response->json());
        $response->assertStatus(200)->assertSeeText('The Sopranos');
    }
}
