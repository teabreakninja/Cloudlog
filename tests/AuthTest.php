<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthTest extends TestCase
{
    /**
     * Check User registration.
     *
     * @return void
     */
    public function UserRegTest()
    {
      $this->visit('auth/register')
               ->type('Demo User', 'name')
               ->type('pgoodhall+demo@gmail.com', 'email')
               ->type('cloudlog32', 'password')
               ->type('cloudlog32', 'password_confirmation')
               ->press('Register')
               ->seePageIs('/dashboard')
               ->seeInDatabase('users', ['email' => 'pgoodhall+demo@gmail.com']);
    }
}
