<?php

namespace Tests\Unit;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\withFaker;
use Tests\TestCase;
use Tests\Unit\FieldTest;


class FieldTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_add_new_field()
    {
        $response = $this->post('/insert-category',[

            'name' => 'anik',
            'status' => '0',
            'popular' => '1',
            'meta_title' => 'doctor',
            'description' => 'daat er doctor',
        ]);


        $response->assertStatus(302);
    }

    public function test_view_of_inserting_a_field()
    {
        $response = $this->get('/add-category');

        $response->assertRedirect('/login');
    }

    public function test_view_of_edit_a_field()
    {
        $response = $this->get('/edit-category/{id}');

        $response->assertStatus(404);
    }

    public function test_update_new_field()
    {
        $response = $this->put('/update-category/{id}',[

            'name' => 'anikk',
            'status' => '0',
            'popular' => '1',
            'meta_title' => 'doctorr',
            'description' => 'daat er doctorr',
        ]);


        $response->assertStatus(302);
    }


}
