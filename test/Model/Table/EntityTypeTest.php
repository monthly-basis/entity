<?php
namespace MonthlyBasis\EntityTest\Model\Table;

use ArrayObject;
use Exception;
use MonthlyBasis\Entity\Model\Table as EntityTable;
use MonthlyBasis\LaminasTest\TableTestCase;
use Laminas\Db\Adapter\Adapter;
use PHPUnit\Framework\TestCase;

class EntityTypeTest extends TableTestCase
{
    protected function setUp(): void
    {
        $this->entityTypeTable = new EntityTable\EntityType($this->getAdapter());

        $this->setForeignKeyChecks0();
        $this->dropTable('entity_type');
        $this->createTable('entity_type');
        $this->setForeignKeyChecks1();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            EntityTable\EntityType::class,
            $this->entityTypeTable
        );
    }

    public function testInsertAndSelectCount()
    {
        $this->assertSame(
            0,
            $this->entityTypeTable->selectCount()
        );
        $this->entityTypeTable->insert(
            'name'
        );
        $this->entityTypeTable->insert(
            'name2'
        );
        $this->entityTypeTable->insert(
            'name3'
        );
        $this->assertSame(
            3,
            $this->entityTypeTable->selectCount()
        );
    }

    public function testSelectWhereEntityTypeId()
    {
        $this->entityTypeTable->insert(
            'name'
        );
        $this->entityTypeTable->insert(
            'name2'
        );
        $this->entityTypeTable->insert(
            'name3'
        );
        $array = $this->entityTypeTable->selectWhereEntityTypeId(2);
        $this->assertSame(
            2,
            $array['entity_type_id']
        );
        $this->assertSame(
            'name2',
            $array['name']
        );
    }

    public function testSelectWhereName()
    {
        $this->entityTypeTable->insert(
            'name'
        );
        $this->entityTypeTable->insert(
            'name2'
        );
        $this->entityTypeTable->insert(
            'name3'
        );
        $array = $this->entityTypeTable->selectWhereName('name3');
        $this->assertSame(
            3,
            $array['entity_type_id']
        );
        $this->assertSame(
            'name3',
            $array['name']
        );
    }
}
