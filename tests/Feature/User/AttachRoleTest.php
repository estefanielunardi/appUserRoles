<?php

namespace Tests\Feature\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Role;
use App\Models\User;

class AttachRoleTest extends TestCase
{ 
    use RefreshDatabase;
    
    public function test_an_auth_user_detach_role_route()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(User::factory()->create());
        $role = Role::factory()->create();

        $response = $this->get('/attach/' . $role->id);

        $response->assertStatus(302);
    }
}
