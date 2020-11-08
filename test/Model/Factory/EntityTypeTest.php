<?php
namespace MonthlyBasis\EntityTest\Model\Factory;

use MonthlyBasis\Entity\Model\Entity as EntityEntity;
use MonthlyBasis\Entity\Model\Factory as EntityFactory;
use MonthlyBasis\Entity\Model\Service as EntityService;
use MonthlyBasis\Entity\Model\Table as EntityTable;
use PHPUnit\Framework\TestCase;

class EntityTypeTest extends TestCase
{
    protected function setUp(): void
    {
        $this->entityTypeTableMock = $this->createMock(
            EntityTable\EntityType::class
        );
        $this->entityTypeFactory = new EntityFactory\EntityType(
            $this->entityTypeTableMock
        );
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            EntityFactory\EntityType::class,
            $this->entityTypeFactory
        );
    }

    public function testBuildFromArray()
    {
        $array = [
            'entity_type_id' => '1',
            'name'           => 'name',
        ];

        $entityTypeEntity = new EntityEntity\EntityType();
        $entityTypeEntity->setEntityTypeId($array['entity_type_id'])
                         ->setName($array['name']);

        $this->assertEquals(
            $entityTypeEntity,
            $this->entityTypeFactory->buildFromArray($array)
        );
    }
}
