<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Contact;

class ContactTest extends TestCase
{
    private $contact;

    public function setUp(): void
    {
        $this->contact = new Contact();
        $this->contact->setFirstname('toto');
        $this->contact->setLastname('foo');
        $this->contact->setEmail('toto@mail.com');
        $this->contact->setPhoneNumber('0644586295');
    }

    public function tearDown(): void
    {
        unset($this->contact);
    }

    public function testIsValid()
    {
        $this->assertTrue($this->contact->isValid());
    }

    public function testGetFirstnameOK()
    {
        $this->assertEquals('toto', $this->contact->getFirstname());
    }

    public function testGetFirstnameKO()
    {
        $this->assertNotEquals('false', $this->contact->getFirstname());
    }

    public function testGetLastnameOK()
    {
        $this->assertEquals('foo', $this->contact->getLastname());
    }

    public function testGetLastnameKO()
    {
        $this->assertNotEquals('false', $this->contact->getLastname());
    }

    public function testGetEmailOK()
    {
        $this->assertEquals('toto@mail.com', $this->contact->getEmail());
    }

    public function testGetEmailKO()
    {
        $this->assertNotEquals('false', $this->contact->getEmail());
    }

    public function testGetPhoneNumberOK()
    {
        $this->assertEquals('0644586295', $this->contact->getPhoneNumber());
    }

    public function testGetPhoneNumberKO()
    {
        $this->assertNotEquals('false', $this->contact->getPhoneNumber());
    }

    public function testSetFirstnameOk()
    {
        $this->contact->setFirstname('pap');
        $this->assertEquals('pap', $this->contact->getFirstname());
    }

    public function testSetFirstnameKoEmpty()
    {
        $this->contact->setFirstname('');
        $this->assertFalse($this->contact->isValid());
    }

    public function testSetLastnameOk()
    {
        $this->contact->setLastname('chulo');
        $this->assertEquals('chulo', $this->contact->getLastname());
    }

    public function testSetLastnameKoEmpty()
    {
        $this->contact->setLastname('');
        $this->assertFalse($this->contact->isValid());
    }

    public function testSetEmailOk()
    {
        $this->contact->setEmail('pap.chulo@mail.com');
        $this->assertEquals('pap.chulo@mail.com', $this->contact->getEmail());
    }

    public function testSetEmailKoEmpty()
    {
        $this->contact->setEmail('');
        $this->assertFalse($this->contact->isValid());
    }

    public function testSetEmailKoInvalidFormat()
    {
        $this->contact->setEmail('inv@lidmail');
        $this->assertFalse($this->contact->isValid());
    }

    public function testSetPhoneNumberOk()
    {
        $this->contact->setPhoneNumber('0783453843');
        $this->assertEquals('074583438', $this->contact->getPhoneNumber());
    }

    public function testSetPhoneNumberOkEmpty()
    {
        $this->contact->setPhoneNumber('');
        $this->assertTrue($this->contact->isValid());
    }

    public function testSetPhoneNumberKoInvalidFormat()
    {
        $this->contact->setPhoneNumber('07352');
        $this->assertFalse($this->contact->isValid());
    }
}
