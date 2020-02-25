<?php

namespace Tests\Feature;

use App\Book;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class booksTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function it_returns_all_books()
    {
        factory(Book::class, 20)->create();
        $this->get('api/books')
            ->assertOk()
            ->assertJsonCount(20)
            ->assertJsonStructure([['title']]);
    }
}
