<?php

namespace Tests\Unit;

use App\Comment;
use App\Services\BlogService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BlogServiceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Creating a comment from a user should be saved in the database
     *
     * @return void
     */
    public function testStoreComment()
    {
        $data = factory(Comment::class)->create();

        $blogService = new BlogService;
        $blogService->storeComment($data->toArray());

        $this->assertDatabaseHas('comments', [
            'name' => $data->name
        ]);
    }
}
