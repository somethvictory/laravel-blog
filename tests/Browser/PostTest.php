<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    use DatabaseTransactions;
    public function testPostsPath()
    {
      $this->browse(function (Browser $browser) {
        $browser->visit('/posts')
          ->assertSee('My First Post');
      });
    }

    public function testVisitNewPostPage()
    {
      $this->browse(function (Browser $browser) {
        $browser->visit('/posts/new')
          ->assertSee('Publish a post')
          ->assertVisible('input#title')
          ->assertVisible('textarea#body');
      });
    }

    public function testCreateNewPost()
    {
      $this->browse(function (Browser $browser) {
        $browser->visit('/posts/new')
          ->type('title', 'A New Post')
          ->type('body', 'Some Text')
          ->click('button')
          ->assertSee('A New Post');
      });
    }
}
