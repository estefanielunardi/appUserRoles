<?php

namespace Tests\Feature\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Role;

class EditRoleTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_role_can_be_edit_view()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(User::factory()->create());
        $role = Role::factory()->create();

        $response = $this->get('/role/edit/' . $role->id);

        $response->assertStatus(200)
                ->assertViewIs('editRole');
    }
}
