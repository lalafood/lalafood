<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class xTest extends TestCase {
    public function testPJ1()
  {


      $this->visit( "member/index");
    }

    public function testPJ2()
  {


      $response = $this->call('GET', '/');

      $this->assertEquals(200, $response->status());
    }

    public function testPJ3()
  {


      $this->seeInDatabase('users',['name'=>'jaelf']);
    }
  }
