<?php

namespace Tests\Feature\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class DeleteRoleTest extends TestCase
{use RefreshDatabase;

    public function test_delete_a_role()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(User::factory()->create());

        $role = [
            'title'=>'Admin'
        ];

        $this->post('/role/store', $role);

        $response = $this->delete('/role/1');

        $response->assertRedirect('/roles', $role);
        $this->assertDatabaseCount('roles', 0);
        $this->assertDatabaseMissing('roles', $role);
    }
}
