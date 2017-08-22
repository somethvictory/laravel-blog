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
  public function testRequiredElements()
  {
    $this->browse(function (Browser $browser) {
      $browser->visit('http://news.sabay.com.kh')
        ->assertVisible('li#entertainment')
        ->assertVisible('li#technology')
        ->assertVisible('li#life')
        ->assertVisible('li#sport');
    });
    
  }
}
