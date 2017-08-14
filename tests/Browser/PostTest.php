<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PostTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testPostsPath()
    {
      $this->browse(function (Browser $browser) {
        $browser->visit('/posts')
          ->assertSee('Post List');
      });
    }
}
