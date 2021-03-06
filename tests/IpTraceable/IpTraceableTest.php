<?php

use PHPUnit\Framework\TestCase;
use LaravelDoctrine\Extensions\IpTraceable\IpTraceable;

class IpTraceableTest extends TestCase
{
    /**
     * @var IpTraceableEntity
     */
    protected $entity;

    public function setUp(): void
    {
        $this->entity = new IpTraceableEntity();
    }

    public function test_can_set_created_from_ip()
    {
        $this->entity->setCreatedFromIp('CREATED_IP');

        $this->assertEquals('CREATED_IP', $this->entity->getCreatedFromIp());
    }

    public function test_can_set_updated_from_ip()
    {
        $this->entity->setUpdatedFromIp('UPDATED_IP');

        $this->assertEquals('UPDATED_IP', $this->entity->getUpdatedFromIp());
    }
}

class IpTraceableEntity
{
    use IpTraceable;
}
