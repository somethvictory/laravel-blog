<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HomePageTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testWelcomeDashboard()
    {
      $this->markTestSkipped('must be revisited.');
      $this->browse(function (Browser $browser) {
        $browser->visit('/')
          ->assertSee('Welcome to my blog!!!');
      });
    }

    public function testAbout()
    {
      $this->markTestSkipped('must be revisited.');
      $this->browse(function (Browser $browser) {
        $browser->visit('/')
          ->assertSee('About');
      });
    }

    public function testArchives()
    {
      $this->markTestSkipped('must be revisited.');
      $this->browse(function (Browser $browser) {
        $browser->visit('/')
          ->assertSee('Archives');
      });
    }

    public function testElsewhere()
    {
      $this->markTestSkipped('must be revisited.');
      $this->browse(function (Browser $browser) {
        $browser->visit('/')
          ->assertSee('Elsewhere');
      });
    }

    public function testFooter()
    {
      $this->markTestSkipped('must be revisited.');
      $this->browse(function (Browser $browser) {
        $browser->assertVisible('footer.blog-footer');
      });
    }
}
