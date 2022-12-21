<?php

namespace Tests\Unit;


use Tests\TestCase;
use App\Models\User;
use Tests\Unit\FieldTest;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_duplicate_user_exist()
    {
        $user1 = User::make([
            "name"=>'user1',
            'email' => 'user1@gmail.com'
        ]);

        $user2 = User::make([
            "name"=>'user2',
            'email' => 'user2@gmail.com'
        ]);

        $this->assertTrue($user1->name != $user2->name);

    }


    public function test_user_access_dashboard()
    {
        $admin = User::factory()->create(['role_as'=>1]);

        $response = $this->actingAs($admin)->get('/dashboard');
        $response->assertStatus(302);
    }

    public function test_user_access_denied()
    {
        $response = $this->get('dashboard');
        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

}
