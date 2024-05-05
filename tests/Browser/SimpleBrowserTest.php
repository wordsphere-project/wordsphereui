<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\Browser\BrowserTestCase;

class SimpleBrowserTest extends BrowserTestCase
{

    public function test_it_can_open_home_page(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->waitForText('Laracasts', 10)
                ->assertSee('Laravel');
        });
    }

    public function test_it_can_can_render_the_buttons_page(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/components/buttons')
                ->assertSee('Button')
                ->assertPresent('#dusk-button');
        });
    }

}
