<?php

namespace Tests\Feature\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Role;

class DetachRoleTest extends TestCase
{
    use RefreshDatabase;

    public function test_an_auth_user_attach_role_route()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(User::factory()->create());
        $role = Role::factory()->create();

        $response = $this->get('/detach/' . $role->id);

        $response->assertStatus(302);
    }
}
