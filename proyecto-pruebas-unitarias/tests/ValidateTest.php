<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_email(){
        $email =Validate::email('jhon-.fredy@hotmail.com');
        $this->assertTrue($email);

        $email =Validate::email('jhon-.fredy@@hotmail.com');
        $this->assertFalse($email);
    }
    public function test_url(){
        $url =Validate::url('https://holi.com');
        $this->assertTrue($url);

        $url =Validate::url('holi.com');
        $this->assertFalse($url);
    }
    public function test_password(){
        $password =Validate::password('123456');
        $this->assertTrue($password);

    }
}