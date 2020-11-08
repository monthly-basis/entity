<?php
namespace MonthlyBasis\EntityTest\Model\Entity;

use DateTime;
use MonthlyBasis\Entity\Model\Entity as EntityEntity;
use PHPUnit\Framework\TestCase;

class EntityTest extends TestCase
{
    protected function setUp(): void
    {
        $this->entityEntity = new EntityEntity\Entity();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            EntityEntity\Entity::class,
            $this->entityEntity
        );
    }

    public function testGettersAndSetters()
    {
        $entityId = 123;
        $this->assertSame(
            $this->entityEntity,
            $this->entityEntity->setEntityId($entityId)
        );
        $this->assertSame(
            $entityId,
            $this->entityEntity->getEntityId()
        );
    }
}
