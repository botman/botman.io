<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VersionTest extends TestCase
{
    /**
     * @test
     **/
    public function root_page_show_master_version()
    {
        $this->visit('/')
             ->see('Installation');
    }

    /**
     * @test
     **/
    public function wrong_version_gets_redirected_to_master()
    {
        $this->visit('/1.2/installation/')
            ->seePageIs('/master/installation')
            ->see('Installation');
    }
}
