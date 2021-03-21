<?php

namespace Tests\Feature\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class CreateRoleTest extends TestCase
{
    use RefreshDatabase;

    public function test_route_create_form()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(User::factory()->create());

        $response = $this->get('/role/create');

        $response->assertStatus(200);
    }

    public function test_view_create_form()
    {
        $this->actingAs(User::factory()->create());

        $response = $this->get('/role/create');

        $response->assertViewIs('createRoleForm');
    }
}
