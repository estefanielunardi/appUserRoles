<?php

namespace Tests\Feature\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class GetUserTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_all_users()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(User::factory()->create());

        $users = [
            'name' => 'Maria'
        ];

        $response = $this->get('/users');

        $response->assertStatus(200)
                ->assertViewIs('usersPage', $users);
    }
}
