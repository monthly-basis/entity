<?php
namespace MonthlyBasis\EntityTest\Model\Table;

use ArrayObject;
use Exception;
use MonthlyBasis\Entity\Model\Table as EntityTable;
use MonthlyBasis\LaminasTest\TableTestCase;
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
