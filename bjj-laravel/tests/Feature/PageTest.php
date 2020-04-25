<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageTest extends TestCase
{

    public function testWebPages(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/about');
        $response->assertStatus(200);

        $response = $this->get('/seminar');
        $response->assertStatus(200);

        $response = $this->get('/timetable');
        $response->assertStatus(200);

        $response = $this->get('/prices');
        $response->assertStatus(200);
    }

    public function testNotFoundWebPage()
    {
        $response = $this->get('/not_found_url');
        $response->assertStatus(404);
    }
}
