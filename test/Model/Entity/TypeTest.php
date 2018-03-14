<?php
namespace LeoGalleguillos\EntityTest\Model\Entity;

use DateTime;
use LeoGalleguillos\Entity\Model\Entity as EntityEntity;
use PHPUnit\Framework\TestCase;

class TypeTest extends TestCase
{
    protected function setUp()
    {
        $this->typeEntity = new EntityEntity\Type();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            EntityEntity\Type::class,
            $this->typeEntity
        );
    }

    public function testGettersAndSetters()
    {
        $typeId = 123;
        $this->assertSame(
            $this->typeEntity,
            $this->typeEntity->setTypeId($typeId)
        );
        $this->assertSame(
            $typeId,
            $this->typeEntity->getTypeId()
        );
    }
}
