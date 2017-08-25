<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SabayHomePageTest extends DuskTestCase
{
  //*
    //A basic browser test example.

    //@return void
  public function testNavigation() {
    $this->browse(function (Browser $browser) {
      $browser->visit('http://news.sabay.com.kh')
        ->assertVisible('li#entertainment')
        ->assertVisible('li#technology')
        ->assertVisible('li#life')
        ->assertVisible('li#sport')
        ->assertVisible('a[href="http://kanha.sabay.com.kh"]')
        ->assertVisible('a[href="http://enovel.sabay.com.kh"]')
        ->assertVisible('a[href="http://der.sabay.com.kh"]');
    });

  }

  public function testSidebarAds() {
    $this->browse(function(Browser $browser) {
    $browser->visit('http://news.sabay.com.kh')
      ->assertVisible('div#ad_zone_02')
      ->assertVisible('div#ad_zone_03');
    });
  }
}
