<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
      $this->visit('auth/register')
               ->type('Demo User', 'name')
               ->type('pgoodhall+demo@gmail.com', 'email')
               ->type('io91js', 'password')
               ->type('io91js', 'password_confirmation')
               ->press('Register')
               ->seePageIs('/dashboard');

    }
}
