<?php
namespace LeoGalleguillos\EntityTest\Model\Table;

use ArrayObject;
use Exception;
use LeoGalleguillos\Entity\Model\Table as EntityTable;
use LeoGalleguillos\Test\TableTestCase;
use Zend\Db\Adapter\Adapter;
use PHPUnit\Framework\TestCase;

class EntityTest extends TableTestCase
{
    protected function setUp()
    {
        $this->entityTable = new EntityTable\Entity($this->getAdapter());

        $this->setForeignKeyChecks0();
        $this->dropTable('entity');
        $this->createTable('entity');
        $this->setForeignKeyChecks1();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            EntityTable\Entity::class,
            $this->entityTable
        );
    }

    public function testInsert()
    {
        $entityId = $this->entityTable->insert(
            1,
            12345
        );
        $this->assertSame(
            $entityId,
            1
        );
        $entityId = $this->entityTable->insert(
            5,
            54321
        );
        $this->assertSame(
            $entityId,
            2
        );
    }
}
