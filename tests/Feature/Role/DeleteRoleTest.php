<?php

namespace Tests\Feature\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Role;

class DeleteRoleTest extends TestCase
{
    use RefreshDatabase;

    public function test_delete_a_role()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(User::factory()->create());

        $role =[ 
            'title'=>'Admin'
        ];

        $this->post(route('storeRole', $role));

       $response= $this->delete('/role/1');
       $response->assertStatus(302);
        $this->assertDatabaseMissing('roles', [        
            'title' => 'Admin',
            'id' => 1, ]);
    }
}
