<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FooTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * @test
     */
    public function itCanTestFoo(): void
    {
        $user = User::factory()->create();
        
        $response = $this->actingAs($user)->get(route('foo'));
        
        $this->assertEquals($response->getContent(), 'bar');
    }
}
