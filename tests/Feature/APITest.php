<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class APITest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * Unauthenthicated request to articles should return 401 status
     *
     * @return void
     */
    public function testUnauthenticatedRequestToArticles()
    {
        $response = $this->withHeaders([
            'Accept' => 'application/json',
        ])->get('/articles');

        $response->assertStatus(401);
    }

    /**
     * Authenthicated request to articles should return 200 status
     *
     * @return void
     */
    public function testAuthenticatedRequestToArticles()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user, 'api')
            ->withHeaders([
                'Accept' => 'application/json',
            ])
            ->get('/articles');

        $response->assertStatus(200);
    }
}
