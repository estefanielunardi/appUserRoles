<?php

namespace Tests\Feature\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class AllRolesTest extends TestCase
{
    use RefreshDatabase;

    public function test_all_roles_view()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(User::factory()->create());

        $roles = [
            'title' => 'Admin'
        ];

        $this->post('/role/store' , $roles);

        $response = $this->get('/roles' , $roles);

        $response->assertViewIs('rolesPage', $roles);
    }
}
