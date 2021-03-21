<?php

namespace Tests\Feature\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UpdateRoleTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_role_stored_can_be_updated()
    {
        $this->withoutExceptionHandling();
        
        $this->actingAs(User::factory()->create());

        $role =[ 
            'title'=>'Admin'
        ];

        $this->post(route('storeRole', $role));

        $roleUpdated =[ 
            'title'=>'User'
        ];

        $response = $this->put('/role/update/{role}', $roleUpdated);

        $response->assertStatus(302)
                ->assertRedirect('/roles', $roleUpdated);;

        $this->assertDatabaseHas('roles', $roleUpdated);
    }
}
