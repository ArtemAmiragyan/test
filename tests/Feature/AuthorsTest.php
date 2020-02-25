<?php

namespace Tests\Feature;

use App\Author;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class authorsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function it_returns_all_authors()
    {
        factory(Author::class, 20)->create();
        $this->get('api/authors')
            ->assertOk()
            ->assertJsonCount(20)
            ->assertJsonStructure([['name']]);
    }
}
