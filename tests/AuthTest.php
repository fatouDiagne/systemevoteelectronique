<?php
use PHPUnit\Framework\TestCase;

    //require_once '../authentification/connexion.php'
    class AuthTest extends TestCase{
        public function testLoginSuccess()
    {
        $response = $this->get('/authentification/auth');

        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }
    }
?>