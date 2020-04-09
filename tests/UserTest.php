<?php


namespace Test;


use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testIsValid()
    {
        $user = new User('good@email.com', 'Ryan', 'Lab', 22);
        $this->assertTrue($user->isValid());

        $user = new User('bademail', 'Ryan', 'Lab', 22);
        $this->assertFalse($user->isValid());

        $user = new User('good@email.com', '', 'Lab', 22);
        $this->assertFalse($user->isValid());

        $user = new User('good@email.com', 'Ryan', '', 22);
        $this->assertFalse($user->isValid());

        $user = new User('good@email.com', 'Ryan', 'Lab', 13);
        $this->assertFalse($user->isValid());
    }
}