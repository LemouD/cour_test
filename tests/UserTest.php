<?php


namespace Test;


use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /** @var User $user */
    private $user;

    public function setUp(): void
    {
        $this->user = new User('Ryanlab@email.com', 'Ryan', 'Lab', 21);
    }

    public function tearDown(): void
    {
        unset($this->user);
    }

    public function testIsValid()
    {
        $this->assertTrue($this->user->isValid());

        $this->user->setEmail('Ryanlabemail');
        $this->assertFalse($this->user->isValid());
        $this->user->setEmail('Ryanlab@email.com');

        $this->user->setFirstname('');
        $this->assertFalse($this->user->isValid());
        $this->user->setFirstname('Ryan');

        $this->user->setLastname('');
        $this->assertFalse($this->user->isValid());
        $this->user->setLastname('Lab');

        $this->user->setAge(15);
        $this->assertFalse($this->user->isValid());
        $this->user->setAge(24);
    }
}