<?php
namespace LeoGalleguillos\EntityTest\Model\Table;

use ArrayObject;
use Exception;
use LeoGalleguillos\Entity\Model\Table as EntityTable;
use LeoGalleguillos\Test\TableTestCase;
use Zend\Db\Adapter\Adapter;
use PHPUnit\Framework\TestCase;

class MetaTest extends TableTestCase
{
    protected function setUp(): void
    {
        $this->metaTable = new EntityTable\Meta($this->getAdapter());

        $this->setForeignKeyChecks0();
        $this->dropTable('meta');
        $this->createTable('meta');
        $this->setForeignKeyChecks1();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            EntityTable\Meta::class,
            $this->metaTable
        );
    }
}
