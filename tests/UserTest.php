<?php


namespace Test;


use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testIsValid()
    {
        $user = new User('ryanlab@email.com', 'Ryan', 'Lab', 22);
        $this->assertTrue($user->isValid());

        $user = new User('ryanlabemail', 'Ryan', 'Lab', 22);
        $this->assertFalse($user->isValid());
        
        $user = new User('ryanlab@email.com', 'Ryan', 'Lab', 11);
        $this->assertFalse($user->isValid());
    }
}