<?php

namespace Tests\Feature\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class StoreRoleTest extends TestCase
{
    use RefreshDatabase;

    public function test_an_auth_user_can_store_a_role()
    {
        $this->withoutExceptionHandling();

        $this->actingAs((User::factory()->create()));

        $role = [
            'title' => 'Admin',
        ];

        $response = $this->post('/role/store' , $role);

        $response->assertStatus(302)
                ->assertRedirect('roles', $role);;
        $this->assertDatabaseHas('roles', $role);
    }
}
