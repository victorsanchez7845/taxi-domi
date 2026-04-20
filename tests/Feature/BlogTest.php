<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BlogTest extends TestCase
{
    use RefreshDatabase;

    public function test_blog_index_is_accessible()
    {
        $response = $this->get('/blog');
        $response->assertStatus(200);
    }

    public function test_blog_index_es_is_accessible()
    {
        $responseEs = $this->get('/es/blog');
        $responseEs->assertStatus(200);
    }

    public function test_blog_post_is_accessible()
    {
        $post = Post::create([
            'title_en' => 'Test Post',
            'title_es' => 'Post de prueba',
            'slug' => 'test-post',
            'content_en' => 'Content en',
            'content_es' => 'Contenido es',
            'status' => true,
            'published_at' => now()->subDay(),
        ]);

        $response = $this->get('/blog/test-post');
        $response->assertStatus(200);
        $response->assertSee('Test Post');
    }

    public function test_blog_post_es_is_accessible()
    {
        $post = Post::create([
            'title_en' => 'Test Post',
            'title_es' => 'Post de prueba',
            'slug' => 'test-post',
            'content_en' => 'Content en',
            'content_es' => 'Contenido es',
            'status' => true,
            'published_at' => now()->subDay(),
        ]);

        $responseEs = $this->get('/es/blog/test-post');
        $responseEs->assertStatus(200);
        $responseEs->assertSee('Post de prueba');
    }

    public function test_unpublished_post_is_not_accessible()
    {
        $post = Post::create([
            'title_en' => 'Future Post',
            'title_es' => 'Post futuro',
            'slug' => 'future-post',
            'content_en' => 'Content en',
            'content_es' => 'Contenido es',
            'status' => true,
            'published_at' => now()->addDay(),
        ]);

        $response = $this->get('/blog/future-post');
        $response->assertStatus(404);
    }

    public function test_inactive_post_is_not_accessible()
    {
        $post = Post::create([
            'title_en' => 'Inactive Post',
            'title_es' => 'Post inactivo',
            'slug' => 'inactive-post',
            'content_en' => 'Content en',
            'content_es' => 'Contenido es',
            'status' => false,
            'published_at' => now()->subDay(),
        ]);

        $response = $this->get('/blog/inactive-post');
        $response->assertStatus(404);
    }
}
