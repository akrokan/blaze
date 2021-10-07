<?php

namespace Tests\Feature\Livewire;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostsTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_show_post()
    {
        // create the user
        $user = User::factory()->create();

        // act as the user created
        $this->actingAs($user);

        // create a post
        $post = $user->posts()->save(Post::factory()->make());

        $response = $this->get("/post/{$post->slug}");
        $response->assertStatus(200);
    }
}
