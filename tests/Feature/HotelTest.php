<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class HotelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testArtikel(){
    	$response = $this->call('GET','/artikel');
    	$response->assertStatus(200);
    }

    public function testCreateArtikel(){
    	 $response = $this->call('POST', '/artikel-create', ['title' => 'Indomie Tanpa ada Duanya','content'=>'Hanya Satu-satunya','user_id'=>'2']);
    	 $response->assertStatus(200);
    }
}
