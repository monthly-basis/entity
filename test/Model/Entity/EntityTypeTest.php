<?php
namespace LeoGalleguillos\EntityTest\Model\Entity;

use DateTime;
use LeoGalleguillos\Entity\Model\Entity as EntityEntity;
use PHPUnit\Framework\TestCase;

class EntityTypeTest extends TestCase
{
    protected function setUp(): void
    {
        $this->entityTypeEntity = new EntityEntity\EntityType();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            EntityEntity\EntityType::class,
            $this->entityTypeEntity
        );
    }

    public function testGettersAndSetters()
    {
        $entityTypeId = 123;
        $this->assertSame(
            $this->entityTypeEntity,
            $this->entityTypeEntity->setEntityTypeId($entityTypeId)
        );
        $this->assertSame(
            $entityTypeId,
            $this->entityTypeEntity->getEntityTypeId()
        );
    }
}
