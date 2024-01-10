<?php

namespace Tests\Feature;

use App\Models\Cat;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CatsTest extends TestCase
{
    use RefreshDatabase;

    public function test_main_page_has_cats()
    {
        $cat = Cat::factory()->create([
            'name' => 'Kate',
        ]);

        $response = $this->get(route('home'));

        $response
            ->assertStatus(200)
            ->assertSee($cat->name);
    }
}
