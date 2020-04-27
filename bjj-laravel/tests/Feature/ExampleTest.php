<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/gallery')
             ->assertSeeText('Gallllllery')
             ->assertSeeText('Our warriors always work hard and on the competitions they get many medals!!!');
                        
    
        $response->assertStatus(200);
       
    }
       /** @test */



  

}
